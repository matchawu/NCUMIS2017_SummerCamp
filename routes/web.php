<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//首頁
Route::get('/','MainController@index');
//課程
Route::get('/course','CourseController@index');
//人員
Route::group(['prefix'=>'staff'], function(){
  Route::get('/','StaffController@index');
  Route::patch('/edit/1', 'StaffController@update1');
  Route::patch('/edit/2', 'StaffController@update2');
  Route::patch('/edit/3', 'StaffController@update3');
  Route::patch('/edit/4', 'StaffController@update4');
  Route::patch('/edit/5', 'StaffController@update5');
  Route::patch('/edit/6', 'StaffController@update6');
  Route::patch('/edit/7', 'StaffController@update7');
  Route::patch('/edit/8', 'StaffController@update8');
});
//上傳圖片
for($i=1;$i<=8;$i++){
  Route::post('image-upload/'.$i,'StaffController@imageUploadPost'.$i);
}
//交通
Route::get('/traffic','TrafficController@index');
//報名表單
Route::get('/signup','SignupController@index');
Route::post('/signup','SignupController@store');
Route::get('/signup/finish','SignupController@finish');
//小遊戲
Route::get('/game','GameController@index');

// Route::post('/', 'HomeController@store');

Auth::routes();
//登入後台
Route::get('/admin', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
