<?php
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/', function(){
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function(){
    return view('auth.register');
})->name('auth.register');
Route::post('/auth',[UserController::class,'save'])->name('users.save'); //guarda un nuevo usuario

Route::get('/catalogues',[CatalogueController::class,'index'])->name('catalogues.index');
Route::get('/catalogues/create',[CatalogueController::class,'create'])->name('catalogues.create'); //Manda a formulario crear catalogos
Route::get('/catalogues/{id}',[CatalogueController::class,'show'])->name('catalogues.show');
Route::get('/catalogues/edit/{catalogue}',[CatalogueController::class,'edit'])->name('catalogues.edit');
Route::post('/catalogues/store',[CatalogueController::class,'store'])->name('catalogues.store'); //guarda un nuevo catalogo
Route::put('/catalogues/update/{id}',[CatalogueController::class,'update'])->name('catalogues.update'); //actualiza un catalogo recibiendo el id
Route::delete('/catalogues/delete/{catalogue}',[CatalogueController::class,'destroy'])->name('catalogues.destroy'); // elimina un catalogo recibiendo el objeto de tipo catalogo

Route::get('/medicines',[MedicineController::class,'index'])->name('medicines.index');
Route::get('/medicines/create',[MedicineController::class,'create'])->name('medicines.create'); //Manda a formulario crear catalogos
Route::get('/medicines/{id}',[MedicineController::class,'show'])->name('medicines.show');
Route::get('/medicines/edit/{medicine}',[MedicineController::class,'edit'])->name('medicines.edit');
Route::post('/medicines/store',[MedicineController::class,'store'])->name('medicines.store'); //guarda un nuevo catalogo
Route::put('/medicines/update/{id}',[MedicineController::class,'update'])->name('medicines.update'); //actualiza un catalogo recibiendo el id
Route::delete('/medicines/delete/{medicine}',[MedicineController::class,'destroy'])->name('medicines.destroy'); // elimina un catalogo recibiendo el objeto de tipo catalogo

Route::get('/reminders',[ReminderController::class,'index'])->name('reminders.index');
Route::get('/reminders/create',[ReminderController::class,'create'])->name('reminders.create'); //Manda a formulario crear catalogos
Route::get('/reminders/{id}',[ReminderController::class,'show'])->name('reminders.show');
Route::get('/reminders/edit/{reminder}',[ReminderController::class,'edit'])->name('reminders.edit');
Route::post('/reminders/store',[ReminderController::class,'store'])->name('reminders.store'); //guarda un nuevo catalogo
Route::put('/reminders/update/{id}',[ReminderController::class,'update'])->name('reminders.update'); //actualiza un catalogo recibiendo el id
Route::delete('/reminders/delete/{reminder}',[ReminderController::class,'destroy'])->name('reminders.destroy'); // elimina un catalogo recibiendo el objeto de tipo catalogo

Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create'); //Manda a formulario crear catalogos
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');
Route::get('/users/edit/{catalogue}',[UserController::class,'edit'])->name('users.edit');
Route::post('/users/store',[UserController::class,'store'])->name('users.store'); //guarda un nuevo catalogo
Route::put('/users/update/{id}',[UserController::class,'update'])->name('users.update'); //actualiza un catalogo recibiendo el id
Route::delete('/users/delete/{catalogue}',[UserController::class,'destroy'])->name('users.destroy'); // elimina un catalogo recibiendo el objeto de tipo catalogo
