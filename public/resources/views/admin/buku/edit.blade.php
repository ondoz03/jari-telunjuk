<div class="modal fade bd-example-modal-lg" id="kt_modal_edit_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <form class="form" action="{{ route('admin.buku.store') }}" id="form-edit" enctype="multipart/form-data"
                method="post">
                {{ method_field('PUT') }}
                @csrf
                <input type="hidden" name="uuid" id="uuid" value="">
                <div class="modal-header" id="kt_modal_edit_customer_header">
                    <h2 class="fw-bolder">Edit Buku</h2>
                    <div id="kt_modal_edit_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                        onclick="this.form.reset();" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
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
                            <label class="required fs-6 fw-bold mb-2">Judul</label>
                            <input required type="text" class="form-control form-control-solid" id="judul"
                                name="judul" placeholder="Judul" />
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-bold mb-2">Penulis</label>
                                    <input required type="text" class="form-control form-control-solid"
                                        id="penulis" name="penulis" placeholder="Penulis" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Kategori</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Kategori"></i>
                                    </label>
                                    <select aria-label="Select a Kategori" data-control="select2"
                                        data-placeholder="Pilih Kategori" data-dropdown-parent="#kt_modal_edit_customer"
                                        class="form-select form-select-solid" id="kategori" name="kategori">
                                        <option value=""></option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-bold mb-2">Tanggal Rilis</label>
                                    <input required type="date" class="form-control form-control-solid"
                                        id="tgl_rilis" name="tgl_rilis" placeholder="Tanggal Rilis" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-bold mb-2">Bahasa</label>
                                    <input required type="input" class="form-control form-control-solid"
                                        id="bahasa" name="bahasa" placeholder="Bahasa" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-bold mb-2">Negara</label>
                                    <input required type="input" class="form-control form-control-solid"
                                        id="negara" name="negara" placeholder="Negara" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-bold mb-2">Jumlah Halaman</label>
                                    <input required type="number" class="form-control form-control-solid"
                                        id="jumlah_halaman" name="jumlah_halaman" placeholder="Jumlah Halaman" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-bold mb-2">Jumlah Buku</label>
                                    <input required type="number" class="form-control form-control-solid"
                                        id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah Buku" />
                                </div>
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">Penerbit</label>
                            <input required type="text" class="form-control form-control-solid" id="penerbit"
                                name="penerbit" placeholder="Penerbit" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class=" fs-6 fw-bold mb-2">Description</label>
                            <textarea cols="30" rows="10" class="form-control form-control-solid" id="description" name="description"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="mb-7 fv-row text-center">
                            <label class="fs-6 fw-bold mb-2">Cover Buku</label>
                        </div>
                        <div class=" mb-7 fv-row text-center">
                            <div class="image-input image-input-empty image" data-kt-image-input="true"
                                style="">
                                <div class="image-input-wrapper w-125px h-175px"></div>

                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <input type="file" id="image" name="image"
                                        accept=".png, .jpg, .jpeg" />

                                </label>

                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>

                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        onclick="this.form.reset()">Close</button>
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
