<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        // $posts = ;

        // foreach ($posts as $post) {
        //     $post->comments  = \Http::get("http://localhost:8001/api/posts/{$post->id}/comments")->json();
        // }



        return Post::all();
    }



    public function store(Request $request)
    {

        

        return Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description')

        ]);
    }

    public function comment(Request $request,$id)
    {   
       $post = Post::find($id);

        $comments = $post->comments;

        array_push($comments,[
            'text' => $request->input('text')
        ]);

        $post->comments = $comments;

        $post->save();
    }
}
