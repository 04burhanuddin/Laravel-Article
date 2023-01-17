<?php

use App\Http\Livewire\Article\Article as ArticleArticle;
use App\Models\Article;
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

Route::get('/', function () {
    return view('home.show', ['article' => Article::all()]);
})->name('welcome');

// Route::get('/article', function () {
//     return view('article.show', ['article' => Article::all()]);
// })->name('article');

Route::get('/project', function () {
    return view('project.show');
})->name('project');

Route::get('/article', ArticleArticle::class)->name('article');

Route::get('/about', function () {
    return view('about.show');
})->name('about');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
