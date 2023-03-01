<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controller\CustomerController;
use App\Http\Controller\DepartmentController;
use App\Http\Controller\PriorityController;
// use App\Http\Controller\TicketingController;
use App\Http\Controller\AdminController;
use App\Http\Controller\UserTicketingController;
use App\Http\Controller\ProjectCustomerController;
use App\Http\Controller\JenisrequestController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\PdfController;
// use App\Http\Controller\ProfileController;
// use App\Http\Controller\SantriController;


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
    return view('/auth/login');
});
Route::get('/admin', function () {
    return view('layouts.admin');
});
// Route::get('/front', function () {
//     return view('layouts.front');
// });
// Route::get('/addchat1', function () {
//     return view('layouts.addchat1');
// });
Route::get('/reply', function () {
    return view('layouts.reply');
});
Route::get('/all-user', function () {
    return view('layouts.all-user');
});
Route::get('/admin2', function () {
    return view('layouts.admin2');
});
Route::get('/db', function () {
    return view('layouts.db');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('/admin1', function () {
    return view('layouts.admin1');
});

Route::post('print', [PdfController::class, 'laporan'])->name('laporan.print');
Route::get('print/{id}', [PdfController::class, 'singlePrint'])->name('laporan.singlePrint');
Route::get('laporan', function (){
  return view('laporan.index');
})->name('laporan');




Auth::routes();
Route::group(['middleware' => ['auth', 'isAdmin:admin']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    });
    // Route::get('/all-user',[App\Http\Controllers\UserController::class,'AllUser'])->name('alluser');
    // Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    // Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    // Route::get('/profile', function () {
    //     return view('layouts.profile');
    // });
    // Route::resource('/all-user',UserController::class);

    Route::resource('/customer','CustomerController');
    Route::resource('/department','DepartmentController');
    Route::resource('/priority','PriorityController');

    // Route::resource('/ticketing',TicketingController::class);
    // Route::resource('/detail/{ticketing}','TicketingController@detail')->name('ticketing.detail');

    // Route::get('/dtl/{id}', [TicketingController::class, 'dtl'])->name("dtl");
    // Route::get('ticketing/{ticketing}/dtl', 'TicketingController@dtl')->name('ticketing.dtl');
    Route::resource('/projectcustomer','ProjectCustomerController');
    Route::resource('/jenisrequest','JenisrequestController');


    Route::resource('/profile',ProfileController::class);
    Route::resource('/chartjs',ChartJsController::class);
    Route::resource('/request',RequestController::class);


});




    Route::group(['middleware' => ['auth', 'isAdmin:guest,admin']], function(){

        Route::resource('/ticketing',TicketingController::class);

        
Route::get('/', function () {
    return view('/auth/register');
});

        // Route::get('/userit', function () {
        //     return view('layouts.userit');
        // });

        // Route::get('/chat', function () {
        //     return view('user.chat');
        // });
        Route::get('/addchat', function () {
            return view('user.addchat');
        });
        // Route::resource('/',FrontController::class);

        // Route::resource('ticketings', [FrontendController::class, 'ticketings']);
        // Route::resource('/contoh',Contoh::class);

     });


Addchat::routes();

// 2|103rno9mgqhHBHuKkThmCnWrWfPFQKFYlMPj2yVn
