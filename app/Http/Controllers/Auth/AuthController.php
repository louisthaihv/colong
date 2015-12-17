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
use App\GiftBox;
use Session;

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
            'name' => 'required|max:255|unique:characters',
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

    public function profile(){
        //$download = true;
        $show_gift = true;
        return view('frontend.user.profile')->with(compact('show_gift'));
    }

    public function confirm(Request $request, $id) {
        $download = true;
        $show_gift = true;
        return view('frontend.user.confirm')->with(compact('download', 'show_gift'));
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
        $servers = Server::all();
        $this->validate($request, [
            //'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
            
        ]);
        $input = $request->except('_token');
        $user->email = $input['email'];
        //$user->username = $input['username'];
        $user->phone = $input['phone'];
        $user->change_count = 0;
        $user->save();

        $model = new GAccount;
        //check all user if exsit on all server game
        $servers = Server::all();
        foreach ($servers as $server) {
            $model->setConnection($server->user_db);
            try{
                $account = $model->where('loginName', Auth::user()->username)->first();
                dump($account);
                if(is_null($account)){
                    dd('Username không có');
                    return redirect()->back()->with('error', 'yêu cầu không hợp lệ!');
                } else {
                    
                    $model->where('acct_id',$account->acct_id)
                            ->update(['phone' => $input['phone'], 'useremail'=>$input['email']]);
                }
            } catch(\Exception $e){
                dd($e);
                return redirect()->route('user.register')->with('error', 'có lỗi!');
            }
        }
        return redirect()->back()->with('message', 'update thành công!');
    }
    //////////////////////////////////
    //          end edit user
    //////////////////////////////////
    public function getRegister(){
        return view('frontend.user.user_register');
    }
    public function postRegister(Request $request){
        $data = $request->except('_token');
        if(ServiceAccount::checkCaptcha($data)) {
            if($data['password'] !=$data['re_password']){
                dd('trung password');
                return redirect()->route('user.register')->with('error', 'Password không giống nhau.');
            }

            $user = User::where('username',$data['username'])->first();
            if(is_null($user)) {
                $account = new GAccount;
                //check all user if exsit on all server game
                $servers = Server::all();
                foreach ($servers as $server) {
                    $account->setConnection($server->user_db);
                    try{
                        $model = $account->where('loginName', $data['username'])->first();
                    } catch(\Exception $e){
                        dd($e);
                        return redirect()->route('user.register')->with('error', 'có lỗi!');
                    }
                    if(!is_null($model)){
                        //dd('Username đã tồn tại');
                        return redirect()->route('user.register')->with('error', 'Username đã tồn tại');
                    }
                    $account->loginName = $data['username'];
                    $account->password_hash = ServiceAccount::getPassword($data['password']);
                    $account->save();
                }
                
                //insert user into database web
                $user = new User;
                $user->username = $data['username'];
                $user->password = \Hash::make($data['password']);
                $user->email = "chưa có";
                $user->phone = "chưa có";
                $user->save();
                Auth::login($user);
                return redirect()->route('user.confirm', $user->id);

            } else{
                dd('user da ton tai');
                return redirect()->route('user.register')->with('error', 'Lỗi user đã tồn tại!');
            }

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
        if(!is_null(Session::get('count'))) {
            Session::put('count', 1);
        }
        else {
              Session::put('key', Session::get('count')+1);
              if(Session::get('count') > 5) {
                return redirect()->back()->with('error', "Nạp thẻ sai 5 lần");
              }
        }
        $data = $request->except('_token');
        $card = Card::findOrfail($id);
        $userCard = new CardUser;
        $cardInfor['issuer'] = $card->title;
        $cardInfor['cardCode'] = $data['code'];
        $cardInfor['cardSerial'] = $data['seri'];
        $result = ServiceAccount::submitCard($cardInfor);
        $menhgia = 0;
        if($result['useCard_result']['status'] !=1 || $result['trans_detail']['status'] !=1) {
            $userCard->user_name = $data['username'];
            $userCard->card_id = $id;
            $userCard->card_code = $result['useCard_result']['cardCode'];
            $userCard->card_series = $result['useCard_result']['cardSerial'];
            $userCard->value = $result['useCard_result']['amount'];
            $userCard->user_status = $result['useCard_result']['status'].':'.$result['useCard_result']['description'];
            $userCard->user_status = $result['trans_detail']['status'].':'.$result['trans_detail']['description'];
            $userCard->save();
            return redirect()->back()->with('useCard_result_error', $result['useCard_result']['description'])
                                    ->with('trans_detail_error', $result['trans_detail']['description']);
        }
        $userCard->user_name = $data['username'];
        $userCard->card_id = $id;
        $userCard->card_code = $result['useCard_result']['cardCode'];
        $userCard->card_series = $result['useCard_result']['cardSerial'];
        $userCard->value = $result['useCard_result']['amount'];
        $userCard->user_status = $result['useCard_result']['status'].':'.$result['useCard_result']['description'];
        $userCard->user_status = $result['trans_detail']['status'].':'.$result['trans_detail']['description'];
        $userCard->save();

        $menhgia = $result['trans_detail']['amount'];
        $servers = Server::all();
        $cardInfor = array();
        $account = new GAccount;
        $giftBox = new GiftBox;
        
        $gift = new Gift;
        //fake mệnh giá thẻ
        $yuanbao = $menhgia/YUANBAO * BONUS;
        
        foreach ($servers as $server) {
            $account->setConnection($server->user_db);
            $$giftBox->setConnection($server->game_db);
            try{
                $account = $account->where('loginName', $data['username'])->first();
            } catch(\Exception $e){
                dd($e);
                return redirect()->route('user.register')->with('error', 'có lỗi!');
            }
            if(is_null($account)){
                dd('Username không tồn tại');
                return redirect()->route('user.register')->with('error', 'Username đã tồn tại');
            }
            else {
                $point = $account->point + $menhgia;
                $new_yuanbao = $account->yuanbao + $yuanbao;
                $updated = $account->where('acct_id',$account->acct_id)
                            ->update(['yuanbao' => $new_yuanbao, 'point '=>$point]);
                if(!empty($account->CountCard)) {
                    //update giftbox
                    $updated = $giftBox->where('acct_id', $account->acct_id)
                            ->update(['item_id'=>GIF_FIRST_CODE, 'itemtype'=>0, 'quantity'=>1, 'serialNo'=>'0']);

                    //update count card
                    $count = $account->CountCard + 1;
                    $update = $account->where('acct_id',$account->acct_id)
                            ->update(['CountCard' => $count]);
                }
                $quantity_bonus = (int)$menhgia/GIF_CODE * BONUS;
                $updated = $giftBox->where('acct_id', $account->acct_id)
                            ->update(['item_id'=>GIF_ALL_CODE, 'itemtype'=>0, 'quantity'=>$quantity_bonus, 'serialNo'=>'0']);
                
                $userCard->user_id = $account->acct_id;
                
            }
        }
        
        return redirect()->back()->with('message','Nạp thẻ thành công');
    }
    public function getGift(){
        $show_gift = true;
        return view('frontend.user.giftcode')->with(compact('show_gift'));
    }
    public function postGift(Request $request){
        $data = $request->except('_token');
        $model = new GAccount;
        $gift = new Gift;
        $giftBox = new GiftBox;
        //check all user if exsit on all server game
        $servers = Server::all();
        foreach ($servers as $server) {
            $model->setConnection($server->user_db);
            $gift->setConnection($server->user_db);
            $giftBox->setConnection($server->user_db);
            try{
                $account = $model->where('loginName', $data['username'])->first();
                $gift = $gift->where('GiftCode', $data['gift_code'])->first();

                if(is_null($gift)) {
                    dd('không tồn tại gift code');
                    return redirect()->route('user.gift.get')->with('message', 'Gift code sai!');
                }
                if(is_null($account)) {
                    dd('không tồn tại tên đăng nhập');
                    return redirect()->route('user.gift.get')->with('message', 'Username tồn tại');
                }

                $giftBox->acct_id = $account->acct_id;
                $giftBox->item_id = $gift->gift_id;
                $giftBox->itemtype = 0;
                $giftBox->quantity = 1;
                $giftBox->serialNo =0;
                $giftBox->save();

            } catch(\Exception $e){
                dd($e);
                return redirect()->route('user.gift.get')->with('error', 'database có lỗi!');
            }
            
        }
        return redirect()->route('user.gift.get')->with('message', 'Nhận quà thành công!');
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

    //Thongtinnhanvat-->

    public function getThongtinnhanvat(){
        $servers = Server::all();
        return view('frontend.user.thongtinnhanvat')->with(compact('servers'));
    }    
    public function showThongtinnhanvat($id){
        $server = Server::findOrFail($id);
        $account = new GAccount;
        $account->setConnection($server->user_db);
        try{
            $account = $account->where('loginName', Auth::user()->username)->first();
            if(is_null($account)) {
                dd('không tồn tại username');
                return redirect()->back()->with('error', 'Không tồn tại Username');
            }
        } catch(\Exception $e) {
            dump($e->getMessage());
            dd('Lỗi database account');
        }
        $character = new Character;
        $character->setConnection($server->game_db);
        try {

            $characters = $character->where('acct_id', $account->acct_id)->get();
            return view('frontend.user.nhanvat')->with(compact('characters', 'server', 'account'));
            
        } catch (\Exception $e) {
            dump($e->getMessage());
            dd('lỗi character db');
        }

        return redirect()->back()->with('error', 'có lỗi xảy ra');
    }
    ///////////////End Thongtin nhan vat

    public function getGoitanthu(){
        $weeks = Week::all();
        return view('frontend.user.goitanthu')->with(compact('weeks'));
    }
    public function postGoitanthu(Request $request){
        $data = $request()->except('_token');
        $gift = Gift::where('gift_code', $data['gift_code'])->first();
        if(is_null($gift)){
            return redirect()->route('user.goitanthu.get')->with('message', 'Gift code sai!');
        }
        $user_gift = new GiftUser();
        $user_gift->gift_id = $gift->id;
        $user_gift->user_id = Auth::user()->id;
        $user_gift->save();
        return redirect()->route('user.goitanthu.get')->with('message', 'Nhận quà thành công!');
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
                //update vao game
                $model = new GAccount;
                //check all user if exsit on all server game
                $servers = Server::all();
                foreach ($servers as $server) {
                    $model->setConnection($server->user_db);
                    try{
                        $account = $model->where('useremail', $data->email)->first();
                    } catch(\Exception $e){
                        dump($e->getMessage());
                        dd('loi DB');
                        return redirect()->route('user.register')->with('error', 'có lỗi!');
                    }
                    $account->password_hash = ServiceAccount::getPassword($data->password);
                    $account->save();
                }
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

            if (!ServiceAccount::checkCaptcha($data))
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
                    $model = new GAccount;
                    //check all user if exsit on all server game
                    $servers = Server::all();
                    foreach ($servers as $server) {
                        $model->setConnection($server->user_db);
                        try{
                            $account = $model->where('loginName', $user->username)->first();
                        } catch(\Exception $e){
                            
                            return redirect()->route('user.register')->with('error', 'có lỗi!');
                        }
                        $account->password_hash = ServiceAccount::getPassword($data['new_password']);
                        $account->save();
                    }
                    return redirect()->route('user.profile')->with('message', 'Đổi mật khẩu thành công!');
                }
            }
    }

    /*Chang Character*/
    public function getChangeCharacter($server_name, $acct_id, $char_id){
        $character = new Character;
        $show_gift = true;
        $character->setConnection($server_name);
        try{
            $character = $character->where(['char_id'=> $char_id, 'acct_id'=>$acct_id])->first();
            if(is_null($character)) {
                dd('không tồn tại nhân vật');
                return redirect()->back()->with('error', 'Không tồn tại nhân vật');
            }
        }
        catch(\Exception $e) {
            dump($e);
            dd('');
            return redirect()->back()->with('error', 'lỗi database');
        }
        return view('frontend.user.changeCharacter')->with(compact('character', 'server_name', 'acct_id', 'show_gift'));
    }

    public function postChangeCharacter(Request $request){
        $data = $request->except('_token');

            if (!ServiceAccount::checkCaptcha($data))
            {
                dd('vao');
                return redirect()->route('user.get.changeCharacter');
            }
            elseif ($data['new_name'] != $data['re_name'] || strlen($data['new_name']) <1 || strlen($data['new_name'])>10)
            {
                dd('lỗi đặt tên');
                return redirect()->back()->with('message', 'name mới phải trùng nhau và ký tự >6 và <15.');
            }
            else 
            {
                $character = new Character;
                $character->setConnection($data['server_name']);
                try{
                    $updated = $character->where('acct_id', $data['acct_id'])
                            ->where('char_id', $data['char_id'])
                            ->whereNull('Changed')
                            ->update(['nickName'=>$data['new_name'], 'Changed'=>0]);
                } catch(\Exception $e) {
                    dd($e->getMessage());
                }
                if($updated) {
                    return redirect()->back()->with('message', 'Đổi tên thành công!');
                }else {
                    return redirect()->back()->with('message', 'Đổi tên thất bại!');
                }
            }
            
    }
    /*End Chang Character */
}
