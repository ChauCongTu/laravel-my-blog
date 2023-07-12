<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(string $slug, int $id)
    {
        $post = Post::find($id);
        session()->put('post_id', $id);
        return view('posts.show', compact('post'));
    }
    public function comment(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->content = $request->content;
        $comment->post_id = session()->get('post_id');
        $result = $comment->save();
        if ($result) {
            return back();
        }
    }
}
