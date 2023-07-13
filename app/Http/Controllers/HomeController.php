<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Nette\Utils\Paginator;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        $lastest = Post::limit(5)->orderBy('created_at')->get();
        return view('welcome', compact('categories', 'lastest'));
    }
    public function search(Request $request)
    {
        if (!empty($request->s)) {
            $posts = Post::where('name', 'LIKE', '%' . $request->s . '%')->orderBy('id', 'DESC')->paginate(8);
        }
        else {
            $posts = Post::where('id', 0)->paginate(10);
        }
        $searchString = $request->s;
        return view('search', compact('posts', 'searchString'));
    }
}
