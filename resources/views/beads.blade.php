<!-- resources/views/beads.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    /* Style for the container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Style for the title */
    h1 {
        color: #8B4513;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style for the paragraph */
    .description {
        font-size: 18px;
        line-height: 1.6;
        text-align: justify;
    }

    /* Line under the title */
    .title-line {
        border-bottom: 2px solid #8B4513;
        margin-bottom: 20px;
    }

     /* Style pour le conteneur */
     .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Style pour les cartes de produits */
    .product {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        transition: transform 0.3s ease;
        margin-bottom: 20px;
    }

    .product:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product img {
        height: 200px;
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .product h4 {
        color: #D35400;
        font-size: 18px;
        margin: 15px 0;
    }

    /* Style pour le prix et le bouton */
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

<div class="container">
    <!-- Title -->
    <h1>BEADS</h1>

    <!-- Line under the title -->
    <div class="title-line"></div>

    <!-- Paragraph -->
    <div class="description">
        <p>
            Beads are decorative elements used in the creation of jewelry, accessories, and artworks.
             They can be made from various materials such as glass, wood, metal, or stone. Each bead 
             is unique, reflecting cultural richness and traditional craftsmanship. Explore our collection 
             of beads to add a touch of elegance and creativity to your projects.
        </p>
    </div>

    <div class="row">
        <!-- Image 1 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/g1.jpg') }}" alt="Moroccan Cloth 1">
                <h4>Beautiful antique necklace with West African trade beads </h4>
                <div class="price-button">
                    <p>Price: 1500.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/g2.jpg') }}" alt="Moroccan Cloth 2">
                <h4>Copal African Resin Beads </h4>
                <div class="price-button">
                    <p>Price: 2000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/g3.jpg') }}" alt="Moroccan Cloth 3">
                <h4>Old Berber Necklace – Bouizakarne, Guelmim Region, Morocco</h4>
                <div class="price-button">
                    <p>Price: 2000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Image 4 -->
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/g4.jpg') }}" alt="Moroccan Cloth 4">
                <h4>Handcrafted Moroccan African Berber</h4>
                <div class="price-button">
                    <p>Price: 1500.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

       
       
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m5.jpg') }}" alt="Moroccan Cloth 5">
                <h4>Moroccan Cloth 5</h4>
                <div class="price-button">
                    <p>Price: 1500.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m6.jpg') }}" alt="Moroccan Cloth 5">
                <h4>jellaba for men </h4>
                <div class="price-button">
                    <p>Price: 2200.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m7.jpg') }}" alt="Moroccan Cloth 5">
                <h4>Amazigh cloth</h4>
                <div class="price-button">
                    <p>Price: 3000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m8.jpg') }}" alt="Moroccan Cloth 5">
                <h4>traditional jellaba for men</h4>
                <div class="price-button">
                    <p>Price: 2500.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m9.jpg') }}" alt="Moroccan Cloth 5">
                <h4>selham men</h4>
                <div class="price-button">
                    <p>Price: 2000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m10.jpg') }}" alt="Moroccan Cloth 5">
                <h4>Caftan modern</h4>
                <div class="price-button">
                    <p>Price: 3000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m11.jpg') }}" alt="Moroccan Cloth 5">
                <h4>jellaba</h4>
                <div class="price-button">
                    <p>Price: 2500.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m12.jpg') }}" alt="Moroccan Cloth 5">
                <h4>Amazigh Cloth  </h4>
                <div class="price-button">
                    <p>Price: 2300.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m13.jpg') }}" alt="Moroccan Cloth 5">
                <h4>jllaba </h4>
                <div class="price-button">
                    <p>Price: 1290.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m14.jpg') }}" alt="Moroccan Cloth 5">
                <h4>Moroccan caftan</h4>
                <div class="price-button">
                    <p>Price: 2390.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m15.jpg') }}" alt="Moroccan Cloth 5">
                <h4> traditional Cloth men  </h4>
                <div class="price-button">
                    <p>Price: 2500.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m16.jpg') }}" alt="Moroccan Cloth 5">
                <h4>Moroccan caftan</h4>
                <div class="price-button">
                    <p>Price: 3000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m17.png') }}" alt="Moroccan Cloth 5">
                <h4>Moroccan faracha gandora</h4>
                <div class="price-button">
                    <p>Price: 1000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            
        </div>
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/m18.png') }}" alt="Moroccan Cloth 5">
                <h4>Moroccan gandora</h4>
                <div class="price-button">
                    <p>Price: 1000.00 €</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
