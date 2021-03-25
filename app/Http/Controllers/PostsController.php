<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Instantiate a new PostsController instance.
     */
    public function __construct()
    {
        $this->middleware('CheckPassword', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Post::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store a new Post
        $request->validate([
            "title" => "required",
            "content" => "required",
            "image" => "required",
            "author" => "required",
            "facebook_post" => "required",
            "created_at" => "required"
        ]);

        // return $request->all();

        $post = Post::create($request->only("title", "content", "image", "author", "facebook_post", "created_at"));

        return response(["message" => "Post Successfully Created", "post" => $post], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Post::where('id', $id)->exists()) {
            $post = post::find($id);
            $request->validate([
                "title" => "required",
                "content" => "required",
                "image" => "required",
                "author" => "required",
                "facebook_post" => "required"
            ]);
            $post->update($request->only("title", "content", "image", "author", "facebook_post"));

            return response()->json([
                "message" => "Post With ID " . $id . " Was Updated Successfully",
                "post" => $post
            ], 200);
        } else {
            return response()->json([
                "message" => "Post With ID " . $id . " Was Not Found",
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response(['message' => 'Post Has Deleted Successfully']);
    }
}
