<!-- resources/views/moroccan_cloth.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    /* Style pour le conteneur */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Style pour le titre */
    h1 {
        color: #D35400;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style pour le paragraphe */
    .description {
        font-size: 18px;
        line-height: 1.6;
        text-align: justify;
    }

    /* Ligne sous le titre */
    .title-line {
        border-bottom: 2px solid #D35400;
        margin-bottom: 20px;
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

@include('partials.navbar')

<div class="container">
    <!-- Titre -->
    <h1>MOROCCAN CLOTH</h1>

    <!-- Ligne sous le titre -->
    <div class="title-line"></div>

    <!-- Paragraphe -->
    <div class="description">
        <p>
            Moroccan cloth is renowned for its vibrant colors, intricate patterns, and high-quality craftsmanship. Made from natural fibers like cotton and wool, these textiles are often handwoven or embroidered, reflecting the rich cultural heritage of Morocco. Whether used for clothing, home decor, or accessories, Moroccan cloth adds a touch of elegance and tradition to any setting.
        </p>
    </div>

    <div class="row">
        <!-- Product Cards -->
        @foreach ([
            ['src' => 'm1.jpg', 'title' => 'Moroccan caftan', 'price' => '1500.00 DH'],
            ['src' => 'm2.jpg', 'title' => 'Moroccan takchita', 'price' => '2000.00 DH'],
            ['src' => 'm3.jpg', 'title' => 'Moroccan Haïk', 'price' => '2000.00 DH'],
            ['src' => 'm4.jpg', 'title' => 'Moroccan Takshita El-Fessia', 'price' => '1500.00 DH'],
            ['src' => 'm5.jpg', 'title' => 'Moroccan Cloth 5', 'price' => '1500.00 DH'],
            ['src' => 'm6.jpg', 'title' => 'Jellaba for men', 'price' => '2200.00 DH'],
            ['src' => 'm7.jpg', 'title' => 'Amazigh cloth', 'price' => '3000.00 DH'],
            ['src' => 'm8.jpg', 'title' => 'Traditional jellaba for men', 'price' => '2500.00 DH'],
            ['src' => 'm9.jpg', 'title' => 'Selham men', 'price' => '2000.00 DH'],
            ['src' => 'm10.jpg', 'title' => 'Caftan modern', 'price' => '3000.00 DH'],
            ['src' => 'm11.jpg', 'title' => 'Jellaba', 'price' => '2500.00 DH'],
            ['src' => 'm12.jpg', 'title' => 'Amazigh Cloth', 'price' => '2300.00 DH'],
            ['src' => 'm13.jpg', 'title' => 'Jellaba', 'price' => '1290.00 DH'],
            ['src' => 'm14.jpg', 'title' => 'Moroccan caftan', 'price' => '2390.00 DH'],
            ['src' => 'm15.jpg', 'title' => 'Traditional Cloth men', 'price' => '2500.00 DH'],
            ['src' => 'm16.jpg', 'title' => 'Moroccan caftan', 'price' => '3000.00 DH'],
            ['src' => 'm17.png', 'title' => 'Moroccan faracha gandora', 'price' => '1000.00 DH'],
            ['src' => 'm18.png', 'title' => 'Moroccan gandora', 'price' => '1000.00 DH'],
        ] as $product)
        <div class="col-md-3 mb-4">
            <div class="product">
                <img src="{{ asset('images/' . $product['src']) }}" alt="{{ $product['title'] }}">
                <h4>{{ $product['title'] }}</h4>
                <div class="price-button">
                    <p>Price: {{ $product['price'] }}</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
