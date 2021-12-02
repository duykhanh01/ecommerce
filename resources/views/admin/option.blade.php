@extends('layouts.admin')
@section('content_admin')
<main class="page-content">
    <div class="container">
        <div class="row">
            <div class="color  col-xl-6 col-sm-12">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        Bảng Màu
                    </div>
                    <button class="button-add button-add--blue" data-modal="#addColor"><span class="button-add__icon">
                            <svg class="icon-icon-plus">
                                <use xlink:href="#icon-plus"></use>
                            </svg></span><span class="button-add__text"></span>
                    </button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Màu</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($color as $id => $cl)
                        <tr>
                            <th scope="row">{{$id+1}}</th>
                            <td>{{$cl->color_name}}</td>
                            <td><a data-modal="#editColor"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{route('delColor',$cl->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                    <button type="submit"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="size  col-xl-6 col-sm-12">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        Bảng Kích Cỡ
                    </div>
                    <button class="button-add button-add--blue" data-modal="#addSize"><span class="button-add__icon">
                            <svg class="icon-icon-plus">
                                <use xlink:href="#icon-plus"></use>
                            </svg></span><span class="button-add__text"></span>
                    </button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kích thước</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($size as $id => $sz)
                        <tr>
                            <th scope="row">{{$id+1}}</th>
                            <td>{{$sz->size_name}}</td>
                            <td><a href="#"><i class="far fa-edit"></i></a></td>
                            <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="size  col-xl-6 col-sm-12">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        Bảng Thể Loại
                    </div>
                    <button class="button-add button-add--blue" data-modal="#addCate"><span class="button-add__icon">
                            <svg class="icon-icon-plus">
                                <use xlink:href="#icon-plus"></use>
                            </svg></span><span class="button-add__text"></span>
                    </button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kích thước</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($size as $id => $sz)
                        <tr>
                            <th scope="row">{{$id+1}}</th>
                            <td>{{$sz->size_name}}</td>
                            <td><a href="#"><i class="far fa-edit"></i></a></td>
                            <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="size  col-xl-6 col-sm-12">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        Bảng Tag
                    </div>
                    <button class="button-add button-add--blue" data-modal="#addTag"><span class="button-add__icon">
                            <svg class="icon-icon-plus">
                                <use xlink:href="#icon-plus"></use>
                            </svg></span><span class="button-add__text"></span>
                    </button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kích thước</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($size as $id => $sz)
                        <tr>
                            <th scope="row">{{$id+1}}</th>
                            <td>{{$sz->size_name}}</td>
                            <td><a href="#"><i class="far fa-edit"></i></a></td>
                            <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
<div class="inbox-add modal modal-compact scrollbar-thin" id="addColor" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <button class="modal__close" data-dismiss="modal">
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Thêm màu</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST" action="/admin/option/addColor">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="input" placeholder="Tên màu" name="color" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="btn btn-primary m-auto" type="submit" value="Thêm màu">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inbox-add modal modal-compact scrollbar-thin" id="addSize" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <button class="modal__close" data-dismiss="modal">
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Thêm Size</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST" action="/admin/option/addSize">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="input" placeholder="Tên size" name="size" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="btn btn-primary m-auto" type="submit" value="Thêm Size">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inbox-add modal modal-compact scrollbar-thin" id="addTag" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <button class="modal__close" data-dismiss="modal">
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Thêm Tag</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST" action="/admin/option/addTag">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="input" placeholder="Tên Tag" name="tag" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="btn btn-primary m-auto" type="submit" value="Thêm Tag">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inbox-add modal modal-compact scrollbar-thin" id="addCate" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <button class="modal__close" data-dismiss="modal">
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Thêm Thể Loại</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST" action="/admin/option/addCate">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="input" placeholder="Tên thể loại" name="cate" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="btn btn-primary m-auto" type="submit" value="Thêm thể loại">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal sửa tên màu -->
<div class="inbox-add modal modal-compact scrollbar-thin" id="editColor" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <button class="modal__close" data-dismiss="modal">
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Thêm Thể Loại</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST" action="/admin/option/addCate">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="input" placeholder="Tên thể loại" name="cate" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="btn btn-primary m-auto" type="submit" value="Thêm thể loại">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection