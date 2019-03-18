<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can users web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//loading login page............................
Route::get('/authenticate', function () {

    return view('authenticate/index');
    //return 'Hello world !!!';
});

//loading users page............................
//Route::get('/dashboard/employee', function () {
//
//    return view('dashboard/employee/index');
//    //return 'Hello world !!!';
//});

//route by using controller.........................................
//Route::get('/dashboard/employee', 'employees_controller@index');


//register user account ...............................
Route::resource('users', 'create_user_controller');



//user authentication..................................
$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@authenticate');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//Route::post('logout', function (){
//    Auth::logout();
//    return redirect()->route('users.index');
//});
Auth::routes();
/* user routes*/
Route::group(['middleware' => ['auth']], function () {
    //loading Home page............................
    Route::get('/dashboard/main', function () {

        return view('dashboard/main/index');
        //return 'Hello world !!!';
    });

    //main_controller for dashboard ................
    Route::get('/dashboard/main/', 'maincontroller@index')->name('main_home');

    //employeeeee controller
    Route::resource('employees', 'employees_controller');



});



//Route::get('/home', 'HomeController@index')->name('home');
