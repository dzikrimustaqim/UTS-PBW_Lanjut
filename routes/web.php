<?php

use App\Http\Controllers\ExperienceCategoryController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectCategoryController;
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

Route::get('/',[HomeController::class,'index']);

// Project Category
Route::get('/projectcategory', [ProjectCategoryController::class, 'index']);
Route::get('/projectcategory/add', [ProjectCategoryController::class, 'create']);
Route::post('/projectcategory', [ProjectCategoryController::class, 'store']);
Route::get('/projectcategory/{id}/edit', [ProjectCategoryController::class, 'edit']);
Route::put('/projectcategory/{id}', [ProjectCategoryController::class, 'update']);
Route::get('/projectcategory/{id}/delete', [ProjectCategoryController::class, 'destroy']);

// Project Category
Route::get('/experiencecategory', [ExperienceCategoryController::class, 'index']);
Route::get('/experiencecategory/add', [ExperienceCategoryController::class, 'create']);
Route::post('/experiencecategory', [ExperienceCategoryController::class, 'store']);
Route::get('/experiencecategory/{id}/edit', [ExperienceCategoryController::class, 'edit']);
Route::put('/experiencecategory/{id}', [ExperienceCategoryController::class, 'update']);
Route::get('/experiencecategory/{id}/delete', [ExperienceCategoryController::class, 'destroy']);

// Project Category
Route::get('/experience', [ExperienceController::class, 'index']);
Route::get('/experience/add', [ExperienceController::class, 'create']);
Route::post('/experience', [ExperienceController::class, 'store']);
Route::get('/experience/{id}/edit', [ExperienceController::class, 'edit']);
Route::put('/experience/{id}', [ExperienceController::class, 'update']);
Route::get('/experience/{id}/delete', [ExperienceController::class, 'destroy']);