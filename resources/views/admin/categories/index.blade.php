@extends('layouts.admin')

@section('title')
    Quản lý danh mục
@endsection
@section('content')
    @if (\Session::has('msg'))
        <div class="alert alert-{!! \Session::get('type') !!} text-center">{!! \Session::get('msg') !!}</div>
    @endif

    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-plus me-2"></i>Thêm danh mục</a>
                <form class="d-flex input-group w-auto" action="">
                    <input type="search" class="form-control" name="s" placeholder="Tra cứu danh mục" />
                    <button class="btn bg-primary text-white border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="fw-bold">
                            <td>ID</td>
                            <td>Tên danh mục</td>
                            <td>Danh mục cha</td>
                            <td>Số bài viết</td>
                            <td>Ngày tạo</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ !empty($category->parent) ? $category->parent->name : false }}</td>
                                <td>{{ $category->posts->count() }}</td>
                                <td>{{ date('d/m/Y', strtotime($category->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('category.edit', ['category' => $category]) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i> Sửa</a>
                                    <a data-bs-toggle="modal" data-bs-target="#delete_{{ $category->id }}"
                                        class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i>Xóa</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete_{{ $category->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="img text-center py-3"><img
                                                    src="{{ asset('images/icon/warning.png') }}" class="w-25"></div>
                                            <div class="content p-2 text-center">Bạn có chắc muốn xóa danh mục này?</div>
                                            <div class="sub-content small text-center">Tất cả danh mục con, bài viết thuộc
                                                danh mục này đều sẽ bị xóa và không thể hoàn tác!</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">Hủy</button>
                                            <form action="{{ route('category.destroy', ['category' => $category]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xác nhận</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Không có danh mục nào
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">{{ $categories->links() }}</div>
            </div>
        </div>
    </div>
@endsection
