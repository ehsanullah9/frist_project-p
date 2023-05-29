<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Runtime;

use function PHPUnit\Framework\returnSelf;

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
Route::get('/pizzas' ,[PizzaController::class,'index']);

Route::get('/pizzas/{id}',[PizzaController::class,'id']);

Route::get('/show',[PizzaController::class,'info']);

Route::get('pizzas/create',[PizzaController::class,'create']);




