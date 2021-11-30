@extends('layouts.admin')
@section('content_admin')
<main class="page-content">
    <div class="container">
        <div class="row">
            <div class="color col-6">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                <div>
                    Bảng màu
                </div>
                <button class="button-add button-add--blue" data-toggle="modal" data-target="#addColor"><span class="button-add__icon">
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="size col-6">
            <div class="mb-2 d-flex justify-content-between align-items-center">
                <div>
                    Bảng Kích Cỡ
                </div>
                <button class="button-add button-add--blue" data-modal="#addProduct"><span class="button-add__icon">
                        <svg class="icon-icon-plus">
                          <use xlink:href="#icon-plus"></use>
                        </svg></span><span class="button-add__text"></span>
                                    </button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kích cỡ</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
<div class="modal fade" id="addColor" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
@endsection