<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
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

// Route::get('/', function () {
//     // Header Data
//     $navItems = config('store.navItems');

//     // Content Data
//     $slides = config('comics');
//     $dcAssets = config('store.dcAssets');

//     // Footer Data
//     $dcItems = config('store.dcItems');
//     $sitesItems = config('store.sitesItems');
//     $socialLinks = config('store.socialLinks');
//     $footerArray = array('dcItems' => $dcItems, 'sitesItems' => $sitesItems, 'socialLinks' => $socialLinks);

//     return view('homepage', compact('navItems', 'footerArray', 'slides', 'dcAssets'));
// })->name('homepage');

Route::get('/', [ComicController::class, "index"])->name("home");
Route::resource("comics", ComicController::class);

Route::get('/comics/{series}', function (string $series) {
    // Header Data
    $navItems = config('store.navItems');

    // Content Data
    $comic = config('comics');
    $slides = array('comics' => $comic, 'serie' => $series);
    $dcAssets = config('store.dcAssets');

    // Footer Data
    $dcItems = config('store.dcItems');
    $sitesItems = config('store.sitesItems');
    $socialLinks = config('store.socialLinks');
    $footerArray = array('dcItems' => $dcItems, 'sitesItems' => $sitesItems, 'socialLinks' => $socialLinks);

    return view('comics', compact('navItems', 'slides', 'footerArray', 'dcAssets'));
})->name('comics');
