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

//Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('front.index');
});

Route::get('/index', function () {
    return view('front.index');
});


Route::get('/contact', function () {
    return view('front.contact');
});


Route::get('/gallery-detail/{id}', function ($id) {
    $data['gallery_id'] = $id;
    return view('front.gallery-detail',$data);
});
Route::get('/gallery', function () {
    return view('front.gallery');
});


Route::get('/news', function () {
    return view('front.news');
});
Route::get('/news-detail', function () {
    return view('front.news-detail');
});


Route::get('/job', function () {
    return view('front.job');
});
Route::get('/job-detail', function () {
    return view('front.job-detail');
});


Route::get('/member-school', function () {
    return view('front.member-school');
});
Route::get('/member-login', function () {
    return view('front.member-login');
});
Route::get('/password', function () {
    return view('front.password');
});



Route::get('/isat-present', function () {
    return view('front.isat-present');
});
Route::get('/education-systems', function () {
    return view('front.education-systems');
});
Route::get('/why-study', function () {
    return view('front.why-study');
});
Route::get('/faq', function () {
    return view('front.faq');
});
Route::get('/rules-regulations', function () {
    return view('front.rules-regulations');
});

Route::get('backend','BackendController@index');
Route::get('show_user','BackendController@show_user');
Route::get('backend/delete/{id}','BackendController@delete');
Route::get('backend/create','BackendController@create');
Route::post('backend/store_user','BackendController@store_user');
Route::get('backend/show/{id}','BackendController@show');

Route::get('manageslide','ManageslideController@index');
Route::get('show_slide','ManageslideController@show_user');
Route::get('manageslide/del/{id}','ManageslideController@delete');
Route::get('manageslide/create','ManageslideController@create');
Route::post('manageslide/store_slide','ManageslideController@store_slide');
Route::get('manageslide/show/{id}','ManageslideController@show');
Route::post('manageslide/update_slide','ManageslideController@update_slide');
Route::get('change_sortbanner','ManageslideController@change_sortbanner');

Route::get('managenews_sub/{name}','ManagenewsController@index');
Route::get('show_news','ManagenewsController@show_user');
Route::get('managenews/del/{id}','ManagenewsController@delete');
Route::get('managenews/create','ManagenewsController@create');
Route::post('managenews/store_news','ManagenewsController@store_news');
Route::get('managenews/show/{id}','ManagenewsController@show');
Route::post('managenews/update_news','ManagenewsController@update_news');
Route::get('managefile/del/{id}/{main}','ManagenewsController@delete_file');

Route::get('managegallery','ManagegalleryController@index');
Route::get('show_gallery','ManagegalleryController@show_user');
Route::get('managegallery/del/{id}','ManagegalleryController@delete');
Route::get('managegallery/create','ManagegalleryController@create');
Route::post('managegallery/store_gallery','ManagegalleryController@store_gallery');
Route::get('managegallery/show/{id}','ManagegalleryController@show');
Route::get('manageimage/del/{id}/{main}','ManagegalleryController@delete_image');
Route::post('managegallery/update_gallery','ManagegalleryController@update_gallery');

Route::get('manageschool','ManageschoolController@index');
Route::get('show_school','ManageschoolController@show_user');
Route::get('manageschool/create','ManageschoolController@create');
Route::post('manageschool/store_school','ManageschoolController@store_school');
Route::get('manageschool/show/{id}','ManageschoolController@show');
Route::get('manageschool/del/{id}','ManageschoolController@delete');
Route::post('manageschool/update_school','ManageschoolController@update_school');

Route::get('managejob','ManagejobController@index');
Route::get('show_jobs','ManagejobController@show_user');
Route::get('managejob/create','ManagejobController@create');
Route::post('managejob/store_jobs','ManagejobController@store_jobs');
Route::get('managejob/show/{id}','ManagejobController@show');
Route::get('managejob/del/{id}','ManagejobController@delete');
Route::post('managejob/update_jobs','ManagejobController@update_jobs');

Route::get('managemember','ManagememberController@index');
Route::get('show_member','ManagememberController@show_user');
Route::get('managemember/create','ManagememberController@create');
Route::post('managemember/store_member','ManagememberController@store_member');
Route::get('managemember/show/{id}','ManagememberController@show');
Route::get('managemember/del/{id}','ManagememberController@delete');
Route::post('managemember/update_member','ManagememberController@update_member');

Route::get('login','Auth\LoginController@login_member');
Route::post('Checklogin','Auth\LoginController@check_user_member'); // login ปกติ
Route::get('logout','Auth\LoginController@logout_mem'); // logout
