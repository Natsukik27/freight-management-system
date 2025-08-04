@extends('layouts.app')

@section('content')

{{-- Alert Notifikasi --}}
@if(request()->has('updated'))
<div id="update-alert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow" role="alert" style="z-index: 1055; min-width: 300px;">
    <strong>Success!</strong> Asset Successfully Updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container-fluid" style="background-color: #D9D9D9; min-height: 100vh; padding-top: 30px; padding-bottom: 30px;">
    <div class="container">

        <div class="card shadow-sm" style="border-radius: 10px; border: none;">
            <div class="card-body" style="padding: 25px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Edit Asset</h3>
                    <div>
                        <a href="{{ route('asset.index') }}" class="btn btn-outline-secondary me-2">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                        <button id="btnUpdate" type="button" class="btn text-white" style="background-color: #DB3954;">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Save
                        </button>
                    </div>
                </div>

                <form id="editAssetForm" class="needs-validation" novalidate>
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6 pe-4">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Part Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="part_number" value="PN-001" required>
                                <div class="invalid-feedback">Please provide a part number.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Asset <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="asset" value="Forklift" required>
                                <div class="invalid-feedback">Please provide an asset name.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Remark <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-sm" name="remark" rows="2" required>Unit utama gudang</textarea>
                                <div class="invalid-feedback">Please provide a remark.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Asset Group <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm" name="asset_group" required>
                                    <option value="" disabled>-- Select Group --</option>
                                    <option value="A" selected>Asset Group A</option>
                                    <option value="B">Asset Group B</option>
                                </select>
                                <div class="invalid-feedback">Please select an asset group.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Unit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="unit" value="Unit" required>
                                <div class="invalid-feedback">Please provide a unit.</div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6 ps-4 border-start">
                            {{-- <div class="mb-4">
                                <label class="form-label fw-semibold">Unit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="unit" value="Unit" required>
                                <div class="invalid-feedback">Please provide a unit.</div>
                            </div> --}}

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Upload Image</label>
                                <div class="border rounded p-3 text-center bg-light mb-2">
                                    <i class="fas fa-cloud-upload-alt text-muted mb-2" style="font-size: 2rem;"></i>
                                    <p class="small text-muted mb-2">Drag & drop files here or</p>
                                    <input type="file" id="fileInput" name="image" class="d-none">
                                    <label for="fileInput" class="btn btn-sm btn-outline-secondary mb-2" style="cursor: pointer;">
                                        <i class="fas fa-folder-open me-1"></i> Choose File
                                    </label>
                                    <p class="small text-muted">Supported formats: JPG, PNG</p>
                                </div>
                                <button type="button" class="btn btn-sm text-white w-100" style="background-color: #DB3954;">
                                    <i class="fas fa-upload me-1"></i> Upload
                                </button>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Minimum <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm" name="buffer_min" value="1" required>
                                <div class="invalid-feedback">Please provide a minimum buffer.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Maximum <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm" name="buffer_max" value="5" required>
                                <div class="invalid-feedback">Please provide a maximum buffer.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Qty</label>
                                <input type="number" class="form-control form-control-sm" name="buffer_qty" value="3">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<style>
    :root {
        --background: #D9D9D9;
        --dark: #333333;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.5;
        color: var(--dark);
        background-color: var(--background);
    }

    .form-label {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }

    .invalid-feedback {
        font-size: 0.75rem;
    }
</style>

<script>
    // Validasi dan redirect manual
    document.getElementById('btnUpdate').addEventListener('click', function () {
        const form = document.getElementById('editAssetForm');
        if (form.checkValidity()) {
            const queryParams = new URLSearchParams({ updated: 1 }).toString();
            window.location.href = `{{ route('asset.index') }}?${queryParams}`;
        } else {
            form.classList.add('was-validated');
        }
    });
</script>
@endsection
