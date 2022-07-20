<?php

use App\Http\Controllers\StudentController; //import class StudentController
use App\Http\Controllers\ProductController;

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
//  http://127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
});

//cara akses di browser tulis url:
// http://127.0.0.1:8000/tes
Route::get('/tes', function () {
    echo 'tess';
});

Route::get('/tes-kedua', function() {
    echo 'route tes kedua';
});

// cara akses di browser: localhost:8000/mahasiswa
Route::get('/mahasiswa', [StudentController::class, 'index'])->name('student.index');
// cara akses di browser: localhost:8000/mahasiswa/show/3
Route::get('/mahasiswa/show/{id}', [StudentController::class, 'show']);
Route::get('/mahasiswa/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/mahasiswa/store', [StudentController::class, 'store'])->name('student.store');

Route::get('/mahasiswa/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/mahasiswa/{id}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/mahasiswa/{id}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/show/{id}', [ProductController::class, 'show']);
