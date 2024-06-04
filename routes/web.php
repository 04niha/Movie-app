<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);

Route::get('/reviews', [ReviewController::class, 'index']);

Route::get('/products', function () {
    return view('product');
});
Route::get('/movies/create', [MovieController::class, 'create']);
Route::get('/genres/create', [GenreController::class, 'create']);
Route::get('/reviews/create', [ReviewController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store']);
Route::post('/genres', [GenreController::class, 'store']);
Route::post('/reviews', [ReviewController::class, 'store']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);
Route::delete('/review/{review}', [ReviewController::class, 'destroy']);