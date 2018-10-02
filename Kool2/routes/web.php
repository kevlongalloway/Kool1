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

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/our-team',function(){
    return view('team');
});

Route::get('/the-proof',function(){
    return view('proof');
});

Route::get('/course-songs',function(){
    return view('coursesongs');
});

Route::get('/subscriptions',function(){
    return view('subscriptions');
});

Route::get('/portal/register','GuestTeacherController@showRegisterForm')->name('teacher.registerform');
Route::post('/portal/register','GuestTeacherController@registerTeacher')->name('teacher.register');

Route::get('/portal/home','TeacherController@index')->name('teacher.home');
Route::get('/portal','GuestTeacherController@showLoginForm')->name('teacher.loginForm');
Route::post('portal', 'GuestTeacherController@login')->name('teacher.login');

Route::get('/classe','UserController@showClasses')->name('showclasses');
Route::get('/class/join','UserController@classList')->name('listclasses');
Route::get('/class/join/{class_id}','UserController@joinClass')->name('joinclass');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::get('/', 'AdminGuestController@ShowLoginForm')->name('admin.login');
    Route::post('/', 'AdminGuestController@login')->name('admin.login.submit');
    Route::get('/CreateOrganization', 'AdminController@showNewOrgForm')->name('admin.createorg');
    Route::post('/CreateOrganization', 'AdminController@createOrganization')->name('admin.initialize');
    Route::get('/Users', 'AdminController@showUserList')->name('admin.users');
    Route::get('/UploadSong','AdminController@uploadSongsForm')->name('admin.uploadsong');
    Route::post('/UploadSong','AdminController@upload');
    
    Route::get('/Songs/{id}', 'AdminController@songPage')->name('admin.song');
    Route::get('/Songs', 'AdminController@songstest')->name('admin.songs');
//    Route::get('Users/{orgcode}', function ($orgcode) { 
//        
//});
    Route::get('/deactivate/{id}', 'AdminController@deactivate')->name('admin.deactivate');
    Route::get('/activate/{id}', 'AdminController@activate')->name('admin.activate');
});

    Route::get('/club/home', 'OrgController@index')->name('org.home');
    Route::post('/club', 'OrgGuestController@login')->name('org.login.submit');
    Route::get('/club', 'OrgGuestController@ShowLoginForm')->name('org.login');
    Route::get('/club/users','Orgcontroller@showUserList')->name('org.createuserpage');


    //Teacher Classrooms
    Route::get('/portal/classrooms','TeacherController@showClasses')->name('teacher.classes');
    Route::get('/portal/classrooms/create','TeacherController@showCreateClassForm')->name('teacher.classform');
    Route::post('/portal/class/create', 'TeacherController@createClassroom')->name('teacher.initclass');
    



    




