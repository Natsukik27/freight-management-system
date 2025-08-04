@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #D9D9D9; min-height: 100vh; padding: 20px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Edit Asset</h5>
        <a href="#" class="btn btn-secondary btn-sm">Back</a>
    </div>

    <div class="card p-4 rounded shadow-sm">
        <form>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Asset Code</label>
                    <input type="text" class="form-control" value="AST-001">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Asset Name</label>
                    <input type="text" class="form-control" value="Laptop Lenovo">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Purchase Date</label>
                    <input type="date" class="form-control" value="2024-12-01">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Category</label>
                    <select class="form-select">
                        <option>Choose Category</option>
                        <option selected>Electronics</option>
                        <option>Furniture</option>
                        <option>Vehicle</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Location</label>
                    <input type="text" class="form-control" value="Gudang A">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Condition</label>
                    <select class="form-select">
                        <option>Good</option>
                        <option selected>Minor Damage</option>
                        <option>Broken</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Description</label>
                <textarea class="form-control" rows="3">Asset dipakai untuk tim finance.</textarea>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn text-white me-2" style="background-color: #DB3954;">Update</button>
                <a href="#" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
