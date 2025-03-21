@extends('layouts.app')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits en Wax Batik Africain</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
            margin: 0;
            padding: 0;
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


        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            flex: 1 1 calc(25% - 40px); /* 4 produits par ligne */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .product img {
            width: 100%; /* Taille ajustée pour remplir le cadre */
            height: 250px; /* Hauteur fixe pour les images */
            object-fit: cover; /* Ajuste l'image pour couvrir l'espace */
            border-radius: 5px;
            border: 1px solid #ddd; /* Encadrement de l'image */
        }
        .product h4 {
            font-size: small;
            margin: 15px 0 10px;
            color: #D35400; /* Couleur orange pour les titres */
        }
        .product .price-button {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-top: 15px;
        }
        .product .price-button p {
            font-size: 0.8em;
            color: #8B4513; /* Couleur marron pour le texte */
            margin: 0;
        }
        .product .price-button button {
            background-color: #8B4513; /* Couleur marron pour le bouton */
            color: #000; /* Texte en noir */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
        }
        .product .price-button button:hover {
            background-color: #A0522D; /* Couleur marron plus claire au survol */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
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
                        <a href="#"><i class="fas fa-user"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Barre de navigation principale -->
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
   


    <div class="container">
        <h1 style="color: #D35400;">Nos Produits en Wax Batik Africain</h1>

        <div class="product-grid">
            <div class="product">
                <img src="{{ asset('images/img1.jpg') }}" alt="African Fabric Wax Batik #2044">
                <h4>African Fabric Wax Batik #2044</h4>
                <div class="price-button">
                    <p>Prix : 299.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img2.jpg') }}" alt="African Fabric Wax Batik #2045">
                <h4>African Fabric Wax Batik #2045</h4>
                <div class="price-button">
                    <p>Prix : 399.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img3.jpg') }}" alt="African Fabric Wax Batik #2041">
                <h4>African Fabric Wax Batik #2041</h4>
                <div class="price-button">
                    <p>Prix : 299.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img4.jpg') }}" alt="African Fabric Wax Batik #2043">
                <h4>African Fabric Wax Batik #2043</h4>
                <div class="price-button">
                    <p>Prix : 359.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img5.jpg') }}" alt="African Fabric Wax Batik #2040">
                <h4>African Fabric Wax Batik #2040</h4>
                <div class="price-button">
                    <p>Prix : 499.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img6.jpg') }}" alt="African Fabric Wax Batik #2039">
                <h4>African Fabric Wax Batik #2039</h4>
                <div class="price-button">
                    <p>Prix : 599.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img7.jpg') }}" alt="African Fabric Wax Batik #2038">
                <h4>African Fabric Wax Batik #2038</h4>
                <div class="price-button">
                    <p>Prix : 599.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>

            <div class="product">
                <img src="{{ asset('images/img8.jpg') }}" alt="African Fabric Wax Batik #2037">
                <h4>African Fabric Wax Batik #2037</h4>
                <div class="price-button">
                    <p>Prix : 599.00 dh</p>
                    <button>Ajouter au panier</button>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>
