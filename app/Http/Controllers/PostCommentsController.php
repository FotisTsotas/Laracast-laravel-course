<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
            request()->validate([
                'body' => 'required'
            ]);

           $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')

           ]);

           return back();
    }
}
