<!-- resources/views/moroccan_cloth.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    /* Container Styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #EDE0D4;
        color: #5a3e1b;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Title Styling */
    h1 {
        color: #D35400;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Description Styling */
    .description {
        font-size: 18px;
        line-height: 1.6;
        text-align: justify;
    }

    /* Line under title */
    .title-line {
        border-bottom: 2px solid #D35400;
        margin-bottom: 20px;
    }

    /* Product Card Styling */
    .product img {
        width: 100%; /* Adjusted to fill the frame */
        height: 250px; /* Fixed height for images */
        object-fit: cover; /* Ensures the image covers the space */
        border-radius: 5px;
        border: 1px solid #ddd; /* Image border */
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

    .product h4 {
        color: #B08968;
        font-size: 18px;
        margin: 15px 0;
    }

    .price-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .price-button p {
        font-size: 20px;
        color: #333;
        margin: 0;
    }

    .price-button button {
        background: #A0522D;
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

<h1 class="text-center my-5">Moroccan Cloth</h1>

<!-- Description -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <p class="text-center " style="font-size: 20px; line-height: 1.9;">
            Moroccan cloth is renowned for its vibrant colors, intricate patterns, and high-quality craftsmanship. Made from natural fibers like cotton and wool, these textiles are often handwoven or embroidered, reflecting the rich cultural heritage of Morocco. Whether used for clothing, home decor, or accessories, Moroccan cloth adds a touch of elegance and tradition to any setting.
        </p>
    </div>
</div>

<!-- List of Products -->
<div class="row">
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
@endsection
