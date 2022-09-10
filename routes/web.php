<?php

use App\Http\Controllers\ExcelController;
use App\Models\Health;
use Carbon\Carbon;
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


Route::get('excel', [ExcelController::class, 'index'])->name('excel.index');
Route::get('word', [ExcelController::class, 'word'])->name('word.index');
Route::get('excel/show', [ExcelController::class, 'show'])->name('excel.show');
Route::get('excel/create', [ExcelController::class, 'create'])->name('excel.create');
Route::post('excel/store', [ExcelController::class, 'store'])->name('excel.store');


Route::get('test', function () {
    dd(\PhpOffice\PhpWord\PhpWord::DEFAULT_FONT_NAME);
});
