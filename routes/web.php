<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

    Route::get('/','HomeController@index', function () {
        return view('home');
    });

   
    
    Route::get('/login',function () {
        return view('auth.login');
    })->name('login');

    Auth::routes();


    Route::get('dashboard', function() {
        return 'Halaman untuk Admin';
    })->middleware('role:admin')->name('dashboard');


    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/rekap', 'AdminController@rekap')->name('rekap');
    Route::get('/dataadmin', 'AdminController@dataadmin');
    Route::get('/datacustomer', 'DatacustomerController@index')->name('datacustomer');
    Route::post('/dashboard/store', 'AdminController@store');
    Route::post('/datacustomer/store', 'DatacustomerController@store');
    Route::put('/editdata/{id}', 'DatacustomerController@update');
    Route::get('/cetakrekap/{start_date}/{end_date}', 'AdminController@cetak')->name('cetakrekap');
    Route::post('/adduser', 'AdminController@adduser');
    

    Route::delete('/deletepost/{id}', 'AdminController@destroy')->name('deletepost');

    Route::delete('/deleteadmin/{id}', 'AdminController@delete')->name('deleteadmin');

    Route::delete('/delete/{id}', 'DatacustomerController@destroy')->name('delete');
    

    Route::put('/editdata/{id}', 'AdminController@update');
    Route::put('/editadmin/{id}', 'HomeController@update');
    Route::get('/detailuser/{id}', 'AdminController@detail')->name('detailuser');
    

Route::resources([
    'pelanggans' => AdminController::class,
    'datacustomers' => DatacustomerController::class,
    'users' => HomeController::class
]);

    // Route::group(['middleware' => ['auth','ceklevel:admin,Kepala,Staff']], function(){
        
    // });

    Route::get('/rules', 'HomeController@rules');