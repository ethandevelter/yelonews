<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('blog', [
            'blog' => Post::published()->get(),
            'featuredPosts' => Post::published()->featured()->latest('published_at')->take(3)->get(),
            'latestPosts' => Post::published()->latest('published_at')->take(9)->get(),
            'users' => User::take(1)->get(),
        ]);
    }
}
