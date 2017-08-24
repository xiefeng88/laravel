<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// '/'表示根目录
// view()表示视图层，对应的目录在/resources/views中
// view('welcome')中的welcome是welcome.blade.php文件的别名
Route::get('/', function () {
    return view('welcome');
});

// 路由访问控制器，控制器再去做相关操作
Route::get('test','IndexController@test');
//后台路由
//Route::get('xiefengadmin','Admin\AdminController@index');
//路由的命名
//Route::get('test','IndexController@index')->name('profile');

// //路由的分组
// Route::get('myadmin/login','Admin\AdminController@login');
// Route::get('myadmin/index','Admin\AdminController@index');


//路由分组的整理
//Route::group(['prefix'=>'myadmin','namespace'=>'Admin','middleware'=>['admin.login']], function() {
//	Route::get('index','AdminController@index');
//	Route::resource('article','ArticleController');
//});

//中间件
//Route::group(['middleware'=>['web']], function() {
//	Route::get('myadmin/login','Admin\AdminController@login');
//	Route::get('myadmin/register','Admin\AdminController@register');
//	Route::get('/', function() {
//		// session(['key'=>123456]);
//		return view('welcome');
//	});
//	Route::get('test', function() {
//		echo session('key');
//	});
//});

//视图
//形式1:（很少用）
//Route::get('view',function() {
//	return view('my_laravel');
//});
//形式2
//Route::get('/view','ViewController@index');

Route::get('/index','IndexController@index');
Route::get('/layout','IndexController@layout');
Route::get('/article','IndexController@article');
