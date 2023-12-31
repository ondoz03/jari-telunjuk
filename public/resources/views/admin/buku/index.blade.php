@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card">
                <div class="card-header border-0 py-6">
                    <div class="card-title">
                        <form method="get" action="{{ route('admin.buku.search') }}" class="w-100 position-relative me-3"
                              autocomplete="off">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                              rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black"/>
                                    </svg>
                                </span>
                                <input type="text" data-kt-customer-table-filter="search" name="search"
                                       class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
                            </div>
                        </form>
                        <select id="mySel" class="form-select form-select-md form-select-solid" data-control="select2" data-placeholder="Select an Category">
                            <option></option>
                            @foreach ($kategori as $item)
                                <option value="{{$item->slug}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">Tambah Buku
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                @forelse ($buku as $item)
                    <div class="col-md-6 col-lg-3 col-xs-12 pb-10">
                        <div class="card shadow-sm">

                            <div class="card-body p-0 mb-10">
                                <div class="row px-4 my-6 align-items-center">
                                    <div class="col-8">
                                        <div class=""><b>{{ Str::limit($item->judul, 20) }}</b></div>
                                    </div>
                                    <div class="col-4">
                                        <div class="">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions</a>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                 data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 edit" data-bs-toggle="modal"
                                                       data-bs-target="#kt_modal_edit_customer"
                                                       data-uuid={{ $item->uuid }}>View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 delete" data-bs-toggle="modal"
                                                       data-bs-target="#confirmModal"
                                                       data-uuid={{ $item->uuid }}>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center px-4">
                                    <a class="d-block overlay" data-fslightbox="lightbox-basic" href="{{$item->image}}">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px"
                                             style="background-image:url({{ $item->image}})">

                                        </div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                            <i class="bi bi-eye-fill text-white fs-3x"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span class="text-gray-600 fs-8">Kategori : </span>
                                <a href="#" class="text-gray-600 fs-8">{{ isset($item->kategori->first()->name) ? $item->kategori->pluck('name')->implode(', ') : 'Kosong' }} </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card-body p-0">
                        <div class="card-px text-center py-20 my-10">
                            <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                            <p class="text-gray-400 fs-4 fw-bold mb-10">Data Buku Masih Kosong </p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_add_customer">Tambah Buku</a>
                        </div>
                        <div class="text-center px-4">
                            <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sigma-1/2.png"/>
                        </div>
                    </div>
                @endforelse
                {{ $buku->withQueryString()->links('vendor.pagination.bootstrap-4') }}
            </div>


            @include('admin.buku.create')

            @include('admin.buku.edit')
            <div class="modal fade" id="confirmModal" data-backdrop="static" tabindex="-1" role="dialog"
                 aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                                 data-bs-dismiss="modal" aria-label="Close">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                              height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                              fill="black"/>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                              rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <input type="hidden" name="uuid" id="uuid-delete" value="">
                        <div class="modal-body">
                            Are you sure want to delete this item ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" id="cancel"
                                    data-bs-dismiss="modal">Close
                            </button>
                            <button type="button" class="btn btn-primary font-weight-bold" id="ok">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#kt_modal_edit_customer').on('hidden.bs.modal', function () {
            $('#kt_modal_edit_customer form')[0].reset();
        });

        var id_kategori = [];
        $(document).on('click', '.edit', function () {
            id = $(this).attr('data-uuid');
            $('#form-edit').attr('action', ajaxUrlAdmin + 'buku/' + id);
            $.ajax({
                url: ajaxUrlAdmin + 'buku/' + id + '/edit',
                dataType: "JSON",
                type: "GET",
                success: function (result) {

                    var ids = result.kategori.map(function(item) {
                        return item.id;
                    });

                    $("#judul").val(result.judul);
                    $("#penulis").val(result.penulis);
                    $("#tgl_rilis").val(result.detail_buku.tgl_rilis);
                    $("#bahasa").val(result.detail_buku.bahasa);
                    $("#negara").val(result.detail_buku.negara);
                    $("#jumlah_halaman").val(result.detail_buku.jumlah_halaman);
                    $("#isbn").val(result.isbn);
                    $("#penerbit").val(result.detail_buku.penerbit);
                    $("#description").val(result.detail_buku.description);
                    $(".image").attr("style", 'background-image: url(' + result.image + ')');
                    $('#uuid').val(result.uuid);
                    $('#kategori').val(ids);
                    $('#kategori').trigger('change');
                },
            });
        });

        $(document).on('click', '.delete', function () {
            $('#ok').text('Ok');
            id = $(this).attr('data-uuid');
            $('#uuid-delete').val(id);
            document.getElementById("cancel").style.display = "";
        });

        $('#ok').click(function () {
            document.getElementById("cancel").style.display = "none";
            id = $('#uuid-delete').attr('value');
            $.ajax({
                url: ajaxUrlAdmin + 'buku/' + id,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',

                },
                beforeSend: function () {
                    $('#ok').text('Deleting...');
                },
                success: function (e) {
                    window.location.href = "{{ route('admin.buku.index') }}";
                }
            })
        });

        $('#mySel').change(function () {
            sel = $(this).val();
            window.location.href = "{{route('admin.buku.index')}}" + '?category=' + sel;
        });
    </script>
@endpush
