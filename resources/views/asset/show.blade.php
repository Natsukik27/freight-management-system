@extends('layouts.app')

@section('content')
<style>
    :root {
        --background: #D9D9D9;
        --dark: #333333;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--background);
        color: var(--dark);
    }
    
    .asset-detail-container {
        background-color: #D9D9D9;
        min-height: 100vh;
        padding: 2rem;
    }

    .asset-detail-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .asset-detail-card {
        background-color: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        padding: 2rem;
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: flex-start; /* Memastikan alignment dimulai dari atas */
    }

    .asset-image-container {
        flex: 0 0 250px; /* Lebih besar dari sebelumnya */
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        background-color: #f8f9fa;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15); /* Shadow lebih tebal */
    }

    .asset-image {
        width: 100%;
        height: 250px; /* Ukuran tetap untuk proporsi persegi */
        object-fit: cover;
        border-radius: 0.25rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        border: 1px solid #eee; /* Border halus */
    }

    .asset-details {
        flex: 1;
        min-width: 300px;
    }

    .detail-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .detail-item {
        margin-bottom: 0.5rem;
    }

    .detail-label {
        font-weight: 600;
        color: #555;
        margin-bottom: 0.25rem;
        font-size: 0.9rem;
    }

    .detail-value {
        font-size: 1rem;
        padding: 0.75rem; /* Sedikit lebih besar */
        background-color: #f8f9fa;
        border-radius: 0.25rem;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.05); /* Shadow internal */
    }

    .btn-edit-asset {
        background-color: #DB3954;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        transition: all 0.2s;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .btn-edit-asset:hover {
        background-color: #c72e47;
        color: white;
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    @media (max-width: 768px) {
        .asset-detail-card {
            flex-direction: column;
            align-items: center;
        }
        
        .asset-image-container {
            width: 100%;
            max-width: 250px;
        }
    }
</style>

<div class="asset-detail-header">
    <h3 class="fw-bold mb-0">Asset Detail</h3>
    <div class="d-flex gap-2">
        <a href="{{ route('asset.index') }}" class="btn btn-secondary me-2">
            <i class="fas fa-times me-1"></i> Cancel
        </a>
        <a href="{{ url('/asset/edit/' . $id) }}" class="btn btn-edit-asset">
            <i class="fas fa-edit me-1"></i> Edit
        </a>
    </div>
</div>


    <div class="asset-detail-card">
        <div class="asset-image-container">
            <img src="{{ asset('images/user1.jpeg') }}" alt="Asset Image" class="asset-image">
        </div>
        
        <div class="asset-details">
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Part Number</div>
                    <div class="detail-value">PN-0010</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Asset</div>
                    <div class="detail-value">Mobil</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Remark</div>
                    <div class="detail-value">Kendaraan operasional</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Asset Group</div>
                    <div class="detail-value">Kendaraan</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Unit</div>
                    <div class="detail-value">10</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Buffer Minimum</div>
                    <div class="detail-value">10</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Buffer Maximum</div>
                    <div class="detail-value">15</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Buffer Qty</div>
                    <div class="detail-value">19</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection