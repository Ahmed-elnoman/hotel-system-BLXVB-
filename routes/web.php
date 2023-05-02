<?php

use App\Http\Controllers\addEmployee;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\GuestsController;
use App\Http\Controllers\PositionsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RommsController;
use App\Http\Controllers\RoomTypesController;
use App\Http\Controllers\Users;
use App\Models\Employees_status;
use App\Models\positions;
use App\Models\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['Middleware' => 'auth' ] , function() {
    Route::get('/' , function() {
        return view('welcome');
    });
    Route::get('/dashboard' , function() {
        return view('dashboard');
    })->name('dashboard');

    // rooms routes
    Route::resource('rooms' , RommsController::class);
    Route::get('deleteRoom/{id}' , [RommsController::class , 'destroy']);

    // guests routes
    Route::resource('guests' , GuestsController::class);
    Route::get('d/{id}' , [GuestsController::class , 'delete'])->name('guests_destroy');
    Route::get('archiverGuest' , [GuestsController::class , 'archiverGuest']);
    Route::get('unarchive/{id}' , [GuestsController::class , 'unarchive']);
    Route::get('destroy/{id}' , [GuestsController::class , 'destroy']);

    // users routes
    Route::resource('users' , Users::class);
    Route::get('delete/{id}' , [Users::class , 'delete'])->name('users_destroy');

    // Rooms Type url
    Route::resource('roomType' , RoomTypesController::class);
    Route::get('deleteRoomType/{id}' , [RoomTypesController::class , 'deleteRoomType'])->name('deleteRoomType');


    // departments routes
    Route::resource('departments' , DepartmentsController::class);
    Route::get('Derdestroy/{id}' , [DepartmentsController::class, 'destroy']);

    // employees routes
    Route::resource('employees' , EmployeesController::class);
    Route::get('softDelete/{id}' , [EmployeesController::class , 'softDelete']);
    Route::get('showArchivesEmployees' , [EmployeesController::class , 'showArchivesEmployees']);
    Route::get('getArchivesEmployee/{id}' , [EmployeesController::class, 'getArchivesEmployee']);
    Route::get('deleteEmployee/{id}' , [EmployeesController::class , 'destroy']);
    Route::post('addEmployee/{id}' , [addEmployee::class, '__invoke'])->name('addEmployee');

    // position routes
    Route::resource('position' , PositionsController::class);
    Route::get('position.destory/{id}' , [PositionsController::class, 'destroy']);


    // bookings routes
        Route::resource('bookings' , BookingsController::class);
        Route::get('printBooking/{id}' , [BookingsController::class , 'printBooking']);
        Route::get('softDeleteBookingModel/{id}' , [BookingsController::class , 'destroy']);
        Route::get('sendMailToGuest/{id}' , [BookingsController::class, 'sendMail'])->name('sendMailToGuest');

    // bills routes
    Route::resource('bills' , BillsController::class);
    Route::get('SoftDeleteBill/{id}' , [BillsController::class , 'SoftDeleteBill']);
    Route::post('searchBooking', [BillsController::class , 'searchBooking']); // to get booking id
    Route::get('viewArchive' , [BillsController::class , 'viewArchive']);
    Route::get('unArchiveBill/{id}' , [BillsController::class , 'unArchiveBill']);
    Route::get('forceDelete/{id}' , [BillsController::class , 'destroy']);

});

require __DIR__.'/auth.php';
