<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4812982098.js" crossorigin="anonymous"></script>
    <title>AFRICAN CRAFTMANSHIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #5a3e1b;
        }
        .navbar {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-dark .navbar-nav{
            color: #5a3e1b;
            font-weight: bold;
            font-size: 16px;
            margin-right: 20px;
        }
        .navbar-brand img {
            height: 300px;
        }
        .header-item {
            list-style: none;
            display: inline;
            margin-right: 70px;
            margin-top: 10px;
        }
        .header-item a {
            text-decoration: none;
            color: #5a3e1b;
            font-weight: bold;
            font-size: 14px;
        }
        .banner {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 220px;
            color: #8b5e3c;
        }
        .nav-link {
            color: #8b5e3c !important;
            margin-right: 50px;
            transition: all 0.5s ease;
        }
        .navbar-nav.mx-auto {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .nav-item {
            margin: 0 35px;
            position: relative;
            font-size: 14px;
        }

        .nav-link:hover:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #8b5e3c;
        }

        .carousel-item img {
            width: 300px;
            height: auto;
        }

        .carousel {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <div class="d-flex align-items-center">
            <ul class="navbar-nav ms-auto">
                <li class="header-item">
                    <select>
                        <option>USD</option>
                        <option>MAD</option>
                    </select>
                </li>
                <li class="header-item">
                    <a href="#"><i class="fas fa-search"></i> Search</a>
                </li>
                <li class="header-item">
                    <a href="#"><i class="fas fa-cart-shopping"></i> Items</a>
                </li>
                <li class="header-item">
                    <a href="login"><i class="fas fa-user"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home">HOME</a>
                </li>
                <li class="nav-item">
    <select class="nav-link" onchange="window.location.href = this.value;">
        <option value="textiles">TEXTILES</option>
        <option value="african-fabric">African Fabric</option>
        <option value="moroccan-cloth">Moroccan Cloth</option>
        <option value="moroccan-carpet">Moroccan Carpet</option>
    </select>
</li>

                <li class="nav-item">
                    <a class="nav-link" href="#">BEADS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">RARE FINDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WORLD KITCHEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOCKS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center mt-5">
    <h1 class="banner">BRING THE WONDERS OF OUR VILLAGE INTO YOUR HOME</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/African-fabric.png') }}" class="d-block w-100" alt="African Batik Fabric">
                <p class="product-title">AFRICAN BATIK FABRIC</p>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/indigo.png') }}" class="d-block w-100" alt="Kuba Cloth">
                <p class="product-title">KUBA CLOTH</p>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/kuba-cloth.png') }}" class="d-block w-100" alt="Indigo">
                <p class="product-title">INDIGO</p>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5">
        <hr>
        <p class="text-uppercase fw-bold">Follow Us Out There</p>

        <!-- Icônes des réseaux sociaux -->
        <div class="d-flex justify-content-center gap-3 mb-3">
            <a href="#" class="text-dark">
                <img src="https://img.icons8.com/?size=100&id=435&format=png&color=000000" alt="Facebook" width="30">
            </a>
            <a href="#" class="text-dark">
                <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=000000" alt="Camera" width="30">
            </a>
            <a href="#" class="text-dark">
                <img src="https://img.icons8.com/?size=100&id=6Fsj3rv2DCmG&format=png&color=000000" alt="Pinterest" width="30">
            </a>
        </div>

        <!-- Liens du footer -->
        <div class="d-flex justify-content-center gap-4">
            <a href="#" class="text-dark text-decoration-none">About Us</a>
            <a href="#" class="text-dark text-decoration-none">Privacy Policy</a>
            <a href="#" class="text-dark text-decoration-none">Shipping & Returns</a>
            <a href="#" class="text-dark text-decoration-none">Terms of Use</a>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
