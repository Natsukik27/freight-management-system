<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freight ERP</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
            padding-bottom: 80px; /* Add padding for fixed footer */
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #5a274c;
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            overflow-y: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .sidebar::-webkit-scrollbar {
            display: none;
        }
        
        .sidebar.collapsed {
            transform: translateX(-250px);
            width: 0;
        }
        
        .sidebar .logo {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1); 
            background-color: #5a274c;
        }
        
        .sidebar .logo img {
            width: 140px;
        }
        
        .sidebar .profile {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        
        .sidebar .profile .info {
            margin-left: 10px;
        }
        
        .sidebar .brand-title {
            text-align: center;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 15px 0;
            background-color: #4e2232;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            gap: 10px;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #43202d;
        }
        
        .submenu {
            padding-left: 40px;
            font-size: 0.9rem;
        }
        
        .submenu a {
            padding: 5px 0;
            display: block;
            color: #fff;
            text-decoration: none;
            background-color: transparent;
            transition: background-color 0.2s ease;
        }
        
        .submenu a:hover,
        .submenu a:focus,
        .submenu a.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
        
        /* Main Content Styles */
        #main-wrapper {
            margin-left: 250px;
            transition: all 0.3s ease;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        #main-wrapper.full {
            margin-left: 0;
        }
        
        .main-content {
            padding: 20px;
            flex: 1;
            margin-bottom: 20px; /* Reduced margin since we have body padding */
        }
        
        /* Navbar Toggle Styles */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 999;
            background-color: #f8f9fa !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Footer Styles */
        .app-footer {
            background-color: #f8f9fa;
            color: #6c757d;
            padding: 1rem;
            border-top: 1px solid #dee2e6;
            position: fixed;
            bottom: 0;
            left: 250px;
            right: 0;
            z-index: 990;
            transition: all 0.3s ease;
            height: 60px;
            box-sizing: border-box;
        }
        
        #main-wrapper.full .app-footer {
            left: 0;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
        }
        
        /* Table Styles */
        .transaction-table {
            margin-bottom: 30px; /* Extra margin for tables */
        }
        
        /* Miscellaneous */
        .nav-item .fa {
            width: 20px;
        }
        
        .chevron {
            transition: transform 0.1s;
        }
        
        .chevron.rotate {
            transform: rotate(-90deg);
        }
        
        .sidebar-menu {
            height: calc(100vh - 200px);
            overflow-y: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .sidebar-menu::-webkit-scrollbar {
            display: none;
        }
        
        @media (max-width: 768px) {
            body {
                padding-bottom: 0;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
            
            .app-footer {
                position: static;
                height: auto;
                left: auto;
                right: auto;
            }
            
            #main-wrapper {
                margin-left: 0;
            }
            
            .main-content {
                margin-bottom: 0;
                padding-bottom: 20px;
            }
            
            .sidebar:not(.collapsed) {
                z-index: 1001;
            }
            
            .sidebar:not(.collapsed) + #main-wrapper {
                margin-left: 250px;
            }
            
            .sidebar:not(.collapsed) + #main-wrapper .app-footer {
                left: 250px;
                position: fixed;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar">
        <!-- LOGO -->
        <div class="logo">
            <img src="{{ asset('images/keysoftware-logo.png') }}" alt="Logo">
        </div>

        <!-- PROFILE -->
        <div class="profile">
            <img src="{{ asset('images/user1.jpeg') }}" alt="User">
            <div class="info">
                <div class="fw-bold">Natsuki</div>
                <div class="text-success small">Online</div>
            </div>
        </div>

        <!-- CUBE LOGISTICS TEXT -->
        <div class="brand-title">
            <i class="fa-solid fa-cube me-2"></i> CUBE LOGISTICS
        </div>

        <!-- NAVIGATION -->
        <div class="sidebar-menu">
            <ul class="nav flex-column px-2 py-3">
                <!-- Main -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3">Main</li>

                <li class="nav-main-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fas fa-home me-2"></i> Dashboard
                    </a>
                </li>
                
                <li class="nav-main-item">
                    <a href="#" class="nav-link"><i class="fa-solid fa-database me-2"></i> Data</a>
                </li>

                <!-- Finance -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3 mt-3">Finance</li>
                <li class="nav-main-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#financeMenu">
                        <span><i class="fas fa-coins me-2"></i> Finance & Accounting</span>
                        <i class="fas fa-chevron-left chevron"></i>
                    </a>
                    <ul class="collapse submenu nav-main-submenu" id="financeMenu">
                        <li><a href="{{ route('asset.index') }}" class="nav-link ps-4">Asset</a></li>
                        <li><a href="#" class="nav-link ps-4">Asset Type</a></li>
                        <li><a href="#" class="nav-link ps-4">Chart Of Account</a></li>
                    </ul>
                </li>
                
                <!-- Sales -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3 mt-3">Sales</li>
                <li class="nav-main-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#salesMenu">
                        <span><i class="fas fa-handshake me-2"></i> Sales</span>
                        <i class="fas fa-chevron-left chevron"></i>
                    </a>
                    <ul class="collapse submenu nav-main-submenu" id="salesMenu">
                        <li><a href="#" class="nav-link ps-4">Service</a></li>
                        <li><a href="#" class="nav-link ps-4">Terms Of Payment</a></li>
                        <li><a href="#" class="nav-link ps-4">Tipe Pricing Kendaraan</a></li>
                    </ul>
                </li>

                <!-- Order Management -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3 mt-3">Order Management</li>
                <li class="nav-main-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#orderMenu">
                        <span><i class="fas fa-truck-moving me-2"></i> Order Management</span>
                        <i class="fas fa-chevron-left chevron"></i>
                    </a>
                    <ul class="collapse submenu nav-main-submenu" id="orderMenu">
                        <li><a href="#" class="nav-link ps-4">Order #1</a></li>
                        <li><a href="#" class="nav-link ps-4">Order #2</a></li>
                    </ul>
                </li>

                <!-- Warehouse -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3 mt-3">Warehouse</li>
                <li class="nav-main-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#warehouseMenu">
                        <span><i class="fas fa-warehouse me-2"></i> Warehouse</span>
                        <i class="fas fa-chevron-left chevron"></i>
                    </a>
                    <ul class="collapse submenu nav-main-submenu" id="warehouseMenu">
                        <li><a href="#" class="nav-link ps-4">Inventory</a></li>
                        <li><a href="#" class="nav-link ps-4">Storage</a></li>
                    </ul>
                </li>

                <!-- Purchasing -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3 mt-3">Purchasing</li>
                <li class="nav-main-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#purchasingMenu">
                        <span><i class="fas fa-shopping-cart me-2"></i> Purchasing</span>
                        <i class="fas fa-chevron-left chevron"></i>
                    </a>
                    <ul class="collapse submenu nav-main-submenu" id="purchasingMenu">
                        <li><a href="#" class="nav-link ps-4">Vendor List</a></li>
                        <li><a href="#" class="nav-link ps-4">Purchase Order</a></li>
                    </ul>
                </li>

                <!-- Settings -->
                <li class="nav-main-heading text-uppercase fw-bold small text-white-50 px-3 mt-3">Settings</li>
                <li class="nav-main-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#settingsMenu">
                        <span><i class="fas fa-cogs me-2"></i> Settings</span>
                        <i class="fas fa-chevron-left chevron"></i>
                    </a>
                    <ul class="collapse submenu nav-main-submenu" id="settingsMenu">
                        <li><a href="#" class="nav-link ps-4">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <!-- Navbar Toggle -->
        <nav class="navbar navbar-light bg-light px-3">
            <button class="btn btn-outline-secondary" id="toggleSidebar">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            
            
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="app-footer">
            <div class="footer-content container-fluid">
                <div class="text-start">
                    Keysoft ERP Online © 2025
                </div>
                <div class="text-end">
                    Crafted by <strong>PT. Infotama Teknologi Indonesia</strong>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle functionality
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const mainWrapper = document.getElementById('main-wrapper');
            
            sidebar.classList.toggle('collapsed');
            mainWrapper.classList.toggle('full');
        });

        // Chevron rotate on collapse show/hide
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function(toggle) {
            const icon = toggle.querySelector('.chevron');
            const targetSelector = toggle.getAttribute('href');
            const target = document.querySelector(targetSelector);

            if (target) {
                target.addEventListener('shown.bs.collapse', function() {
                    icon.classList.add('rotate');
                });
                target.addEventListener('hidden.bs.collapse', function() {
                    icon.classList.remove('rotate');
                });
            }
        });

        // Active submenu highlight
        document.querySelectorAll('.submenu a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.submenu a').forEach(el => el.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html>