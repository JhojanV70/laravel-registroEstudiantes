<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CourseController;
use App\Http\Controllers\api\StudentController;
use App\Http\Controllers\api\QuerieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cursos',[CourseController::class,'index'])->name('cursos');

Route::get('/estudiantes',[StudentController::class,'index'])->name('estudiantes');

Route::get('/Consultas',[QuerieController::class,'index'])->name('Consultas');