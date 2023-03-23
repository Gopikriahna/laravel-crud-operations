<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;
use App\Http\Controllers\stdController;

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
// Route::get('/create', function () {
//     return view('create');
// });

//Route::get('/student',[studentController::class,'index']);
Route::resource('/student',stdController::class);


