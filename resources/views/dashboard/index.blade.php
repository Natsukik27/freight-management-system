@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <!-- Header Section -->
    <div class="dashboard-header">
        <div class="header-title">
            <h1><i class="fas fa-cube me-2"></i>CUBE LOGISTICS</h1>
            <p class="welcome-message">Selamat datang, Admin</p>
        </div>
        <div class="header-actions">
            <button class="btn btn-icon" title="Refresh">
                <i class="fas fa-sync-alt"></i>
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>Tambah
            </button>
        </div>
    </div>

    <!-- Stats Cards Row -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon bg-primary">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="stat-info">
                <h3>Total Asset</h3>
                <h2>12</h2>
                <span class="stat-trend up"><i class="fas fa-arrow-up"></i> 12%</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon bg-success">
                <i class="fas fa-truck"></i>
            </div>
            <div class="stat-info">
                <h3>Pengiriman</h3>
                <h2>5</h2>
                <span class="stat-trend down"><i class="fas fa-arrow-down"></i> 5%</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon bg-warning">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="stat-info">
                <h3>Pembelian</h3>
                <h2>8</h2>
                <span class="stat-trend up"><i class="fas fa-arrow-up"></i> 8%</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon bg-danger">
                <i class="fas fa-undo"></i>
            </div>
            <div class="stat-info">
                <h3>Return</h3>
                <h2>2</h2>
                <span class="stat-trend down"><i class="fas fa-arrow-down"></i> 50%</span>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="content-grid">
        <!-- Transactions Table -->
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-exchange-alt me-2"></i>Transaksi Terakhir</h3>
                <a href="#" class="btn-link">Lihat Semua</a>
            </div>
            <div class="card-body compact">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#TRX-001</td>
                            <td>Pembayaran dari PT. Maju Jaya</td>
                            <td>12 Mei</td>
                            <td class="text-success">+ Rp5.250.000</td>
                        </tr>
                        <tr>
                            <td>#TRX-002</td>
                            <td>Pembelian bahan baku</td>
                            <td>11 Mei</td>
                            <td class="text-danger">- Rp2.100.000</td>
                        </tr>
                        <tr>
                            <td>#TRX-003</td>
                            <td>Gaji karyawan</td>
                            <td>10 Mei</td>
                            <td class="text-danger">- Rp15.750.000</td>
                        </tr>
                        <tr>
                            <td>#TRX-004</td>
                            <td>Pembayaran dari CV. Sejahtera</td>
                            <td>9 Mei</td>
                            <td class="text-success">+ Rp3.750.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-clipboard-list me-2"></i>Order Terakhir</h3>
                <a href="#" class="btn-link">Lihat Semua</a>
            </div>
            <div class="card-body compact">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#ORD-001</td>
                            <td>PT. Maju Jaya</td>
                            <td>12 Mei</td>
                            <td><span class="badge success">Selesai</span></td>
                            <td>Rp5.250.000</td>
                            <td><button class="btn-icon-sm"><i class="fas fa-ellipsis-v"></i></button></td>
                        </tr>
                        <tr>
                            <td>#ORD-002</td>
                            <td>CV. Sejahtera</td>
                            <td>10 Mei</td>
                            <td><span class="badge warning">Proses</span></td>
                            <td>Rp3.750.000</td>
                            <td><button class="btn-icon-sm"><i class="fas fa-ellipsis-v"></i></button></td>
                        </tr>
                        <tr>
                            <td>#ORD-003</td>
                            <td>PT. Abadi Sentosa</td>
                            <td>8 Mei</td>
                            <td><span class="badge danger">Batal</span></td>
                            <td>Rp2.100.000</td>
                            <td><button class="btn-icon-sm"><i class="fas fa-ellipsis-v"></i></button></td>
                        </tr>
                        <tr>
                            <td>#ORD-004</td>
                            <td>UD. Makmur</td>
                            <td>5 Mei</td>
                            <td><span class="badge info">Pengiriman</span></td>
                            <td>Rp4.500.000</td>
                            <td><button class="btn-icon-sm"><i class="fas fa-ellipsis-v"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-stream me-2"></i>Aktivitas Terakhir</h3>
                <a href="#" class="btn-link">Lihat Semua</a>
            </div>
            <div class="card-body compact">
                <div class="activity-feed">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="activity-content">
                            <div>
                                <strong>Pengiriman #ORD-001</strong>
                                <span class="text-muted">10 menit lalu</span>
                            </div>
                            <p>Order dikirim ke PT. Maju Jaya</p>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <div class="activity-content">
                            <div>
                                <strong>Pembelian Baru</strong>
                                <span class="text-muted">1 jam lalu</span>
                            </div>
                            <p>Pembelian 5 unit forklift</p>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <div>
                                <strong>User Baru</strong>
                                <span class="text-muted">3 jam lalu</span>
                            </div>
                            <p>Budi Santoso bergabung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inventory Chart -->
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-warehouse me-2"></i>Status Inventory</h3>
            </div>
            <div class="card-body compact">
                <div class="chart-container">
                    <canvas id="inventoryChart"></canvas>
                </div>
                <div class="chart-legend">
                    <div><span class="legend-dot primary"></span> Tersedia (65%)</div>
                    <div><span class="legend-dot warning"></span> Proses (15%)</div>
                    <div><span class="legend-dot danger"></span> Habis (20%)</div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary: #5a274c;
        --primary-light: #7a3a6a;
        --secondary: #4e73df;
        --success: #1cc88a;
        --warning: #f6c23e;
        --danger: #e74a3b;
        --light: #f8f9fa;
        --dark: #2d3748;
        --gray: #718096;
        --gray-light: #e2e8f0;
        --border: #edf2f7;
        --pink: #DB3954;
        --pink-hover: #c72e47;
        --background: #D9D9D9;
    }

    /* Base Styles */
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.5;
        color: var(--dark);
        background-color: var(--background); /* Ganti background utama */
    }

    .dashboard-container {
        padding: 1.25rem;
        max-width: 1800px;
        margin: 0 auto;
        background-color: #ffffff; /* agar konten tetap putih dan tidak buram */
        border-radius: 0.5rem;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    /* Header */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .header-title h1 {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
        margin: 0;
    }

    .welcome-message {
        font-size: 0.875rem;
        color: var(--gray);
        margin-top: 0.25rem;
    }

    .header-actions {
        display: flex;
        gap: 0.75rem;
        align-items: center;
    }

    .btn {
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        font-size: 0.875rem;
        cursor: pointer;
        transition: all 0.15s ease;
        border: 1px solid transparent;
        display: inline-flex;
        align-items: center;
    }

    .btn-icon {
        width: 2.25rem;
        height: 2.25rem;
        padding: 0;
        justify-content: center;
        border-radius: 50%;
        background: white;
        border: 1px solid var(--gray-light);
        color: var(--gray);
    }

    

    .btn-icon:hover {
        background: var(--gray-light);
        color: var(--dark);
    }

    .btn-icon-sm {
        width: 1.75rem;
        height: 1.75rem;
        padding: 0;
        justify-content: center;
        border-radius: 50%;
        background: transparent;
        border: none;
        color: var(--gray);
        cursor: pointer;
    }

    .btn-icon-sm:hover {
        background: var(--gray-light);
    }

    .btn-primary {
        background: var(--pink);
        color: white;
    }

    .btn-primary:hover {
        background: var(--pink-hover);
    }

    .btn-link {
        color: var(--secondary);
        text-decoration: none;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .btn-link:hover {
        text-decoration: underline;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .stat-card {
        background: white;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border-left: 4px solid var(--secondary);
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .stat-card:nth-child(1) { border-left-color: var(--secondary); }
    .stat-card:nth-child(2) { border-left-color: var(--success); }
    .stat-card:nth-child(3) { border-left-color: var(--warning); }
    .stat-card:nth-child(4) { border-left-color: var(--danger); }

    .stat-icon {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 0.375rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
    }

    .stat-icon.bg-primary { background: var(--secondary); }
    .stat-icon.bg-success { background: var(--success); }
    .stat-icon.bg-warning { background: var(--warning); }
    .stat-icon.bg-danger { background: var(--danger); }

    .stat-info h3 {
        font-size: 0.75rem;
        color: var(--gray);
        font-weight: 500;
        margin: 0 0 0.25rem 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-info h2 {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0 0 0.25rem 0;
        color: var(--dark);
    }

    .stat-trend {
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }

    .stat-trend.up { color: var(--success); }
    .stat-trend.down { color: var(--danger); }

    /* Content Grid */
    .content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;
    }

    @media (min-width: 1024px) {
        .content-grid {
            grid-template-columns: 2fr 1fr;
        }
    }

    /* Cards */
    .card {
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .card-header {
        padding: 1rem 1.25rem;
        border-bottom: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-header h3 {
        font-size: 1rem;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .card-body {
        padding: 1.25rem;
    }

    .card-body.compact {
        padding: 0;
    }

    /* Tables */
    .data-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.875rem;
    }

    .data-table th {
        background: var(--light);
        color: var(--gray);
        font-weight: 600;
        text-align: left;
        padding: 0.75rem 1rem;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .data-table td {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--border);
        vertical-align: middle;
    }

    .data-table tr:last-child td {
        border-bottom: none;
    }

    .data-table tr:hover td {
        background: rgba(0,0,0,0.02);
    }

    /* Badges */
    .badge {
        display: inline-block;
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 0.25rem;
    }

    .badge.success { background: #d1fae5; color: #065f46; }
    .badge.warning { background: #fef3c7; color: #92400e; }
    .badge.danger { background: #fee2e2; color: #b91c1c; }
    .badge.info { background: #dbeafe; color: #1e40af; }

    /* Text Colors */
    .text-success { color: var(--success); font-weight: 500; }
    .text-danger { color: var(--danger); font-weight: 500; }
    .text-muted { color: var(--gray); font-size: 0.75rem; }

    /* Activity Feed */
    .activity-feed {
        padding: 0.5rem 0;
    }

    .activity-item {
        display: flex;
        gap: 1rem;
        padding: 0.75rem 1.25rem;
        border-bottom: 1px solid var(--border);
    }

    .activity-item:last-child {
        border-bottom: none;
    }

    .activity-icon {
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        background: var(--light);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--secondary);
        font-size: 0.875rem;
        flex-shrink: 0;
    }

    .activity-content {
        flex: 1;
    }

    .activity-content > div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.25rem;
    }

    .activity-content p {
        margin: 0;
        color: var(--gray);
        font-size: 0.875rem;
    }

    /* Chart */
    .chart-container {
        position: relative;
        height: 200px;
        padding: 0.5rem;
    }

    .chart-legend {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        padding: 0.75rem;
        font-size: 0.75rem;
        color: var(--gray);
        flex-wrap: wrap;
    }

    .legend-dot {
        display: inline-block;
        width: 0.5rem;
        height: 0.5rem;
        border-radius: 50%;
        margin-right: 0.25rem;
    }

    .legend-dot.primary { background: var(--secondary); }
    .legend-dot.warning { background: var(--warning); }
    .legend-dot.danger { background: var(--danger); }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inventory Chart
        const inventoryCtx = document.getElementById('inventoryChart').getContext('2d');
        new Chart(inventoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Tersedia', 'Dalam Proses', 'Habis'],
                datasets: [{
                    data: [65, 15, 20],
                    backgroundColor: [
                        '#4e73df',
                        '#f6c23e',
                        '#e74a3b'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '70%'
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endsection