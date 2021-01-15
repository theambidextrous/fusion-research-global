<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/request-a-call-back', [WebsiteController::class, 'callback'])->name('callback');
Route::get('/service-request', [WebsiteController::class, 'sreq'])->name('sreq');

Route::prefix('/services')->group( function() {
    Route::get('/concept-paper', [WebsiteController::class, 'service_a'])->name('service_a');
    Route::get('/topic-and-objective-development', [WebsiteController::class, 'service_b'])->name('service_b');
    Route::get('/background-and-pilot-of-the-study', [WebsiteController::class, 'service_c'])->name('service_c');
    Route::get('/literature-review', [WebsiteController::class, 'service_d'])->name('service_d');
    Route::get('/research-methodology', [WebsiteController::class, 'service_e'])->name('service_e');
    Route::get('/awesome-chapter-four', [WebsiteController::class, 'service_f'])->name('service_f');
    Route::get('/awesome-chapter-five', [WebsiteController::class, 'service_g'])->name('service_g');

    Route::get('/plagiarism-management', [WebsiteController::class, 'plag'])->name('plag');
});

Route::prefix('/trainings')->group( function() {
    Route::get('/free-spss-training', [WebsiteController::class, 'training_a'])->name('training_a');
    Route::get('/excel-training', [WebsiteController::class, 'training_b'])->name('training_b');
    Route::get('/eviews-training', [WebsiteController::class, 'training_c'])->name('training_c');
});