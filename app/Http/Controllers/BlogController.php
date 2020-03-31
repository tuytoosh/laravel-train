<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
      //  dd(Post::where('id', '>', 0)->orderBy('id', 'desc')->get());

        $data['posts'] = Post::paginate(2);
        return view('blog.posts', $data);
    }
}
