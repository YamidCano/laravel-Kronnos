<?php

use Illuminate\Support\Facades\Route;


//Rutas Controladores
use App\Http\Livewire\User\ListUser;


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


//Rutas Protegidas
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/usuarios', ListUser::class)->name('users');
});
