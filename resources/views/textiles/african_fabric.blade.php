<!-- resources/views/rare-finds/wax-batik-products.blade.php -->

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

<h1 class="text-center my-5" style="color: #D35400;">Our African Wax Batik Products</h1>

<!-- Description -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <p class="text-center" style="font-size: 18px; line-height: 1.5;">
            Explore our exclusive collection of African Wax Batik fabrics, each piece uniquely crafted to showcase vibrant colors and intricate designs. Perfect for fashion, home decor, and more.
        </p>
    </div>
</div>

<!-- List of Products -->
<div class="row">
    <!-- Product 1 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img1.jpg') }}" alt="African Fabric Wax Batik #2044">
            <h4>African Fabric Wax Batik #2044</h4>
            <div class="price-button">
                <p>Price: 299.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img2.jpg') }}" alt="African Fabric Wax Batik #2045">
            <h4>African Fabric Wax Batik #2045</h4>
            <div class="price-button">
                <p>Price: 399.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img3.jpg') }}" alt="African Fabric Wax Batik #2041">
            <h4>African Fabric Wax Batik #2041</h4>
            <div class="price-button">
                <p>Price: 299.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img4.jpg') }}" alt="African Fabric Wax Batik #2043">
            <h4>African Fabric Wax Batik #2043</h4>
            <div class="price-button">
                <p>Price: 359.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img5.jpg') }}" alt="African Fabric Wax Batik #2040">
            <h4>African Fabric Wax Batik #2040</h4>
            <div class="price-button">
                <p>Price: 499.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img6.jpg') }}" alt="African Fabric Wax Batik #2039">
            <h4>African Fabric Wax Batik #2039</h4>
            <div class="price-button">
                <p>Price: 599.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img7.jpg') }}" alt="African Fabric Wax Batik #2039">
            <h4>African Fabric Wax Batik #2039</h4>
            <div class="price-button">
                <p>Price: 599.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="product">
            <img src="{{ asset('images/img8.jpg') }}" alt="African Fabric Wax Batik #2039">
            <h4>African Fabric Wax Batik #2039</h4>
            <div class="price-button">
                <p>Price: 599.00 DH</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 7 -->
   
