<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  [ItemController::class,'index']);
Route::get('item',  [ItemController::class,'item']);


Route::post('login',  [ItemController::class,'login']);



Route::get('log-out',  [ItemController::class,'logout']);

Route::post('register',  [ItemController::class,'register']);

Route::get('adjust-stock',  [ItemController::class,'adjust_stock']);


Route::post('add-to-stock',  [ItemController::class,'add_to_stock']);











Route::post('issue-now',  [ItemController::class,'issue_now']);
Route::post('add-stock',  [ItemController::class,'add_stock']);

Route::post('add-new-stock',  [ItemController::class,'add_new_stock']);
Route::post('issue-material-stock',  [ItemController::class,'issue_material_stock']);
Route::post('add-major-stock',  [ItemController::class,'add_major_stock']);
Route::post('ton-produce',  [ItemController::class,'ton_produce']);

Route::get('history',  [ItemController::class,'history']);
Route::get('formula',  [ItemController::class,'formation_view']);

Route::get('search',  [ItemController::class,'search']);

Route::get('search-page',  [ItemController::class,'search']);


Route::post('update-formation',  [ItemController::class,'update_formation']);





















