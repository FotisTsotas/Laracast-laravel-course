<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

use phpDocumentor\Reflection\Types\Collection;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class, 'show']);

Route::get('authors/{author:username}',function(User $author){
    return view('posts.index', [
        'posts' =>  $author->posts,
        
    ]);
});