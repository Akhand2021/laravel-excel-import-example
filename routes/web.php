<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelImportController;

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

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::get('/upload', [ExcelImportController::class, 'importForm']);
Route::post('/import', [ExcelImportController::class,'import'])->name('import');

