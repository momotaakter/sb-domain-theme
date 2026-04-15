<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDEcom UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
        
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-bottom: 70px; /* Space for bottom nav */
        }

        /* Top Header */
        .navbar-brand {
            font-weight: bold;
            color: #2b3481;
        }

        /* Main Hero Card */
        .hero-card {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            border-radius: 25px;
            color: white;
            padding: 40px 30px;
            border: none;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .btn-shop {
            background-color: white;
            color: #6366f1;
            border-radius: 50px;
            font-weight: bold;
            padding: 10px 30px;
            border: none;
            transition: transform 0.2s;
        }

        .btn-shop:hover {
            transform: scale(1.05);
            background-color: #f8f9fa;
        }

        /* Category Cards */
        .category-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            height: 100%;
            transition: 0.3s;
        }

        .category-card:hover {
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }

        .category-icon {
            font-size: 2rem;
            margin-bottom: 10px;
            display: block;
        }

        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            border-top: 1px solid #eee;
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
            z-index: 1000;
        }

        .nav-item {
            text-align: center;
            color: #888;
            text-decoration: none;
            font-size: 0.75rem;
        }

        .nav-item.active {
            color: #6366f1;
        }

        .nav-item i {
            display: block;
            font-size: 1.4rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-light bg-white mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">BDEcom</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="hero-card">
                    <h1 class="fw-bold">Welcome to Your Store</h1>
                    <p class="lead">Manage your products and orders with ease.</p>
                    <button class="btn btn-shop mt-3 shadow-sm">Shop Now</button>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-6">
                <div class="category-card">
                    <span class="category-icon text-primary">
                        <i class="bi bi-box-seam-fill"></i>
                    </span>
                    <span class="fw-bold d-block text-secondary">New Arrivals</span>
                </div>
            </div>
            <div class="col-6">
                <div class="category-card">
                    <span class="category-icon text-success">
                        <i class="bi bi-tags-fill"></i>
                    </span>
                    <span class="fw-bold d-block text-secondary">Hot Deals</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-nav">
        <a href="#" class="nav-item active">
            <i class="bi bi-house-door-fill"></i>
            Home
        </a>
        <a href="#" class="nav-item">
            <i class="bi bi-search"></i>
            Search
        </a>
        <a href="#" class="nav-item">
            <i class="bi bi-person-badge"></i>
            Admin Panel
        </a>
        <a href="#" class="nav-item">
            <i class="bi bi-cart3"></i>
            Cart
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>