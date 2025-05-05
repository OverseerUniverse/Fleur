<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Models\Like;

Route::get('/', function () {
    $sessionId = request()->session()->getId();
    $likes_count = Like::count();
    $has_liked = Like::where('session_id', $sessionId)->exists();
    return view('welcome', ['likes_count' => $likes_count, 'has_liked' => $has_liked]);
})->name('home');

Route::post('/like', LikeController::class);

require __DIR__.'/auth.php';
