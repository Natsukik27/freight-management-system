@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #D9D9D9; min-height: 100vh;">
    <!-- Header -->
    <div class="py-4 px-3">
        <div class="d-flex justify-content-between align-items-start flex-column flex-md-row">
            <div>
                <h2 class="fw-bold m-0">Asset</h2>
                <div class="d-flex align-items-center gap-2 mt-2">
                    <a href="#" class="btn btn-success btn-sm">
                        <i class="fas fa-print me-1"></i> Print
                    </a>
                    <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="checkbox" id="printAll">
                        <label class="form-check-label" for="printAll">Print All</label>
                    </div>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="{{ route('asset.add') }}" class="btn btn-sm" style="background-color: #DB3954; color: white;">
                    <i class="fas fa-plus me-1"></i> Add
                </a>
            </div>
        </div>
    </div>

    <!-- Table Card -->
    <div class="card mx-3 shadow-sm">
        <div class="card-body">
            <h5 class="card-title fw-bold">Data</h5>
            <div class="table-responsive">
                <div class="d-flex justify-content-between mb-2">
                    <select class="form-select form-select-sm w-auto">
                        <option>2</option>
                        <option selected>10</option>
                        <option>25</option>
                    </select>
                    <input type="search" class="form-control form-control-sm w-auto" placeholder="Search..">
                </div>
                <table class="table table-bordered table-sm align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Part Number</th>
                            <th>Asset</th>
                            <th>Remark</th>
                            <th>Asset Group</th>
                            <th>Unit</th>
                            <th>Buffer Minimum</th>
                            <th>Buffer Maximum</th>
                            <th>Buffer Qty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([1, 2, 3] as $id)
                        <tr>
                            <td><input type="checkbox" class="item-checkbox"></td>
                            <td>PN-00{{ $id }}</td>
                            <td>{{ ['Forklift', 'Komputer', 'Printer'][$id-1] }}</td>
                            <td>{{ ['Unit utama gudang', 'PC admin logistik', 'Untuk cetak dokumen PO'][$id-1] }}</td>
                            <td>{{ ['Heavy Equipment', 'IT Equipment', 'Office Equipment'][$id-1] }}</td>
                            <td>Unit</td>
                            <td>{{ $id }}</td>
                            <td>{{ $id * 5 }}</td>
                            <td>{{ $id + 2 }}</td>
                            <td>
                                <a href="{{ route('asset.show', $id) }}" class="text-dark me-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('asset.edit', $id) }}" class="text-primary me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('asset.delete', $id) }}" class="text-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between mt-2">
                    <span class="text-muted small">Page: 1 of 1</span>
                    <nav>
                        <ul class="pagination pagination-sm m-0">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>   
<script>
    // Saat master checkbox diklik
    document.getElementById('select-all').addEventListener('click', function() {
        let isChecked = this.checked;
        document.querySelectorAll('.item-checkbox').forEach(cb => {
            cb.checked = isChecked;
        });
    });
</script>
@endsection