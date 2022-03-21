<?php

use Illuminate\Support\Facades\Route;


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
    return view('auth.login');
});

Auth::routes();

// Route::get('admin', function() {
//     return 'Halaman untuk Admin';
// })->middleware('role:admin')->name('admin.dahsboard');


// Route::get('user', function() {
//     return 'Halaman untuk User';
// })->middleware('role:user')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/datacustomer', 'DatacustomerController@index')->name('datacustomer');
Route::post('/dashboard/store', 'AdminController@store');
Route::post('/datacustomer/store', 'DatacustomerController@store');


Route::delete('/deletepost/{id}', 'AdminController@destroy')->name('deletepost');

Route::delete('/delete/{id}', 'DatacustomerController@destroy')->name('delete');

Route::put('/editdata/{id}', 'AdminController@update');

Route::resources([
    'pelanggans' => AdminController::class
]);