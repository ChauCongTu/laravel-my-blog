<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::where('parent_id', null)->get();
        $lastest = Post::limit(5)->orderBy('created_at')->get();
        return view('welcome', compact('categories', 'lastest'));
    }
}
