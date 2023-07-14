<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(8);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rootCategories = Category::where('parent_id', null)->get();
        return view('admin.categories.add', compact('rootCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = $request->all();
        if ($category['parent_id'] == 0) {
            $category['parent_id'] = null;
        }
        $rs = Category::create($category);
        return redirect(route('category.index'))->with(['msg' => 'Thêm danh mục thành công', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return 'Xem bài viết ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $category = Category::find($id);
        $rootCategories = Category::where('parent_id', null)->get();
        return view('admin.categories.edit', compact('category', 'rootCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, int $id)
    {
        $category = $request->only('name', 'parent_id');
        if ($category['parent_id'] == 0) {
            $category['parent_id'] = null;
        }
        $rs = Category::where('id', $id)->update($category);
        return redirect(route('category.index'))->with(['msg' => 'Chỉnh sửa danh mục thành công', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $result = Category::destroy($id);
        if ($result > 0) {
            return back()->with(['msg' => 'Xóa danh mục thành công', 'type' => 'success']);
        }
        return back()->with(['msg' => 'Có lỗi xảy ra, vui lòng thử lại', 'type' => 'danger']);
    }
}
