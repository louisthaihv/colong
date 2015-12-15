<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Week;
use App\Popup;
use App\CardUser;
use App\Card;
use App\Gift;
use App\GiftUser;
use App\Server;
use App\Character;
use App\GAccount;
use App\Services\ServiceAccount;
use App\Http\Controllers\BaseController;

class AuthController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        dd(config('database.connections.mysql'));
        $this->middleware('guest', ['except' => 'getLogout']);
        $popup = Popup::where('status', 1)->first();
        view()->share('popup', $popup);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'captcha' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogin(){
        if(!Auth::check())
            return view('frontend.user.user_login');
        else{
            if(Auth::user()->isAdmin()){
                return redirect()->route('adminIndex');
            }
            else{
                return redirect()->route('frontend.index');
            }
        }
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);
        
        $username_credentials=['username'=>$request->get('username'), 'password'=>$request->get('password')];
        if(Auth::attempt($username_credentials, $request->has('remember'))){
            if($request->ajax()){
                $message = ["success"=>"success", "massage"=>"login success"];
                return response()->json($message);
            }
            else
            {
                if(Auth::user()->isAdmin()){
                    return redirect()->route('admin.categories.index');
                }else{
                    return redirect()->route('frontend.index');
                }
            }
        }
        else{
            if($request->ajax()){
                $message = ["error"=>"error", "massage"=>"Email or password invalid!"];
                return response()->json($message);
            }
            else
            {
                return redirect()->back()->withErrors(['login_error'=>'Email or password invalid!'])->withInput($request->old('email'));
            }
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('frontend.index');
    }

    public function profile($id){
        $weeks = Week::all();
        return view('frontend.user.profile')->with(compact('weeks'));
    }

    public function confirm(){
        $weeks = Week::all();

        return view('frontend.user.confirm')->with(compact('weeks'));
    }
    //////////////////////////////////////
    //       test edit user
    //////////////////////////////////////


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function postEditUser(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->setConnection("as");
        $this->validate($request, [
            //'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
            
        ]);

        $input = $request->except('_token');

        $user->email = $input['email'];
        //$user->username = $input['username'];
        $user->phone = $input['phone'];
        $user->status ='0';
        $user->save();

        
        return redirect()->back();
    }
    //////////////////////////////////
    //          end edit user
    //////////////////////////////////
    public function getRegister(){
        return view('frontend.user.user_register');
    }
    public function postRegister(Request $request){
        $data = $request->except('_token');

        if(!ServiceAccount::checkCaptcha($data)) {
            $account = GAccount::where('loginName', $data['username'])->first();
            $user = User::where('username',$data['username'])->first();
    
            if(!is_null($user) && !is_null($account)){
                return redirect()->route('user.register')->with('error', 'Username đã tồn tại');
            }
            if($data['password'] !=$data['re_password']){
                return redirect()->route('user.register')->with('error', 'Password không giống nhau.');
            }
            $user = new User;
            $account = new GAccount;

            $user->username = $data['username'];
            $account->loginName = $data['username'];

            $user->phone = 'chưa có';
            $user->email = 'chưa có';

            //for database of game;
            $user->password = \Hash::make($data['password']);
            $account->password_hash = ServiceAccount::getPassword($data['password']);
            
            $account->save();
            $user->save();
            if(!Auth::check()){
                Auth::login($user);
            }

            return redirect()->route('user.confirm');

        } else {

            return redirect()->route('user.register')->with('error', 'Lỗi Captcha!');
        }
    }

    public function getNapthe(){
        $cards = Card::all();
        return view('frontend.user.card')->with(compact('cards'));
    } 

    public function getAcNapthe($id){
        $card = Card::findOrfail($id);
        return view('frontend.user.frm_napthe')->with('card', $card);
    }

    public function postNapthe(Request $request, $id){
        $data = $request->except('_token');
        $card_user = new CardUser;

        $card_user->user_id = Auth::user()->id;
        $rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make($data, $rules);
            if ($validator->fails())
            {
                dd('captcha wrong');
            }
            else
            {
                dd('captcha ok');
            }
        $card_user->save();
        return redirect()->route('user.napthe.get')->with('message','Nạp thẻ thành công');
    }
    public function getGift(){
        $weeks = Week::all();
        return view('frontend.user.giftcode')->with(compact('weeks'));
    }
    public function postGift(Request $request){
        $data = $request()->except('_token');
        $gift = Gift::where('gift_code', $data['gift_code'])->first();
        if(is_null($gift)){
            return redirect()->route('user.giftcode.get')->with('message', 'Gift code sai!');
        }
        $user_gift = new GiftUser();
        $user_gift->gift_id = $gift->id;
        $user_gift->user_id = Auth::user()->id;
        $user_gift->save();
        return redirect()->route('user.giftcode.get')->with('message', 'Nhận quà thành công!');
    }

    //Thuong dat moc-->

    public function getThuongdatmoc(){
        $weeks = Week::all();
        return view('frontend.user.thuongdatmoc')->with(compact('weeks'));
    }
    public function postThuongdatmoc(Request $request){
        $data = $request()->except('_token');
        $gift = Gift::where('gift_code', $data['gift_code'])->first();
        if(is_null($gift)){
            return redirect()->route('user.thuongdatmoc.get')->with('message', 'Gift code sai!');
        }
        $user_gift = new GiftUser();
        $user_gift->gift_id = $gift->id;
        $user_gift->user_id = Auth::user()->id;
        $user_gift->save();
        return redirect()->route('user.thuongdatmoc.get')->with('message', 'Nhận quà thành công!');
    }

    ///////////////End thuongdatmoc

    //Thongtinnhanvat-->

    public function getThongtinnhanvat(){
        $servers = Server::all();
        return view('frontend.user.thongtinnhanvat')->with(compact('servers'));
    }    
    public function showThongtinnhanvat($id){
        //$characters = Character::all();
        //return view('frontend.user.nhanvat')->with(compact('characters'));
        $servers = Server::findOrFail($id);
        $characters = $servers->characters()->where('user_id', Auth::user()->id)->paginate(PAGINATE);
        return view('frontend.user.nhanvat')->with(compact('characters','servers'));
    }
    

    ///////////////End Thongtin nhan vat

    //Nangcapvip-->

    public function getNangcapvip(){
        $weeks = Week::all();
        return view('frontend.user.nangcapvip')->with(compact('weeks'));
    }
    public function postNangcapvip(Request $request){
        $data = $request()->except('_token');
        $gift = Gift::where('gift_code', $data['gift_code'])->first();
        if(is_null($gift)){
            return redirect()->route('user.nangcapvip.get')->with('message', 'Gift code sai!');
        }
        $user_gift = new GiftUser();
        $user_gift->gift_id = $gift->id;
        $user_gift->user_id = Auth::user()->id;
        $user_gift->save();
        return redirect()->route('user.nangcapvip.get')->with('message', 'Nhận quà thành công!');
    }

    ///////////////End Nangcapvip

    public function postResetPassword(Request $request) {
        $data = $request->except('_token');
        $user = User::where('email', $data['email'])->first();
        if(is_null($user)){
            $message = ["error"=>"error", "massage"=>"Email không tồn tại!"];
            return response()->json($message);
        }
        $url = route('user.update.password').'?parram=';
        $parram = json_encode($data);
        $encoded =( urlencode(base64_encode($parram)));
        $url.=$encoded;
        $mailData = ['url'=>$url];
        \Mail::send('emails.changepass', $mailData, function($message) use ($user,$data) {
            $message->to($data['email'], 'Hello'.$user->name)->subject('NCC Game');
        });
        if(\Mail::failures()){
            $message = ["error"=>"error", "massage"=>"Không gửi được mail"];
            return response()->json($message);
        }

        return redirect()->back()->with('message','Thông tin đã gửi vào email của bạn');
    }

    public function getResetPassword(){
        $weeks = Week::all();
        return view('frontend.user.reset_password')->with(compact('weeks'));
    }

    public function getUpdatePassword(Request $request){
        $encode = $request->get('parram');
        $decoded = base64_decode(urldecode( $encode ));
        $data = json_decode($decoded);
        $user = User::where('email', $data->email)->first();
        if(is_null($user)){
            return redirect()->route('frontend.index')->with('update_pass', 'Thông tin sai!');
        }else{
            if($data->password != $data->rePass){
                return redirect()->route('frontend.index')->with('update_pass', 'Password không giống nhau!');
            }
            else{
                $user->password = \Hash::make($data->password);
                $user->save();
            }
        }
        return redirect()->route('frontend.index')->with('update_pass', 'Đổi mật khẩu thành công, mời đăng nhập!');
    }

    public function getChangePassword(){
        $weeks = Week::all();
        return view('frontend.user.doimatkhau')->with('weeks', $weeks);
    }
    public function postChangePassword(Request $request){
        $data = $request->except('_token');
        $rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make($data, $rules);
            if ($validator->fails())
            {
                return redirect()->route('user.get.changePassword');
            }
            else
            {
                if($data['new_password'] != $data['rePass'] || strlen($data['new_password']) < 6 || strlen($data['new_password'])>15){
                    return redirect()->route('user.get.changePassword')->with('message', 'Password mới phải trùng nhau và ký tự >6 và <15.');
                }
                if(\Hash::check($data['password'], Auth::user()->password)){
                    $user = User::findOrfail(Auth::user()->id);
                    //dd($data);
                    $user->password = \Hash::make($data['new_password']);
                    $user->save();
                    return redirect()->route('user.profile')->with('message', 'Đổi mật khẩu thành công!');
                }
            }
    }
}
