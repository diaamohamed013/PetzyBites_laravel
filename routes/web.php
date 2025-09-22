<?php

use App\Http\Controllers\HomeController;
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

Route::as('site.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about-us', [HomeController::class, 'aboutUS'])->name('aboutUs');
    Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
    Route::get('our-brands', [HomeController::class, 'ourBrands'])->name('ourBrands');
    Route::get('all-articles', [HomeController::class, 'ourBlog'])->name('ourBlog');
    Route::get('article', [HomeController::class, 'article'])->name('article');
    Route::get('articles-categories', [HomeController::class, 'articleCategories'])->name('articleCategories');
    Route::get('quality-assurance', [HomeController::class, 'qualityAssurance'])->name('qualityAssurance');
    Route::get('nutritional-integrity', [HomeController::class, 'nutritionalIntegrity'])->name('nutritionalIntegrity');
    Route::get('ingredient-glossary', [HomeController::class, 'ingredientGlossary'])->name('ingredientGlossary');
    Route::get('family-gallery', [HomeController::class, 'familyGallery'])->name('familyGallery');
    Route::get('pets-calculator', [HomeController::class, 'petsCalculator'])->name('petsCalculator');
    Route::get('dog-calories-calculator', [HomeController::class, 'dogCaloriesCalculator'])->name('dogCalories');
    Route::get('cat-calories-calculator', [HomeController::class, 'catCaloriesCalculator'])->name('catCalories');
    Route::get('dog-pregnancy-calculator', [HomeController::class, 'dogPregnancyCalculator'])->name('dogPregnancy');
    Route::get('cat-pregnancy-calculator', [HomeController::class, 'catPregnancyCalculator'])->name('catPregnancy');
});
