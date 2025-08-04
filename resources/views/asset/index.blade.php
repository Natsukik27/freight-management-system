@extends('layouts.app')


@section('content')

<div class="dashboard-container">
    
    <!-- Header -->
<div class="py-4 px-3">
    <h2 class="fw-bold m-0">Asset</h2>

    <div class="d-flex align-items-center gap-2 mt-2">
        <a href="#" id="printBtn" class="btn btn-success btn-sm disabled">
    <i class="fas fa-print me-1"></i> Print </a>
        <div class="form-check form-check-inline mb-0">
            <input class="form-check-input" type="checkbox" id="printAll">
            <label class="form-check-label" for="printAll">Print All</label>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-3">
        <a href="{{ route('asset.add') }}" class="btn btn-sm" style="background-color: #DB3954; color: white;">
            <i class="fas fa-plus me-1"></i> Add
        </a>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4 rounded">
      <div class="modal-body">
        <div class="mb-3">
          <i class="fas fa-exclamation-circle fa-3x text-info"></i>
        </div>
        <h4 class="fw-bold mb-2">Delete Asset</h4>
        <p class="mb-4">Are you sure you want to delete this asset?</p>
        <div class="d-flex justify-content-center gap-2">
          <button id="btnDeleteConfirm" class="btn px-4" style="background-color: #7367f0; color: white;">Yes</button>
          <button class="btn px-4" style="background-color: #db3954; color: white;" data-bs-dismiss="modal">No</button>
        </div>
      </div>
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
                            <th></th>
                            {{--<th><input type="checkbox" id="select-all"></th>--}}
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
                                {{-- <a href="{{ route('asset.delete', $id) }}" class="text-danger">
                                    <i class="fas fa-trash"></i>
                                </a> --}}

                                <!-- Tombol Delete -->
                                <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
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

    
</style>

@if(request()->has('success'))
    <div id="success-alert" class="alert alert-success shadow position-fixed"
         style="top: 53px; right: 0px; z-index: 1050; min-width: 500px;
                background-color: #d1e7dd; border: 1px solid #badbcc; color: #0f5132;
                padding: 10px 16px; border-radius: 8px;">
        <button type="button" class="btn-close" aria-label="Close"
                style="position: absolute; top: 10px; right: 10px;" onclick="closeAlert()"></button>
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check me-2"></i>
            <div>Asset Successfully Added</div>
        </div>
    </div>
    

    <script>
        // Auto-hide alert after 1.5s
        setTimeout(() => {
            const alert = document.getElementById('success-alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
            }
        }, 1500);
    </script>
@endif

@if(request()->has('updated'))
    <div id="update-alert" class="alert alert-success shadow position-fixed"
         style="top: 53px; right: 0px; z-index: 1050; min-width: 500px;
                background-color: #d1e7dd; border: 1px solid #badbcc; color: #0f5132;
                padding: 10px 16px; border-radius: 8px;">
        <button type="button" class="btn-close" aria-label="Close"
                style="position: absolute; top: 10px; right: 10px;" onclick="closeAlert()"></button>
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check me-2"></i>
            <div>Asset Successfully Updated</div>
        </div>
    </div>

    <script>
        // Auto-hide alert after 1.5s
        setTimeout(() => {
            const alert = document.getElementById('update-alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
            }
        }, 1500);

        // Manual close handler
        function closeAlert() {
            const alert = document.getElementById('update-alert');
            if (alert) {
                alert.remove();
            }
        }
    </script>
@endif


<script>

    // Ceklis semua checkbox dari header tabel
   // document.getElementById('select-all').addEventListener('click', function () {
    //    let isChecked = this.checked;
    //    document.querySelectorAll('.item-checkbox').forEach(cb => cb.checked = isChecked);
    //    document.getElementById('printAll').checked = isChecked;
    //});

    // Ceklis semua dari checkbox Print All di atas tombol
    //document.getElementById('printAll').addEventListener('click', function () {
    //    let isChecked = this.checked;
    //    document.querySelectorAll('.item-checkbox').forEach(cb => cb.checked = isChecked);
    //    document.getElementById('select-all').checked = isChecked;
    //});

    // Ceklis semua dari checkbox Print All di atas tombol
    document.getElementById('printAll').addEventListener('click', function () {
        const isChecked = this.checked;
        document.querySelectorAll('.item-checkbox').forEach(cb => cb.checked = isChecked);
    });

     const printAll = document.getElementById('printAll');
    const checkboxes = document.querySelectorAll('.item-checkbox');
    const printBtn = document.getElementById('printBtn');

    function updatePrintButton() {
        const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
        printBtn.classList.toggle('disabled', !anyChecked);
    }

    printAll.addEventListener('click', function () {
        const isChecked = this.checked;
        checkboxes.forEach(cb => cb.checked = isChecked);
        updatePrintButton();
    });

    checkboxes.forEach(cb => cb.addEventListener('change', updatePrintButton));

    // Initial check
    updatePrintButton();


    // Simulasi delete berhasil dan redirect ke halaman index (halaman ini sendiri)
    document.getElementById("btnDeleteConfirm").addEventListener("click", function () {
        // Simpan status ke localStorage
        localStorage.setItem("deleteSuccess", "true");
        // Reload halaman
        window.location.reload();
    });

    // Tampilkan notifikasi kalau delete berhasil
    window.addEventListener("DOMContentLoaded", function () {
        if (localStorage.getItem("deleteSuccess") === "true") {
            const alertBox = document.createElement("div");
            alertBox.className = "alert alert-success shadow position-fixed";
            alertBox.style = "top: 53px; right: 0px; z-index: 1050; min-width: 500px; background-color: #d1e7dd; border: 1px solid #badbcc; color: #0f5132; padding: 10px 16px; border-radius: 8px;";
            alertBox.innerHTML = `
                <button type="button" class="btn-close" aria-label="Close" onclick="this.parentElement.remove()" style="position: absolute; top: 10px; right: 10px;"></button>
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-circle-check me-2"></i>
                    <div>Asset Successfully Deleted</div>
                </div>
            `;
            document.body.appendChild(alertBox);
            setTimeout(() => {
                alertBox.remove();
            }, 2000);
            localStorage.removeItem("deleteSuccess");
        }
    });
</script>
@endsection
