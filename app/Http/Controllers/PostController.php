<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create() {

       return view('post.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required|string',
            'post_content' => 'required|string',
            'image' => 'required|string',
        ]);
        Post::create($data);
        return redirect() -> route('post.index');
    }

    public function show(Post $post){

        return view('post.show', compact('post'));
    }
    public function edit(Post $post){

        return view('post.edit', compact('post'));
    }

    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'required|string',
            'post_content' => 'required|string',
            'image' => 'required|string',
        ]);
        $post->update($data);
        return redirect()->route('post.index');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete() {
        $post = Post::withTrashed()->find(6);
        $post->restore();
    }

    public function firstOrCreate() {

        $post = Post::firstOrCreate([
            'title' => 'some title',
        ],[
            'title' => 'some post',
            'post_content' => 'some post content',
            'image' => 'imageblabla.jpg',
            'likes' => '600',
            'is_published' => '1',
        ]);
    }

    public function updateOrCreate() {

        $post = Post::updateOrCreate([
            'title' => 'some title',
        ],[
            'title' => 'some post',
            'post_content' => 'some post content',
            'image' => 'imageblabla.jpg',
            'likes' => '600',
            'is_published' => '1',
        ]);
    }

}
