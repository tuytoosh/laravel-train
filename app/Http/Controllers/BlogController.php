<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index() {
        $data['posts'] = Post::paginate(2);
        return view('blog.posts', $data);
    }

    public function delete($id) {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return back();
        } else {
            return Redirect::to('/');
        }
    }

    public function add() {
        return view('blog.add');
    }

    public function save(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        // Post::create($request->all());

        return Redirect::to('blog');
    }


    public function edit(Post $post) {
        $data['post'] = $post;
        return view('blog.edit', $data);
    }

    public function update(Post $post, Request $request) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return Redirect::to('blog');
    }

}
