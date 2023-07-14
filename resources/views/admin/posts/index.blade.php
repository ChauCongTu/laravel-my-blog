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
                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-plus me-2"></i>Thêm
                    bài viết</a>
                <form class="d-flex input-group w-auto" action="">
                    <input type="search" class="form-control" name="s" placeholder="Tra cứu bài viết" />
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
                            <td>Tên bài viết</td>
                            <td>Danh mục</td>
                            <td>Người đăng</td>
                            <td>Ngày tạo</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->user->display_name }}</td>
                                <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('post.edit', ['post' => $post]) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i> Sửa</a>
                                    <a data-bs-toggle="modal" data-bs-target="#delete_{{ $post->id }}"
                                        class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i>Xóa</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete_{{ $post->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="img text-center py-3"><img
                                                    src="{{ asset('images/icon/warning.png') }}" class="w-25"></div>
                                            <div class="content p-2 text-center">Bạn có chắc muốn xóa bài viết này?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">Hủy</button>
                                            <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xác nhận</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Không có bài viết nào
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">{{ $posts->links() }}</div>
            </div>
        </div>
    </div>
@endsection
