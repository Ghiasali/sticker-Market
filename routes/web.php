<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\StickerController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LanguageController;
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

Route::get('/', [StaterkitController::class, 'home'])->name('home');
Route::get('b', [StaterkitController::class, 'home'])->name('home');
// Route Components
Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');

Route::middleware(['auth'])->group(function () {
    Route::get('Stickers',[StaterkitController::class,'stickers'])->name('stickers-page');
    Route::get('Addpack',[StaterkitController::class,'add_stickers'])->name('Addpack');
    Route::post('store_pack',[StickerController::class,'store_pack']);
    Route::get('pack/{id}',[StickerController::class,'update_pack']);
    Route::post('update_tags',[TagController::class,'update_tags'])->name('update_tags');
    Route::get('edit_sticker/{id}',[StickerController::class,'editsticker_view']);
    Route::get('trash_sticker/{id}',[StickerController::class,'trash_sticker']);
    Route::post('update_sticker',[StickerController::class,'update_sticker'])->name('update_sticker');
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/dashboard', [StaterkitController::class, 'home'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
