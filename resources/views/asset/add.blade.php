@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #D9D9D9; min-height: 100vh; padding-top: 30px; padding-bottom: 30px;">
    <div class="container">
        <div class="card shadow-sm" style="border-radius: 10px; border: none;">
            <div class="card-body" style="padding: 25px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Add Asset</h3>
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary me-2">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                        <button type="submit" form="assetForm" class="btn text-white" style="background-color: #DB3954;">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Save
                        </button>
                    </div>
                </div>

                <form id="assetForm" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6 pe-4">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Part Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">Please provide a part number.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Asset <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">Please provide an asset name.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Remark <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-sm" rows="2" required></textarea>
                                <div class="invalid-feedback">Please provide a remark.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Asset Group <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm" required>
                                    <option value="" disabled selected>-- Select Group --</option>
                                    <option value="1">Asset Group A</option>
                                    <option value="2">Asset Group B</option>
                                </select>
                                <div class="invalid-feedback">Please select an asset group.</div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6 ps-4 border-start">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Unit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">Please provide a unit.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Upload Image</label>
                                <div class="border rounded p-3 text-center bg-light mb-2">
                                    <i class="fas fa-cloud-upload-alt text-muted mb-2" style="font-size: 2rem;"></i>
                                    <p class="small text-muted mb-2">Drag & drop files here or</p>
                                    <input type="file" id="fileInput" class="d-none">
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
                                <input type="number" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">Please provide a minimum buffer.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Maximum <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">Please provide a maximum buffer.</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Buffer Qty</label>
                                <input type="number" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-label {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }
    .btn[style*="#DB3954"]:hover {
        background-color: #c72e47 !important;
    }
    .btn-outline-secondary:hover {
        background-color: #f8f9fa;
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
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();
</script>
@endsection
