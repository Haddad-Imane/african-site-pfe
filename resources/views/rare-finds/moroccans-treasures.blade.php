<!-- resources/views/rare-finds/moroccan-treasures.blade.php -->

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

<h1 class="text-center my-5" style="color: #D35400;">Moroccan Treasures</h1>

<!-- Description -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <p class="text-center" style="font-size: 20px; line-height: 1.6;">
            Discover our exclusive collection of Moroccan treasures, unique pieces that tell the rich and colorful story of our culture. Each treasure is carefully selected for its beauty and authenticity.
        </p>
    </div>
</div>

<!-- List of Treasures -->
<div class="row">
    <!-- Treasure 1 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/t1.jpg') }}" alt="Moroccan Treasure #1" class="img-fluid">
            <h4>Moroccan Treasure #1</h4>
            <div class="price-button">
                <p>Price: 150.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 2 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/t2.jpg') }}" alt="Moroccan Treasure #2" class="img-fluid">
            <h4>Moroccan Treasure #2</h4>
            <div class="price-button">
                <p>Price: 200.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 3 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/t3.jpg') }}" alt="Moroccan Treasure #3" class="img-fluid">
            <h4>Moroccan Treasure #3</h4>
            <div class="price-button">
                <p>Price: 180.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 4 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/t4.jpg') }}" alt="Moroccan Treasure #4" class="img-fluid">
            <h4>Moroccan Treasure #4</h4>
            <div class="price-button">
                <p>Price: 220.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 5 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/t5.jpg') }}" alt="Moroccan Treasure #5" class="img-fluid">
            <h4>Moroccan Treasure #5</h4>
            <div class="price-button">
                <p>Price: 190.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 6 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/t6.jpg') }}" alt="Moroccan Treasure #6" class="img-fluid">
            <h4>Moroccan Treasure #6</h4>
            <div class="price-button">
                <p>Price: 210.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 7 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/moroccan7.jpg') }}" alt="Moroccan Treasure #7" class="img-fluid">
            <h4>Moroccan Treasure #7</h4>
            <div class="price-button">
                <p>Price: 170.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Treasure 8 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/moroccan8.jpg') }}" alt="Moroccan Treasure #8" class="img-fluid">
            <h4>Moroccan Treasure #8</h4>
            <div class="price-button">
                <p>Price: 240.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
</div>
@endsection
