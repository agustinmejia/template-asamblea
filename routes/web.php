<?php

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

Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('article/{slug}', function ($slug) {
    $article = App\Models\Article::where('slug', $slug)->first();
    return view('article', compact('article'));
});

Route::get('people', function () {
    return view('people');
});

Route::get('gaceta', function () {
    return view('gaceta');
});

Route::get('gaceta/{type}', function ($type) {
    $type = App\Models\PublicationsCategory::where('slug', $type)->first();
    return view('gaceta-type', compact('type'));
});

Route::get('gaceta/{type}/list', function ($type) {
    $type = App\Models\PublicationsCategory::where('slug', $type)->first();
    $publications = App\Models\Publication::where('publications_type_id', $type->id)->where('status', 1)->get();
    return view('gaceta_list', compact('publications'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
