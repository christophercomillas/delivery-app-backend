<?php
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\CountryController;
use App\Http\Controllers\BackEnd\StateController;
use App\Http\Controllers\BackEnd\CityController;
use App\Http\Controllers\BackEnd\DepartmentController;
use App\Http\Controllers\BackEnd\ChangePasswordController;
use App\Http\Controllers\DataController;
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
    return view('welcome');
});

//Route::get('/country', [DataController::class, 'country'])->name('country');

//Route::get('/get_city', [DataController::class, 'get_city'])->name('get_city');

Route::get('/get_provinces', [DataController::class, 'get_provinces'])->name('get_provinces');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/users',UserController::class);
    Route::resource('/countries',CountryController::class);
    Route::resource('/states',StateController::class);
    Route::resource('/cities',CityController::class);
    Route::resource('/departments',DepartmentController::class);    
    
    Route::post('users/{user}/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.password');
        
    Route::get('{any}',function(){
        return view('employees.index');
    })->where('any','.*');


});




