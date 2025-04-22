<!-- resources/views/rare-finds/vintage-printing-blocks.blade.php -->

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
        font-size: 16px;
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

<h1 class="text-center my-5" style="color: #D35400;">Vintage Printing Blocks</h1>

<!-- Description -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <p class="text-center">
            Discover our exclusive collection of vintage printing blocks, unique pieces that tell the story of traditional craftsmanship. Each block is carefully selected for its timeless design and authentic charm.
        </p>
    </div>
</div>

<!-- List of Blocks -->
<div class="row">
    <!-- Block 1 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra8.jpg') }}" alt="Vintage Printing Block #1" class="img-fluid">
            <h4>Vintage Printing Block #1</h4>
            <div class="price-button">
                <p>Price: 150.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 2 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra7.jpg') }}" alt="Vintage Printing Block #2" class="img-fluid">
            <h4>Vintage Printing Block #2</h4>
            <div class="price-button">
                <p>Price: 200.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 3 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra6.jpg') }}" alt="Vintage Printing Block #3" class="img-fluid">
            <h4>Vintage Printing Block #3</h4>
            <div class="price-button">
                <p>Price: 180.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 4 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra4.jpg') }}" alt="Vintage Printing Block #4" class="img-fluid">
            <h4>Vintage Printing Block #4</h4>
            <div class="price-button">
                <p>Price: 220.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 5 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra4.jpg') }}" alt="Vintage Printing Block #5" class="img-fluid">
            <h4>Vintage Printing Block #5</h4>
            <div class="price-button">
                <p>Price: 190.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 6 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra3.jpg') }}" alt="Vintage Printing Block #6" class="img-fluid">
            <h4>Vintage Printing Block #6</h4>
            <div class="price-button">
                <p>Price: 210.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 7 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra1.jpg') }}" alt="Vintage Printing Block #7" class="img-fluid">
            <h4>Vintage Printing Block #7</h4>
            <div class="price-button">
                <p>Price: 170.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Block 8 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/ra2.jpg') }}" alt="Vintage Printing Block #8" class="img-fluid">
            <h4>Vintage Printing Block #8</h4>
            <div class="price-button">
                <p>Price: 240.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
</div>
@endsection
