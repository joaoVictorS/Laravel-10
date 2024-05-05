<?php

use App\Http\Controllers\admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::delete('/suportes/{id}', [SupportController::class, 'destroy'])->name('support.destroy');
Route::put('/suportes/{id}', [SupportController::class, 'update'])->name('support.update');
Route::get('/suportes/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::get('/suportes/create', [SupportController::class, 'create'])->name('support.create');
Route::get('/suportes/{id}', [SupportController::class, 'show'])->name('support.show');
Route::post('/suportes', [SupportController::class, 'store'])->name('support.store');
Route::get('/suportes', [SupportController::class, 'index'])->name('support.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
