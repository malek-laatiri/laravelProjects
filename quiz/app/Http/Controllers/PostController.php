<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts=Post::get();
        $posts = Post::paginate(2);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

//       Post::create(
//     [
//         'user_id'=>auth()->id(),
//         'body'=>$request->body
//     ]
//       );


        auth()->user()->posts()->create([
            'body' => $request->body
        ]);
        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
