@extends('layouts.app')

@section('content')
<div class="container-fluid p-3" style="background-color: #e0e0e0;">
  <div class="card p-3 mb-4">
    <h4 class="mb-3" style="font-weight: 600; color: #333;">Asset</h4>
    <div class="d-flex align-items-center mb-3 gap-2 flex-wrap">
      <button class="btn btn-danger btn-sm" type="button" title="Save">
        <i class="fas fa-save"></i> Save
      </button>
      <button class="btn btn-success btn-sm" type="button" title="Print">
        <i class="fas fa-print"></i> Print
      </button>
      <div class="form-check ms-3">
        <input class="form-check-input" type="checkbox" value="" id="printAllCheckbox">
        <label class="form-check-label" for="printAllCheckbox">Print All</label>
      </div>
    </div>
    <form>
      <div class="row gy-3">
        <div class="col-12 col-md-4">
          <label for="partNumber" class="form-label small fw-semibold">Part Number (PN) <span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" id="partNumber" name="partNumber" required>
        </div>
        <div class="col-12 col-md-4">
          <label for="unit" class="form-label small fw-semibold">Unit <span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" id="unit" name="unit" required>
        </div>
        <div class="col-12 col-md-4 d-flex align-items-end gap-2">
          <input type="file" class="form-control form-control-sm" id="uploadImage" name="uploadImage" aria-label="Upload Image">
          <button class="btn btn-danger btn-sm" type="button" aria-label="Upload button">Upload</button>
        </div>
        <div class="col-12 col-md-4">
          <label for="asset" class="form-label small fw-semibold">Asset <span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" id="asset" name="asset" required>
        </div>
        <div class="col-12 col-md-2">
          <label for="bufferMinimum" class="form-label small fw-semibold">Buffer Minimum <span class="text-danger">*</span></label>
          <input type="number" class="form-control form-control-sm" id="bufferMinimum" name="bufferMinimum" required>
        </div>
        <div class="col-12 col-md-2">
          <label for="bufferMaximum" class="form-label small fw-semibold">Buffer Maximum <span class="text-danger">*</span></label>
          <input type="number" class="form-control form-control-sm" id="bufferMaximum" name="bufferMaximum" required>
        </div>
        <div class="col-12 col-md-2">
          <label for="bufferQty" class="form-label small fw-semibold">Buffer Qty</label>
          <input type="number" class="form-control form-control-sm" id="bufferQty" name="bufferQty">
        </div>
        <div class="col-12 col-md-4">
          <label for="remark" class="form-label small fw-semibold">Remark <span class="text-danger">*</span></label>
          <input type="text" class="form-control form-control-sm" id="remark" name="remark" required>
        </div>
        <div class="col-12 col-md-4">
          <label for="assetGroup" class="form-label small fw-semibold">Asset Group <span class="text-danger">*</span></label>
          <select class="form-select form-select-sm" id="assetGroup" name="assetGroup" required>
            <option value="" selected disabled>Choose asset group</option>
            <option value="Group1">Group1</option>
            <option value="Group2">Group2</option>
            <option value="Group3">Group3</option>
          </select>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
