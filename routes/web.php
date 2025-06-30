<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUs;
use App\Http\Controllers\Faqs;
use App\Http\Controllers\FoodNdAccController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\RetreatController;
use App\Models\OurTeam;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/who-we-are', [AboutUsController::class, 'index'])->name('who-we-are');
Route::get('/food-and-accommodation', [FoodNdAccController::class, 'index'])->name('food-and-accommodation');
Route::get('/our-teacher', [OurTeamController::class, 'index'])->name('our-teacher');
Route::get('/retreats', [RetreatController::class, 'index'])->name('retreats');
Route::get('/retreat/himalayan-hiking', [RetreatController::class, 'himalayanHiking'])->name('himalayan-hiking');
Route::get('/retreat/hatha-yoga', [RetreatController::class, 'hathaYoga'])->name('hatha-yoga');
Route::get('/retreat/kundalini-yoga', [RetreatController::class, 'kundaliniYoga'])->name('kundalini-yoga');
Route::get('/faqs', [Faqs::class, 'index'])->name('faqs');
Route::get('/contact-us', [ContactUs::class, 'index'])->name('contact-us');
Route::get('/privacy-policy', [ContactUs::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/refund-policy', [ContactUs::class, 'refundPolicy'])->name('refund-policy');
Route::get('/terms-of-service', [ContactUs::class, 'index'])->name('terms-of-service');
Route::get('/founders', [AboutUsController::class, 'founders'])->name('founders');
