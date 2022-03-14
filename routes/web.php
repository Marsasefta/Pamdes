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
Route::post('/dashboard/store', 'AdminController@store');


Route::delete('/delete/{id}', 'AdminController@destroy')->name('delete');
Route::put('/editdata/{id}', 'AdminController@update');

Route::resources([
    'pelanggans' => AdminController::class
]);