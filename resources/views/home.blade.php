<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4812982098.js" crossorigin="anonymous"></script>
    <title>AFRICAN CRAFTMANSHIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #EDE0D4 ;
            color: #5a3e1b;
        }
        .navbar {
            background-color: #EDE0D4 ;
            padding: 10px 0;
            box-shadow: 0 2px 4px #7F5539(0, 0, 0, 0.1);
        }
        .navbar-dark .navbar-nav{
            color: #7F5539;
            font-weight: bold;
            font-size: 16px;
            margin-right: 20px;
        }
        .navbar-brand img {
            height: auto;
            width: 180px;
            transition: transform 0.3s ease;
            margin-top: -50px;
        }
        .navbar-brand img:hover {
            transform: scale(1.03);
        }
        .header-item {
            list-style: none;
            display: inline;
            margin-right: 60px;
            margin-top: -50px;
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
            width: 100%;
            height: calc(70vh - 70px); 
        }

        .carousel {
            margin-top: -47px; /* Supprime l’espace au-dessus du slider */
        }






        .product img {
            width: 100%; /* Taille ajustée pour remplir le cadre */
            height: 250px; /* Hauteur fixe pour les images */
            object-fit: cover; /* Ajuste l'image pour couvrir l'espace */
            border-radius: 5px;

            border: 1px solid #ddd; /* Encadrement de l'image */
        }

        .product {
        background: #E6CCB2;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .product:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product img {
        height: 250px;
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .product h4 {
        color: #B08968;
        font-size: 18px;
        margin: 15px 0;
    }
    .h1{
        font-family: 'Chewy';
    }


    .price-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .price-button p {
        font-size: 16px;
        color: #333;
        margin: 0;
    }

    .price-button button {
        background: #8B4513;
        color: #fff;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .price-button button:hover {
        background: #A0522D;
    }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/logo1.png" alt="Logo" class="brand-logo">
        </a>

        <div class="d-flex align-items-center">
            <li class="header-item"> 
                <select class="currency-select me-3">
                    <option background-color="#ffd8c8 ">USD</option>
                    <option>MAD</option>
                </select>
            </li>            
                <li class="header-item">
                    <a href="search"><i class="fas fa-search"></i> Search</a>
                </li>
                <li class="header-item">
                <a href="" href="checkout"><i class="fas fa-cart-shopping"></i>Items</a>
                </li>
                <li class="header-item">
                <a href="login"><i class="fas fa-user"></i> Login</a>
                </li>
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
    <option value="{{ route('textile') }}">TEXTILES</option>
    <option value="{{ route('african.fabric') }}">African Fabric</option>
    <option value="{{ route('moroccan.cloth') }}">Moroccan Cloth</option>
    <option value="{{ route('moroccan.carpet') }}">Moroccan Carpet</option>
</select>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="beads">BEADS</a>
                </li>
                <select class="nav-link" onchange="window.location.href = this.value;">
    <option value="{{ route('rare-finds') }}">RARE FINDS</option>
    <option value="{{ route('rare-finds.vintage-printing-blocks') }}">Vintage printing blocks </option>
    <option value="{{ route('moroccans-treasures') }}">Moroccans Treasures</option>
    
</select>

                <li class="nav-item">
                    <a class="nav-link" href="world kitchen">WORLD KITCHEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blocks">BLOCKS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="container-fluid text-center mt-5 p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/African-fabric.png') }}" class="w-100" alt="African Batik Fabric">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/indigo.png') }}" class="w-100" alt="Kuba Cloth">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/kuba-cloth.png') }}" class="w-100" alt="Indigo">
            </div>
        </div>
    </div>
</div>

<per>




</per>


       

    <hr>




<h1 class="text-center my-5" style="color: #D35400;">MOROCCAN CARPET</h1>

    
    <!-- Description -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <p class="text-center"  >
                For centuries, Moroccan artisans have crafted exquisite carpets that blend tradition and artistry. Using natural wool or cotton as a base, intricate patterns are woven or knotted by hand, showcasing the region's rich heritage. Vibrant dyes from plants, minerals, and spices bring these one-of-a-kind masterpieces to life, creating timeless pieces made from 100% natural materials.
            </p>
        </div>
    </div>

    
    <!-- Carpet List -->
    <div class="row">
        <!-- Carpet 1 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i1.jpg') }}" alt="MOROCCAN CARPET PIRO" class="img-fluid">
                <h4>MOROCCAN CARPET PIRO</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 2 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i2.jpg') }}" alt="MOROCCAN CARPET FIRE" class="img-fluid">
                <h4>MOROCCAN CARPET FIRE</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH </p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 3 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i3.jpg') }}" alt="MOROCCAN CARPET MORE" class="img-fluid">
                <h4>MOROCCAN CARPET MORE</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 4 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i4.jpg') }}" alt="MOROCCAN CARPET & THE" class="img-fluid">
                <h4>MOROCCAN CARPET & THE</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 5 -->
        <div class="col-md-3 mb-4">
            <div class="product">

                <img src="{{ asset('images/i5.jpg') }}" alt="MOROCCAN CARPET 5" class="img-fluid">
                <h4>MOROCCAN CARPET 5</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 6 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i6.jpg') }}" alt="MOROCCAN CARPET 6" class="img-fluid">
                <h4>MOROCCAN CARPET 6</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 7 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i7.png') }}" alt="MOROCCAN CARPET 7" class="img-fluid">
                <h4>MOROCCAN CARPET 7</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Carpet 8 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/i8.png') }}" alt="MOROCCAN CARPET 8" class="img-fluid">
                <h4>MOROCCAN CARPET 8</h4>
                <div class="price-button">
                    <p>Price: 1080.00 DH</p>
                    <button>Add to Cart</button>
                </div>
            </div>
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