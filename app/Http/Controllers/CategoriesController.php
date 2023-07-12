<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoriesController extends Controller
{
    //
    public function show(string $slug, int $id, int $filter = null) {
        $category = Category::find($id);
        $posts = $category->posts;
        if ($category->child->count() > 0) {
            foreach ($category->child as $child) {
                foreach($child->posts as $post) {
                    $posts->push($post);
                }
            }
        }
        $posts = $posts->sortBy('created_at');
        // $posts = new Paginator($posts, 2);

        // $posts->setPath(url(request()->path()));
        return view('categories.show', compact('category', 'posts'));
    }
}
