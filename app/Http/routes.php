<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['as'=>'frontend.index', 'uses'=>'frontend\IndexController@index']);
Route::get('/category/{id}', ['as'=>'frontend.category.show', 'uses'=>'frontend\IndexController@showCategory']);
Route::get('/article/{id}', ['as'=>'frontend.article.show', 'uses'=>'frontend\IndexController@showArticle']);
Route::get('/auth/login', 		['as'=>'authLogin', 	'uses'=>'Auth\AuthController@getLogin']);
Route::post('/auth/login', 		['as'=>'authLogin', 	'uses'=>'Auth\AuthController@postLogin']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////test
Route:: post('user/edit', ['as'=>'user.postEdit',	'uses'=>'Auth\AuthController@postEditUser']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/user/register', 		['as'=>'user.register',	'uses'=>'Auth\AuthController@getRegister']);
Route::post('/user/register', 		['as'=>'user.register',	'uses'=>'Auth\AuthController@postRegister']);

Route::get('/user/update_password', 		['as'=>'user.update.password',	'uses'=>'Auth\AuthController@getUpdatePassword']);
Route::get('/user/resetPassword', 		['as'=>'user.get.resetPassword',	'uses'=>'Auth\AuthController@getResetPassword']);
Route::post('/user/resetPassword', 		['as'=>'user.post.resetPassword',	'uses'=>'Auth\AuthController@postResetPassword']);

Route::group(["middleware" => "auth"], function(){

	Route::get('/napthe',					['as'=>'user.napthe.get', 'uses'=>'Auth\AuthController@getNapthe']);
	Route::post('/napthe',					['as'=>'user.napthe.post', 'uses'=>'Auth\AuthController@postNapthe']);
	Route::get('/user/giftcode',						['as'=>'user.gift.get', 'uses'=>'Auth\AuthController@getGift']);
	Route::post('/user/giftcode',					['as'=>'user.gift.post', 'uses'=>'Auth\AuthController@postGift']);
	Route::get('/user/thuongdatmoc',						['as'=>'user.thuongdatmoc.get', 'uses'=>'Auth\AuthController@getThuongdatmoc']);
	Route::post('/user/thuongdatmoc',					['as'=>'user.thuongdatmoc.post', 'uses'=>'Auth\AuthController@postThuongdatmoc']);
	Route::get('/user/changePassword', 		['as'=>'user.get.changePassword',	'uses'=>'Auth\AuthController@getChangePassword']);
	Route::post('/user/changePassword', 	['as'=>'user.post.changePassword',	'uses'=>'Auth\AuthController@postChangePassword']);
	//////////////////////////////////////
	Route::get('/user/doimatkhau', 		['as'=>'user.doimatkhau.get',	'uses'=>'Auth\AuthController@getChangePassword']);
	Route::post('/user/doimatkhau', 	['as'=>'user.doimatkhau.post',	'uses'=>'Auth\AuthController@postChangePassword']);
	/////////////////////////////////////////
	Route::get('/auth/logout', 				['as'=>'authLogout',	'uses'=>'Auth\AuthController@getLogout']);
	Route::get('/auth/profile/{id}', 		['as'=>'user.profile',	'uses'=>'Auth\AuthController@profile']);

	////Thong tin nhan vat
	Route::get('/user/thongtinnhanvat',						['as'=>'user.thongtinnhanvat.get', 'uses'=>'Auth\AuthController@getThongtinnhanvat']);
	Route::post('/user/thongtinnhanvat',					['as'=>'user.thongtinnhanvat.post', 'uses'=>'Auth\AuthController@postThongtinnhanvat']);

	/////end thong tin nhan vat

	////Nang cap vip
	Route::get('/user/nangcapvip',						['as'=>'user.nangcapvip.get', 'uses'=>'Auth\AuthController@getNangcapvip']);
	Route::post('/user/nangcapvip',					['as'=>'user.nangcapvip.post', 'uses'=>'Auth\AuthController@postNangcapvip']);

	/////end Nang cap vip
});

Route::group(["prefix" => "admin", "namespace" => "admin", "middleware" => "isStaff"], function(){
	Route::get('/', ['as'=>'adminIndex', 'uses'=>'ArticleController@index']);
	Route::get('category/article', ['as'=>'admin.category.articles', 'uses'=>'ArticleController@searchArticleByCate']);
	Route::resource("categories","CategoryController");
	Route::resource("articles","ArticleController");
	Route::resource("events","DayController");
	Route::resource("galaries","GalaryController");
	Route::resource("clans","ClanController");
	Route::resource("popups","PopupController");
	Route::resource("sliders","SliderController");
	Route::resource("gifts","GiftController");
	Route::resource("cards","CardController");
	Route::resource("server","ServerController");
	Route::resource("giftUser","GiftUserController");
		
});
Route::group(["prefix" => "admin", "namespace" => "admin", "middleware" => ["auth","isAdmin"]], function(){
	Route::resource("users","UserController");
});