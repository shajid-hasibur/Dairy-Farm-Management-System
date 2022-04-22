<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddFarmerController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UpdateDataController;
use App\Models\add_farmer;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/checkin',[LoginController::class,'checkIn'])->name('admin.checkin');

Route::get('/add-farmer', function () {
    return view('add-farmer');
});

Route::get('/add-employee', function () {
    return view('add-employee');
});


Route::get('/emplogin',function () {
    return view('auth.emplogin');
});





Route::middleware(['auth','isAdmin'])->group(function(){

    Route::get('/farmer-list',[FetchDataController::class,'index'])->name('farmers');

    Route::get('/employees',[EmployeeController::class,'show']);

    Route::get('/employees',[EmployeeController::class,'index'])->name('fetch.employee');

    Route::post('/add-farmer',[AddFarmerController::class,'addData'])->name('add_farmer.store');

    Route::get('/add-delivery',[DeliveryController::class,'index']);

    Route::post('/add-delivery',[DeliveryController::class,'add'])->name('add_delivery');

    Route::get('delivery/update/{id}',[DeliveryController::class,'showdata'])->name('update.delivery');

    Route::post('delivery-update/',[DeliveryController::class,'update']);

    Route::get('delivery/delete/{id}',[DeliveryController::class,'destroy'])->name('delete.delivery');

    Route::get('delete/{id}',[DeleteController::class,'destroy'])->name('delete.farmer');

    Route::get('edit/{id}',[UpdateDataController::class,'showData'])->name('update.farmer');

    Route::post('edit/',[UpdateDataController::class,'update'])->name('update');

    Route::get('delete{id}',[EmployeeController::class,'destroy'])->name('delete.employee');

    Route::get('update{id}',[EmployeeController::class,'showData'])->name('update.employee');

    Route::post('update/',[EmployeeController::class,'update'])->name('edit.employee');

    Route::post('/add-employee',[EmployeeController::class,'addData'])->name('add_employee.store');

    Route::get('/collection-list',[CollectionController::class,'index'])->name('collection.list');

    Route::get('/collection-create',[CollectionController::class,'create'])->name('collection.create');

    Route::post('/collection-post',[CollectionController::class,'store'])->name('collection.store');

    Route::get('del/{id}',[CollectionController::class,'destroy'])->name('delete.collection');

    Route::get('/collection-edit/{id}',[CollectionController::class,'edit'])->name('collection.edit');

    Route::put('/collection-update/{id}',[CollectionController::class,'update'])->name('collection.update');

    Route::get('payments/',[PaymentController::class,'innerJoin']);

    // Route::get('/generate-pdf',[PDFController::class,'generatePDF'])->name('download-pdf');

    // Route::get('/report',[PDFController::class,'report']);



});

    Route::get('/home',[HomeController::class,'home'])->name('home');

Route::middleware(['auth'])->group(function(){

    Route::get('/delivery',[DeliveryController::class,'show'])->name('delivery');

    Route::get('/delivery',[DeliveryController::class,'fetch'])->name('fetch.delivery');

});


Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');

