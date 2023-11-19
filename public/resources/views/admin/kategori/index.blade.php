@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <form method="get" action="{{ route('admin.kategori.search') }}" class="w-100 position-relative me-3"
                            autocomplete="off">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-customer-table-filter="search" name="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Kategori" />
                            </div>
                        </form>
                    </div>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_customer">Add Kategori</button>
                        </div>
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">Delete Selected</button>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-15px">No</th>
                                <th class="min-w-125px">Nama Kategori</th>
                                <th class="min-w-225px">Deskripsi</th>
                                <th class="min-w-125px">Total Buku</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            @forelse ($kategori as $item)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <a href="#"
                                            class="text-gray-600 text-hover-primary mb-1">{{ $item->name }}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$item->description}}</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                           class="text-gray-600 text-hover-primary mb-1">{{ $item->buku_count }}</a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 faq" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_faq"
                                                    data-uuid={{ $item->uuid }}>Add FAQ</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 edit" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit_customer"
                                                    data-uuid={{ $item->uuid }}>Edit</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 delete" data-bs-toggle="modal"
                                                    data-bs-target="#confirmModal" data-uuid={{ $item->uuid }}>Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <div class="card-body p-0">
                                    <div class="card-px text-center py-20 my-10">
                                        <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                                        <p class="text-gray-400 fs-4 fw-bold mb-10">There are no customers added yet.
                                            <br />Kickstart your CRM by adding a your first customer
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_add_customer">Add Customer</a>
                                    </div>
                                    <div class="text-center px-4">
                                        <img class="mw-100 mh-300px" alt=""
                                            src="assets/media/illustrations/sigma-1/2.png" />
                                    </div>
                                </div>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $kategori->withQueryString()->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>

            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                        <form class="form" action="{{ route('admin.kategori.store') }}" id="kt_modal_add_customer_form"
                            method="post">
                            @csrf
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <h2 class="fw-bolder">Add Kategori</h2>
                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-bs-dismiss="modal" aria-label="Close">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2"
                                                rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-body py-10 px-lg-17">
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                    data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Name</label>

                                        {{-- @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror @error('name') is-invalid @enderror --}}

                                        <input type="text" class="form-control form-control-solid " placeholder=""
                                            name="name" placeholder="Name Kategori" required />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2" for="pesan">Description </label>
                                        <textarea class="form-control form-control-solid" id="pesan" name="description" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer flex-center">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="kt_modal_edit_customer" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                        <form class="form form-edit" action="#" id="form-edit" method="post">
                            {{ method_field('PUT') }}
                            @csrf
                            <input type="hidden" name="uuid" class="uuid" value="">
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <h2 class="fw-bolder">Edit Kategori</h2>
                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-bs-dismiss="modal" aria-label="Close">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2"
                                                rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-body py-10 px-lg-17">
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                    data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="name" id="name" placeholder="Name Kategori" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2" for="description">Description </label>
                                        <textarea class="form-control form-control-solid" id="description" name="description" rows="4" required></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer flex-center">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
                                            fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary font-weight-bold" id="ok">Ok</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="kt_modal_faq" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">FAQ Kategori</h5>
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                        height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                        fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2"
                                        rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form class="form form-faq" action="#" id="form-edit" method="post">
                            @csrf
                            <input type="hidden" name="uuid" class="uuid" value="">

                            <div class="form-group mb-5" id="inputContainer">
                            </div>

                            <div class="form-group mb-5">
                                <div class="input-set"  data-key="">
                                    <label for="title1" class="mt-4" >Faq Title :</label>
                                    <input type="text" class="form-control" name="title[]" placeholder="Enter title" value="">

                                    <label class="pt-5" for="description1">Faq Description :</label>
                                    <textarea class="form-control" name="description[]" placeholder="Enter description"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="type" value="faq">
                            <button type="button" class="btn btn-success" id="addInput">Add Input</button>
                            <div class="modal-footer flex-center">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
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
    $(document).ready(function() {
           let counter = 1;

        $('#addInput').on('click', function() {
           counter++;

           let newInputHtml =
               `<div class="input-set form-group mt-5">
                   <label for="title">Title :</label>
                   <input type="text" class="form-control" name="title[]" placeholder="Enter title">

                   <label  class="mt-3" for="description">Description :</label>
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
        $(document).on('click', '.edit', function() {
            id = $(this).attr('data-uuid');
            $('#form-edit').attr('action', ajaxUrlAdmin + 'kategori/' + id);
            $.ajax({
                url: ajaxUrlAdmin + 'kategori/' + id + '/edit',
                dataType: "JSON",
                type: "GET",
                success: function(result) {
                    $("#uuid").val(result.uuid);
                    $('#name').val(result.name)
                    $('#description').val(result.description)
                },
            });
        });

        $(document).on('click', '.faq', function() {
            id = $(this).attr('data-uuid');
            $('.form-faq').attr('action', ajaxUrlAdmin + 'kategori/faq/' + id);
            $.ajax({
                url: ajaxUrlAdmin + 'kategori/' + id + '/edit',
                dataType: "JSON",
                type: "GET",
                success: function(result) {
                    let counter = 1;

                    array = JSON.parse(result.faq);


                    array.forEach(function(q) {
                        counter++;

                        let newInputHtml =
                        `<div class="input-set form-group mt-5">
                            <label for="title">Title :</label>
                            <input type="text" class="form-control" name="title[]" placeholder="Enter title" value="`+q.title+`">

                            <label  class="mt-3" for="description">Description :</label>
                            <textarea class="form-control" name="description[]" placeholder="Enter description"> `+q.description+`</textarea>

                            <button type="button" class="btn btn-danger remove-input mt-3">Remove</button>
                        </div>`;

                        $('#inputContainer').append(newInputHtml);
                    });

                },
            });
            // $.ajax({
            //     url: ajaxUrlAdmin + 'kategori/faq/' + id ,
            //     dataType: "JSON",
            //     type: "GET",
            //     success: function(result) {
            //         $("#uuid").val(result.uuid);
            //         $('#name').val(result.name)
            //         $('#description').val(result.description)
            //     },
            // });
        });

        $(document).on('click', '.delete', function() {
            $('#ok').text('Ok');
            id = $(this).attr('data-uuid');
            $('#uuid-delete').val(id);
            document.getElementById("cancel").style.display = "";
        });

        $('#ok').click(function() {
            document.getElementById("cancel").style.display = "none";
            id = $('#uuid-delete').attr('value');
            $.ajax({
                url: ajaxUrlAdmin + 'kategori/' + id,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',

                },
                beforeSend: function() {
                    $('#ok').text('Deleting...');
                },
                success: function(e) {
                    window.location.href = "{{ route('admin.kategori.index') }}";
                }
            })
        });
    </script>
@endpush
