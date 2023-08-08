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
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_sigma-1" role="tab">Benefit List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_dozzy-1" role="tab">Quotes</a>
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
                            <div class="fw-bold text-gray-600 fs-5 mb-0">30 business illustrations in 7 formats Figma, Sketch, Adobe Xd, Ai, PNG, JPG, SVG. Bold and colorful addition to use on your project.</div>
                            <div class="mb-5">
                                <a href="https://keenthemes.com/products/sigma-pro" class="btn btn-flex btn-link btn-color-primary">Learn more
                                <span class="svg-icon ms-2 svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="row g-10">
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/1.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/1.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/2.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/2.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/3.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/3.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/4.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/4.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/5.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/5.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/6.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/6.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/7.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/7.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/8.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/8.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/9.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/9.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/10.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/10.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/11.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/11.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/12.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/12.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/13.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/13.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/14.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/14.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/15.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/15.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/16.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/16.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/17.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/17.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/18.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/18.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/19.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/19.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/20.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/20.png</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_illustration_dozzy-1">
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

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
@push('js')
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
