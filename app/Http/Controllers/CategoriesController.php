<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoriesController extends Controller
{
    //
    public function show(string $slug, int $id, int $filter = null)
    {
        $category_id = [ $id ];
        $category = Category::find($id);
        if ($category->child->count() > 0) {
            foreach ($category->child as $child) {
                $category_id[] = $child['id'];
            }
        }
        $posts = Post::whereIn('category_id', $category_id)->orderBy('id', 'DESC')->paginate(8);
        return view('categories.show', compact('category', 'posts'));
    }
}
