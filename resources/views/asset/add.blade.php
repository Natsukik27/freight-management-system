@extends('layouts.app')

@section('content')

{{-- @if(request()->has('success'))
    <div id="success-alert" class="alert alert-success shadow position-fixed"
         style="top: 45px; right: 20px; z-index: 1050; min-width: 495px;
                background-color: #d1e7dd; border: 1px solid #badbcc; color: #0f5132;
                padding: 10px 16px; border-radius: 8px;">
        <button type="button" class="btn-close" aria-label="Close"
                style="position: absolute; top: 10px; right: 10px;" onclick="closeAlert()"></button>
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check me-2"></i>
            <div>Asset Successfully Added</div>
        </div>
    </div>
@endif --}}

<div class="container-fluid" style="background-color: #D9D9D9; min-height: 100vh; padding-top: 30px; padding-bottom: 30px;">
    <div class="container">

        {{-- Success Alert (dari session flash) --}}
        {{-- Notifikasi --}}
    @if(request()->has('success'))
    <div id="success-alert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow" role="alert" style="z-index: 1055; min-width: 300px;">
        <strong>Success!</strong> Asset Successfully Added.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div id="success-alert" class="alert alert-success shadow position-fixed d-none"
     style="top: 45px; right: 20px; z-index: 1050; min-width: 495px;
            background-color: #d1e7dd; border: 1px solid #badbcc; color: #0f5132;
            padding: 10px 16px; border-radius: 8px;">
    <button type="button" class="btn-close" aria-label="Close"
            style="position: absolute; top: 10px; right: 10px;" onclick="closeAlert()"></button>
    <div class="d-flex align-items-center">
        <i class="fa-solid fa-circle-check me-2"></i>
        <div>Asset Successfully Added</div>
    </div>
</div>

        <div class="card shadow-sm" style="border-radius: 10px; border: none;">
            <div class="card-body" style="padding: 25px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Add Asset</h3>
                    <div>
                        <a href="{{ route('asset.index') }}" class="btn btn-outline-secondary me-2">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                        <button id="btnSave" type="button" class="btn text-white" style="background-color: #DB3954;">
    <i class="fa-solid fa-floppy-disk me-1"></i> Save
</button>

                    </div>
                </div>

                <form id="assetForm" method="POST" action="{{ route('asset.index') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6 pe-4">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Part Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="part_number" required>
                                <div class="invalid-feedback">Please provide a part number.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Asset <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="asset" required>
                                <div class="invalid-feedback">Please provide an asset name.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Remark <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-sm" name="remark" rows="2" required></textarea>
                                <div class="invalid-feedback">Please provide a remark.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Asset Group <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm" name="asset_group" required>
                                    <option value="" disabled selected>-- Select Group --</option>
                                    <option value="A">Asset Group A</option>
                                    <option value="B">Asset Group B</option>
                                </select>
                                <div class="invalid-feedback">Please select an asset group.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Unit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="unit" required>
                                <div class="invalid-feedback">Please provide a unit.</div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6 ps-4 border-start">
                            {{-- <div class="mb-4">
                                <label class="form-label fw-semibold">Unit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="unit" required>
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
                                <input type="number" class="form-control form-control-sm" name="buffer_min" required>
                                <div class="invalid-feedback">Please provide a minimum buffer.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Maximum <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm" name="buffer_max" required>
                                <div class="invalid-feedback">Please provide a maximum buffer.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Qty</label>
                                <input type="number" class="form-control form-control-sm" name="buffer_qty">
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
    // Bootstrap validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            const form = document.getElementById('assetForm');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // Simulasi redirect ke index + flash message
                    event.preventDefault();
                    window.location.href = "{{ route('asset.index') }}?success=1";
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();

    function showSuccessAlert() {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.classList.remove('d-none');
            alert.classList.add('d-flex');
            setTimeout(() => {
                closeAlert();
            }, 1000); // Hilang otomatis setelah 1 detik
        }
    }

    function closeAlert() {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.classList.remove('d-flex');
            alert.classList.add('d-none');
        }
    }

    // Pasang ke tombol Save
     // Validasi dan redirect manual
    document.getElementById('btnSave').addEventListener('click', function () {
        const form = document.getElementById('assetForm');
        if (form.checkValidity()) {
            const queryParams = new URLSearchParams({ success: 1 }).toString();
            window.location.href = `{{ route('asset.index') }}?${queryParams}`;
        } else {
            form.classList.add('was-validated');
        }
    });
</script>
@endsection
