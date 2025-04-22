<!-- resources/views/search.blade.php -->

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

    /* Search Bar Styling */
    .search-bar {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    .search-bar input {
        width: 70%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .search-bar button {
        padding: 10px 15px;
        background: #D35400;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 5px;
    }

    .search-bar button:hover {
        background: #A0522D;
    }

    /* Product Card Styling */
    .product {
        background: #E6CCB2;
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
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 5px;
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

<div class="container">
    <h1 class="text-center my-5">Product Search</h1>

    <!-- Search Bar -->
    <div class="search-bar">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search for a product..." required>
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- Product List -->
    <div class="row">
        @if(isset($products) && count($products) > 0)
            @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="product">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}">
                    <h4>{{ $product->title }}</h4>
                    <div class="price-button">
                        <p>Price: {{ $product->price }} DH</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-12 text-center">
                <p>No products found for your search.</p>
            </div>
        @endif
    </div>
</div>
@endsection
