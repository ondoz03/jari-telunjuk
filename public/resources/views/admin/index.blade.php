@extends('layouts.admin.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="row g-5 g-xl-8">
                <div class="col-xl-4">
                    <div class="card mb-5 mb-xl-8">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Top Buku Peminjaman</span>
                            </h3>
                        </div>
                        <div class="card-body pt-5">

                        </div>
                    </div>
                </div>
                <div class="col-xl-8 ps-xl-12">
                    <div class="card mb-xl-8">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Total ALL ITEM</span>
                            </h3>

                        </div>
                        <div class="card-body py-3">
                            <div class="tab-content">


                                <div class="row pb-2 pt-2">
                                    <div class="col">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Total
                                            Buku</a>
                                    </div>

                                    <div class="col">
                                        <span class="badge badge-light-success">{{ $totalBook }}</span>
                                    </div>
                                    <div class="col text-end">
                                        <a href="{{ route('admin.buku.index') }}"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                                        fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="separator my-2"></div>

                                <div class="row pb-2 pt-2">
                                    <div class="col">
                                        <a href="{{ route('admin.user.index') }}"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Total
                                            User</a>

                                    </div>
                                    <div class="col">
                                        <span class="badge badge-light-success">{{ $totalUser }}</span>
                                    </div>
                                    <div class="col text-end">
                                        <a href="{{ route('admin.user.index') }}"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                                        fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="separator my-2"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
