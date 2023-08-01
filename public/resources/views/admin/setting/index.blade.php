@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card card-docs mb-2">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Tabs-->
                    <ul class="nav nav-stretch nav-line-tabs fw-bolder fs-4 border-bottom-2 border-transparent flex-nowrap mb-8" role="tablist" id="kt_illustration_tabs">
                        <!--begin::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2 active" data-bs-toggle="tab" href="#kt_illustration_sketchy-1" role="tab">Header Content</a>
                        </li>
                        <!--end::Tab item-->
                        <!--begin::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_sigma-1" role="tab">Benefit List</a>
                        </li>
                        <!--end::Tab item-->
                        <!--begin::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_dozzy-1" role="tab">Quotes</a>
                        </li>
                        <!--end::Tab item-->
                        <!--begin::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary border-bottom-2" data-bs-toggle="tab" href="#kt_illustration_unitedpalms-1" role="tab">Footer</a>
                        </li>
                        <!--end::Tab item-->
                    </ul>
                    <!--end::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_illustration_sketchy-1">
                            <!--begin::Description-->
                            <div class="fw-bold text-gray-600 fs-5 mb-0">30 Hand Drawn Sketch illustrations in 7 formats Figma, Sketch, Adobe Xd, Ai, PNG, JPG, SVG.</div>
                            <!--end::Description-->
                            <!--begin::More-->
                            <div id="kt_account_settings_signin_method" class="collapse show">
                                <div class="mt-6 border-top">
                                    <div class="d-flex flex-wrap align-items-center mt-6">
                                        <div id="kt_denda_harian" class="">
                                            <div class="fs-6 fw-bolder mb-1">Harian <span class="text-gray-500">( Denda ini akan
                                                    berlaku apa bila peminjam melewati batas yang telah di tentukan )</span></div>
                                            <div class="fw-bold text-gray-600" id="dendaHarian">Rp.
                                                {{ GeneralHelper::settingPerpustakan('denda_harian') }}</div>
                                        </div>
                                        <div id="kt_denda_harian_edit" class="flex-row-fluid d-none">
                                            <form id="kt_denda_harian_change" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                novalidate="novalidate">
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                                            <label for="denda_harian" class="form-label fs-6 fw-bolder mb-3">Denda
                                                                harian</label>
                                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                                id="denda_harian" placeholder="Jumlah Denda Harian" name="denda_harian"
                                                                value="{{ GeneralHelper::settingPerpustakan('denda_harian') }}"
                                                                min="0">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <button id="kt_denda_harian_submit" type="button"
                                                        class="btn btn-primary me-2 px-6">Update</button>
                                                    <button id="kt_denda_harian_cancel" type="button"
                                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                </div>
                                                <div></div>
                                            </form>
                                        </div>
                                        <div id="kt_denda_harian_button" class="ms-auto">
                                            <button class="btn btn-light btn-active-light-primary">Change Denda Harian</button>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-6"></div>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div id="kt_denda_kerusakan" class="">
                                            <div class="fs-6 fw-bolder mb-1">Kerusakan <span class="text-gray-500"> (Denda Ini Termasuk
                                                    dengan Kehilangan apa bila terjadi kehilangan saat meminjam buku ) </span></div>
                                            <div class="fw-bold text-gray-600" id="dendaKerusakan">Rp.
                                                {{ GeneralHelper::settingPerpustakan('denda_kerusakan') }}</div>
                                        </div>
                                        <div id="kt_denda_kerusakan_edit" class="flex-row-fluid d-none">
                                            <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                novalidate="novalidate">
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                                            <label for="denda_kerusakan" class="form-label fs-6 fw-bolder mb-3">Denda
                                                                Kerusakan</label>
                                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                                id="denda_kerusakan" placeholder="Jumlah Denda Kerusakan"
                                                                name="denda_kerusakan"
                                                                value="{{ GeneralHelper::settingPerpustakan('denda_kerusakan') }}"
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
                                        <div id="kt_denda_kerusakan_button" class="ms-auto">
                                            <button class="btn btn-light btn-active-light-primary">Change Denda Kerusakan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Row-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_illustration_sigma-1">
                            <!--begin::Description-->
                            <div class="fw-bold text-gray-600 fs-5 mb-0">30 business illustrations in 7 formats Figma, Sketch, Adobe Xd, Ai, PNG, JPG, SVG. Bold and colorful addition to use on your project.</div>
                            <!--end::Description-->
                            <!--begin::More-->
                            <div class="mb-5">
                                <a href="https://keenthemes.com/products/sigma-pro" class="btn btn-flex btn-link btn-color-primary">Learn more
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon ms-2 svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            </div>
                            <!--end::More-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/1.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/1.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/2.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/2.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/3.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/3.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/4.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/4.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/5.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/5.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/6.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/6.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/7.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/7.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/8.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/8.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/9.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/9.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/10.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/10.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/11.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/11.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/12.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/12.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/13.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/13.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/14.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/14.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/15.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/15.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/16.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/16.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/17.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/17.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/18.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/18.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/19.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/19.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/sigma-1/20.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/sigma-1/20.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_illustration_dozzy-1">
                            <!--begin::Description-->
                            <div class="fw-bold text-gray-600 fs-5 mb-0">Tool in design projects that will catch your audience’s eye. Package includes 20 illustrations in SVG, PNG and JPG to enhance your UI.</div>
                            <!--end::Description-->
                            <!--begin::More-->
                            <div class="mb-5">
                                <a href="https://keenthemes.com/products/doozy-pro" class="btn btn-flex btn-link btn-color-primary">Learn more
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon ms-2 svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            </div>
                            <!--end::More-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/1.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/1.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/2.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/2.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/3.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/3.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/4.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/4.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/5.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/5.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/6.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/6.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/7.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/7.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/8.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/8.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/9.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/9.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/10.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/10.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/11.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/11.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/12.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/12.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/13.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/13.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/14.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/14.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/15.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/15.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/16.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/16.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/17.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/17.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/18.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/18.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/19.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/19.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/dozzy-1/20.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/dozzy-1/20.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_illustration_unitedpalms-1">
                            <!--begin::Description-->
                            <div class="fw-bold text-gray-600 fs-5 mb-0">Graphics that support ethnic diversity. 30 vector illustrations in Figma, Sketch, Adobe XD, Ai, PNG, JPG, SVG add a contemporary twist to UI!</div>
                            <!--end::Description-->
                            <!--begin::More-->
                            <div class="mb-5">
                                <a href="https://keenthemes.com/products/unitedpalms-pro" class="btn btn-flex btn-link btn-color-primary">Learn more
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon ms-2 svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            </div>
                            <!--end::More-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/1.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/1.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/2.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/2.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/3.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/3.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/4.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/4.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/5.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/5.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/6.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/6.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/7.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/7.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/8.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/8.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/9.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/9.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/10.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/10.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/11.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/11.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/12.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/12.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/13.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/13.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/14.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/14.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/15.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/15.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/16.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/16.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/17.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/17.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/18.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/18.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/19.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/19.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::Thumbnail-->
                                    <div class="card overlay border">
                                        <div class="card-body p-0">
                                            <div class="overlay-wrapper h-300px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/illustrations/unitedpalms-1/20.png')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-10 align-items-end pb-3">
                                                <!--begin::Path-->
                                                <code class="py-2 px-4">assets/media/illustrations/unitedpalms-1/20.png</code>
                                                <!--end::Path-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Thumbnail-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Card Body-->
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
                    var t = document.getElementById("kt_denda_harian"),
                        e = document.getElementById("kt_denda_harian_edit"),
                        i = document.getElementById("kt_denda_harian_button"),
                        s = document.getElementById("kt_denda_harian_cancel"),

                        a = document.getElementById("kt_denda_kerusakan"),
                        b = document.getElementById("kt_denda_kerusakan_edit"),
                        c = document.getElementById("kt_denda_kerusakan_button"),
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
                }(), e = document.getElementById("kt_denda_harian_change"), t = FormValidation.formValidation(
                        e, {
                            fields: {
                                denda_harian: {
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
                        }), e.querySelector("#kt_denda_harian_submit").addEventListener("click", (function(n) {
                        n.preventDefault(), console.log("click"), t.validate().then((function(n) {
                            var value = document.querySelector('input[name=denda_harian]').value
                            $.ajax({
                                url: ajaxUrlAdmin + 'setting',
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    key: 'denda_harian',
                                    value: value
                                },
                                success: function(e) {
                                    $('#dendaHarian').html('Rp. ' + value)
                                    swal.fire({
                                        text: "Denda Harian",
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
                                    denda_kerusakan: {
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
                                        'input[name=denda_kerusakan]').value
                                    $.ajax({
                                        url: ajaxUrlAdmin + 'setting',
                                        type: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                            key: 'denda_kerusakan',
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
