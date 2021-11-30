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
                        <h2 class="modal__title">New Message</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="row row--sm align-items-center justify-content-between">
                                        <div class="col-auto form-group form-group--inline form-group--label">
                                            <label class="form-label">To</label>
                                        </div>
                                        <div class="col-auto form-group form-group--inline form-group--label">
                                            <label class="form-label text-light-dark-theme">Show CC & BCC</label>
                                            <label class="checkbox-toggle">
                                                <input type="checkbox"><span class="checkbox-toggle__range"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Joan Bates" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Subject</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="review" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Message</label>
                                    <div class="input-editor">
                                        <div class="js-description-editor">Write a Text</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row row--xs gutter-bottom-xs">
                                        <div class="col-12 col-sm-6">
                                            <div class="media-file media-file--full">
                                                <div class="media-file__icon">
                                                    <img class="media-file__thumb" src="img/content/file-pdf.svg"
                                                        alt="#" />
                                                </div>
                                                <div class="media-file__right">
                                                    <div class="media-file__prepend">
                                                        <h5 class="media-file__title">Resume.pdf</h5><span
                                                            class="text-sm text-grey">570 KB</span>
                                                    </div>
                                                    <div class="media-file__append"><a
                                                            class="button-icon button-icon--grey" href="#"><span
                                                                class="button-icon__icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="media-file media-file--full">
                                                <div class="media-file__icon">
                                                    <img class="media-file__thumb" src="img/content/file-unknown.svg"
                                                        alt="#" />
                                                </div>
                                                <div class="media-file__right">
                                                    <div class="media-file__prepend">
                                                        <h5 class="media-file__title">Resume.pdf</h5><span
                                                            class="text-sm text-grey">570 KB</span>
                                                    </div>
                                                    <div class="media-file__append"><a
                                                            class="button-icon button-icon--grey" href="#"><span
                                                                class="button-icon__icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span></a>
                                                    </div>
                                                    <div class="media-file__upload">
                                                        <div class="media-file__upload-text">Uploading File... 40%</div>
                                                        <button class="media-file__upload-dismiss" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="media-file__progressbar">
                                                            <div class="media-file__progressbar-item"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <div class="row">
                            <div class="col-auto">
                                <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span>
                                </button>
                                <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                        <svg class="icon-icon-emoji">
                                            <use xlink:href="#icon-emoji"></use>
                                        </svg></span>
                                </button>
                            </div>
                            <div class="col-auto ml-auto">
                                <button class="button button--primary" data-dismiss="modal"><span
                                        class="button__icon button__icon--left">
                                        <svg class="icon-icon-send">
                                            <use xlink:href="#icon-send"></use>
                                        </svg></span><span class="button__text">Send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection