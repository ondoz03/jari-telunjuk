@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card card-docs mb-2">
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <ul class="nav nav-stretch nav-line-tabs fw-bolder fs-4 border-bottom-2 border-transparent flex-nowrap mb-8" role="tablist" id="kt_illustration_tabs">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2 active" data-bs-toggle="tab" href="#kt_illustration_sketchy-1" role="tab">Header Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_sigma-1" role="tab">Quotes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_dozzy-1" role="tab">FAQ</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_illustration_sketchy-1">
                            <div class="fw-bold text-gray-600 fs-5 mb-0"></div>
                            <div id="kt_account_settings_signin_method" class="collapse show">
                                <div class="mt-6 border-top">
                                    <div class="d-flex flex-wrap align-items-center mt-6">
                                        <div id="kt_title_header" class="">
                                            <div class="fs-6 fw-bolder mb-1">Title Header <span class="text-gray-500"></span></div>
                                            <div class="fw-bold text-gray-600" id="titleHeader">
                                                {{ GeneralHelper::settingPerpustakan('title_header') }}</div>
                                        </div>
                                        <div id="kt_title_header_edit" class="flex-row-fluid d-none">
                                            <form id="kt_title_header_change" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                novalidate="novalidate">
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                                            <label for="title_header" class="form-label fs-6 fw-bolder mb-3">Denda
                                                                harian</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                                id="title_header" placeholder="Title Header" name="title_header"
                                                                value="{{ GeneralHelper::settingPerpustakan('title_header') }}"
                                                                min="0">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <button id="kt_title_header_submit" type="button"
                                                        class="btn btn-primary me-2 px-6">Update</button>
                                                    <button id="kt_title_header_cancel" type="button"
                                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                </div>
                                                <div></div>
                                            </form>
                                        </div>
                                        <div id="kt_title_header_button" class="ms-auto">
                                            <button class="btn btn-light btn-active-light-primary">Change Header Title</button>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-6"></div>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div id="kt_body_header" class="">
                                            <div class="fs-6 fw-bolder mb-1">Description Header <span class="text-gray-500"></span></div>
                                            <div class="fw-bold text-gray-600" id="dendaKerusakan">{{ GeneralHelper::settingPerpustakan('body_header') }}</div>
                                        </div>
                                        <div id="kt_body_header_edit" class="flex-row-fluid d-none">
                                            <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                novalidate="novalidate">
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                                            <label for="body_header" class="form-label fs-6 fw-bolder mb-3">Description Header</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                                id="body_header" placeholder="Header Body"
                                                                name="body_header"
                                                                value="{{ GeneralHelper::settingPerpustakan('body_header') }}"
                                                                min="0">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <button id="kt_signin_submit" type="button"
                                                        class="btn btn-primary me-2 px-6">Update</button>
                                                    <button id="kt_signin_cancel" type="button"
                                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                </div>
                                                <div></div>
                                            </form>
                                        </div>
                                        <div id="kt_body_header_button" class="ms-auto">
                                            <button class="btn btn-light btn-active-light-primary">Change Header Descriptions</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="kt_illustration_sigma-1">
                            <form href="{{route('admin.setting.update')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">By Quetes </label>
                                    <input type="text" class="form-control" id="body" name="by_quotes" value="{{ GeneralHelper::settingPerpustakan('by_quotes') }}" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="pesan">Quetes </label>
                                    <textarea class="form-control" id="pesan" name="qoutes_header" rows="4" required>{{ GeneralHelper::settingPerpustakan('qoutes_header') }}</textarea>
                                </div>
                                <br>
                                <input type="hidden" name="type" value="quotes">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="kt_illustration_dozzy-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('admin.setting.update')}}" method="post">
                                        @csrf

                                        <div class="form-group mb-5" id="inputContainer">

                                        @forelse (json_decode(GeneralHelper::settingPerpustakan('faq')) as $key => $item)
                                        <div class="input-set"  data-key="{{$key}}">

                                            <label for="title1" class="mt-4" >Faq Title {{$key + 1}}:</label>
                                            <input type="text" class="form-control" name="title[]" placeholder="Enter title" value="{{$item->title}}">

                                            <label class="pt-5" for="description1">Faq Description {{$key + 1}}:</label>
                                            <textarea class="form-control" name="description[]" placeholder="Enter description">{{$item->description}}</textarea>
                                            @if ($key > 0)
                                                    <button type="button"  class="btn btn-danger delete-input" data-key="{{$key}}">Remove</button>
                                            @endif
                                        </div>

                                        @empty
                                            <label for="title1">Faq Title 1:</label>
                                            <input type="text" class="form-control" name="title[]" placeholder="Enter title">

                                            <label class="pt-5" for="description1">Faq Description 1:</label>
                                            <textarea class="form-control" name="description[]" placeholder="Enter description"></textarea>

                                        @endforelse
                                        </div>


                                        <input type="hidden" name="type" value="faq">
                                        <button type="button" class="btn btn-success" id="addInput">Add Input</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
@push('js')
<script>
     $(document).ready(function() {
            let counter = 1;

        $('#addInput').on('click', function() {
                counter++;

                let newInputHtml =
                    `<div class="input-set form-group mt-5">
                        <label for="title${counter}">Title ${counter}:</label>
                        <input type="text" class="form-control" name="title[]" placeholder="Enter title">

                        <label  class="mt-3" for="description${counter}">Description ${counter}:</label>
                        <textarea class="form-control" name="description[]" placeholder="Enter description"></textarea>

                        <button type="button" class="btn btn-danger remove-input mt-3">Remove</button>
                    </div>`;

                $('#inputContainer').append(newInputHtml);
            });

            // Event delegation for dynamically added "Remove" buttons
            $('#inputContainer').on('click', '.remove-input', function() {
                $(this).closest('.input-set').remove();
            });
        });

        $('#inputContainer').on('click', '.delete-input', function() {
                let key = $(this).data('key');
                $(`.input-set[data-key="${key}"]`).remove();
        });
</script>
    <script>
        "use strict";
        var KTAccountSettingsSigninMethods = {
            init: function() {
                var t, e;
                ! function() {
                    var t = document.getElementById("kt_title_header"),
                        e = document.getElementById("kt_title_header_edit"),
                        i = document.getElementById("kt_title_header_button"),
                        s = document.getElementById("kt_title_header_cancel"),

                        a = document.getElementById("kt_body_header"),
                        b = document.getElementById("kt_body_header_edit"),
                        c = document.getElementById("kt_body_header_button"),
                        d = document.getElementById("kt_signin_cancel");

                    i.querySelector("button").addEventListener("click", (function() {
                        l()
                    })), s.addEventListener("click", (function() {
                        l()
                    })),

                        c.querySelector("button").addEventListener("click", (function() {
                            d()
                        })), d.addEventListener("click", (function() {
                            d()
                        }));
                    var l = function() {
                            t.classList.toggle("d-none"), i.classList.toggle("d-none"), e.classList.toggle(
                                "d-none")
                        },
                        d = function() {
                            a.classList.toggle("d-none"), c.classList.toggle("d-none"), b.classList.toggle(
                                "d-none")
                        }
                }(), e = document.getElementById("kt_title_header_change"), t = FormValidation.formValidation(
                        e, {
                            fields: {
                                title_header: {
                                    validators: {
                                        notEmpty: {
                                            message: "Tidak Boleh Kosong"
                                        },
                                    }
                                },
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row"
                                })
                            }
                        }), e.querySelector("#kt_title_header_submit").addEventListener("click", (function(n) {
                        n.preventDefault(), console.log("click"), t.validate().then((function(n) {
                            var value = document.querySelector('input[name=title_header]').value
                            $.ajax({
                                url: ajaxUrlAdmin + 'setting',
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    key: 'title_header',
                                    value: value
                                },
                                success: function(e) {
                                    $('#titleHeader').html(value)
                                    swal.fire({
                                        text: "Title Header Setting",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    })
                                },
                                error: function() {
                                    swal.fire({
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    })
                                }

                            })
                        }))
                    })),
                    function(t) {
                        var e, n = document.getElementById("kt_signin_change_email");
                        e = FormValidation.formValidation(n, {
                                fields: {
                                    body_header: {
                                        validators: {
                                            notEmpty: {
                                                message: "Tidak Boleh Kosong"
                                            },
                                        }
                                    },
                                },
                                plugins: {
                                    trigger: new FormValidation.plugins.Trigger,
                                    bootstrap: new FormValidation.plugins.Bootstrap5({
                                        rowSelector: ".fv-row"
                                    })
                                }
                            }),
                            n.querySelector("#kt_signin_submit").addEventListener("click", (function(t) {
                                t.preventDefault(), console.log("click"), e.validate().then((function(t) {
                                    var value = document.querySelector(
                                        'input[name=body_header]').value
                                    $.ajax({
                                        url: ajaxUrlAdmin + 'setting',
                                        type: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                            key: 'body_header',
                                            value: value
                                        },
                                        success: function(e) {
                                            $('#dendaKerusakan').html('Rp. ' +
                                                value)
                                            swal.fire({
                                                text: "Denda Kerusakan",
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                                }
                                            })
                                        },
                                        error: function() {
                                            swal.fire({
                                                text: "Sorry, looks like there are some errors detected, please try again.",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                                }
                                            })
                                        }
                                    });

                                }))
                            }))

                    }()
            }
        };
        KTUtil.onDOMContentLoaded((function() {
            KTAccountSettingsSigninMethods.init()
        }));
    </script>
@endpush
