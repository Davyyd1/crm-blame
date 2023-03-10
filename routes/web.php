<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;

use Dompdf\Adapter\PDFLib;

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

Route::prefix('admin')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\ShowController::class, 'show']);
Route::put('/home', [App\Http\Controllers\ShowController::class, 'update'])->name('update');

Route::get('view/{id}', [App\Http\Controllers\ViewProjController::class, 'view'])->name('view');
Route::put('view/{id}', [App\Http\Controllers\ViewProjController::class, 'updateProj'])->name('updateProj');
Route::put('/', [App\Http\Controllers\ViewProjController::class, 'saveProjDet'])->name('saveProjDet');

Route::get('colaboratori', [App\Http\Controllers\ColaboratoriController::class, 'viewColaboratori'])->name('viewColaboratori');

Route::get('istProj/{id}', [App\Http\Controllers\istProjController::class, 'viewIstProj'])->name('viewIstProj');

Route::put('istProj/{id}', [App\Http\Controllers\istProjController::class, 'updateIstProj'])->name('updateIstProj');

Route::get('delete/{id}', [App\Http\Controllers\istProjController::class, 'deleteIstProj'])->name('deleteIstProj');

Route::put('colaboratori/{id}', [App\Http\Controllers\ColaboratoriController::class, 'realizeazaPlata'])->name('realizeazaPlata');

Route::get('statistici', [App\Http\Controllers\StatisticiController::class, 'viewStatistici'])->name('viewStatistici');

Route::get('download/{id}', [App\Http\Controllers\DescarcaController::class, 'descarca'])->name('descarca');
