<?php

use App\Http\Controllers\Admin\Api\AugmentationController;
use App\Http\Controllers\Admin\Api\InspireWorkController;
use App\Http\Controllers\Admin\Api\ProfilesController;
use App\Http\Controllers\Admin\Api\SuccessStoriesController;
use App\Http\Controllers\Admin\Api\TechnologyController;
use App\Http\Controllers\Website\FormsController;
use Illuminate\Http\Request;
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
Route::get('technologies', [TechnologyController::class, 'index'])
    ->name('technologies.index');
Route::get('augment-hiring', [AugmentationController::class, 'index'])
    ->name('augmentation.index');
Route::get('success-stories', [SuccessStoriesController::class, 'index'])
    ->name('success-stories.index');
Route::get('profiles', [ProfilesController::class, 'index'])
    ->name('profiles.index');
Route::get('inspire-work', [InspireWorkController::class, 'index'])
    ->name('inspire-work.index');
Route::post('lets-discuss-your-project', [FormsController::class, 'store'])->name('lets-discuss-your-project.store');
