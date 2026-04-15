<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple BDEcom</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">BDEcom</a>

    <div class="ms-auto d-flex gap-2">
      @auth
      <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-sm">Dashboard</a>
       @else
      <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Login</a>
      <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Create Account</a>
       @endauth

    </div>





  </div>
</nav>

<!-- HERO -->
<div class="container my-4">
  <div class="p-5 bg-primary text-white rounded shadow-sm text-center">
    <h2 class="fw-bold">Welcome to Your Store</h2>
    <p class="mb-3">Simple ecommerce dashboard with Bootstrap only</p>
    <a href="#" class="btn btn-light fw-semibold">Shop Now</a>
  </div>
</div>

<!-- CATEGORY -->
<div class="container mb-5">
  <div class="row g-3 text-center">

    <div class="col-6 col-md-4">
      <div class="card border-0 shadow-sm p-3">
        <i class="bi bi-box-seam fs-1 text-primary"></i>
        <h6 class="mt-2 mb-0">New Arrivals</h6>
      </div>
    </div>

    <div class="col-6 col-md-4">
      <div class="card border-0 shadow-sm p-3">
        <i class="bi bi-tags fs-1 text-success"></i>
        <h6 class="mt-2 mb-0">Hot Deals</h6>
      </div>
    </div>

    <div class="col-6 col-md-4">
      <div class="card border-0 shadow-sm p-3">
        <i class="bi bi-star fs-1 text-warning"></i>
        <h6 class="mt-2 mb-0">Top Rated</h6>
      </div>
    </div>

  </div>
</div>

<!-- BOTTOM NAV -->
<nav class="navbar fixed-bottom bg-white border-top">
  <div class="container d-flex justify-content-around text-center">

    <a href="#" class="text-decoration-none text-primary">
      <i class="bi bi-house fs-4 d-block"></i>
      <small>Home</small>
    </a>

    <a href="#" class="text-decoration-none text-secondary">
      <i class="bi bi-search fs-4 d-block"></i>
      <small>Search</small>
    </a>

    <a href="#" class="text-decoration-none text-secondary">
      <i class="bi bi-cart fs-4 d-block"></i>
      <small>Cart</small>
    </a>

    <a href="#" class="text-decoration-none text-secondary">
      <i class="bi bi-person fs-4 d-block"></i>
      <small>Account</small>
    </a>

  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>