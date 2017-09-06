<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required|max:255',
            'picture' => 'max:255',
            'position' => 'required|max:255',
            'description' => 'required'
        ]);

        Post::create([
            'title'     => $request->input('title'),
            'picture' => $request->input('picture'),
            'position' => $request->input('position'),
            'description' => $request->input('description'),
            'user_id'   => '1',//Auth::user()->id,
        ]);

        return redirect('/posts')->with('status', 'post was created successfully');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'picture' => 'max:255',
            'position' => 'required|max:255',
            'description' => 'required',
        ]);
        $post->update($request->all());
        return redirect('posts/' . $post->id)->with('success', 'Post info updated successfully.');;
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Post was deleted');
    }

}
