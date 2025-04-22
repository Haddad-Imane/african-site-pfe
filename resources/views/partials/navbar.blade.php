<!-- resources/views/partials/navbar.blade.php -->
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






       
 </style>
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
                <a href="checkout" href="checkout"><i class="fas fa-cart-shopping"></i>Items</a>
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
    <<option value="{{ route('moroccan.carpet') }}">Moroccan Carpet</option>
</select>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="beads">BEADS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rame finds">RARE FINDS</a>
                </li>
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
