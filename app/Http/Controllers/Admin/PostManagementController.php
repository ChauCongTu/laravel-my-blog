<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(8);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        if ($request->hasFile('thumb')) {
            $post = $request->except('_token');
            // dd($post);
            $fileName = Str::slug($post['name']) . '-' . date('HisdmY') . '.' . $request->file('thumb')->extension();
            $request->file('thumb')->storeAs('public/post', $fileName);
            $post['thumb'] = 'post/' . $fileName;
            $post['user_id'] = Auth::id();
            Post::create($post);
            return redirect(route('post.index'))->with(['msg' => 'Thêm bài viết thành công', 'type' => 'success']);
        }
        return back()->with(['msg' => 'Vui lòng tải lên ảnh', 'type' => 'danger']);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, int $id)
    {
        $postBeforeEdit = Post::find($id);
        $post = $request->except('_token', '_method');
        if ($request->hasFile('thumb')) {
            $pos = strrpos($postBeforeEdit->thumb, "/");
            $fileName = substr($postBeforeEdit->thumb, $pos + 1);
            $request->file('thumb')->storeAs('public/post', $fileName);
            $post['thumb'] = 'post/' . $fileName;
        }
        Post::where('id', $id)->update($post);
        return redirect(route('post.index'))->with(['msg' => 'Chỉnh sửa bài viết thành công', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Post::destroy($id);
        return back()->with(['msg' => 'Xóa bài viết thành công', 'type' => 'success']);
    }
}
