<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
        {
            return view('posts.index',
            [
                'posts' => Post::take(5)->get(),
            ]
        );
    }
}
