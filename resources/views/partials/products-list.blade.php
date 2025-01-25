@extends('layout.master')
@section('content')

<!-- <div class="row gx-0">
        <div class="col-sm-3">
            <div class="sidebar">

                <div class="main-category" onclick="toggleFilters('filters1', 'filters2')">
                    Consumer
                    <i class="fa fa-angle-right"></i>
                </div>
                < id="filters1" style="display: none; padding-left: 20px;">
                    @php
                    $comsumer_tpye_products = getProductTypes(\App\Models\ProductType::CONSUMER_TYPE);
                    @endphp
                    @foreach($comsumer_tpye_products as $product)
                    <a href="{{ route('product-list', ['id' => $product->id]) }}">{{ $product->type_name }}</a><br>
                    @endforeach
            </div>
            <div class="main-category" onclick="toggleFilters('filters2', 'filters1')">
                Professional
                <i class="fa fa-angle-right"></i>
            </div>
            <div id="filters2" style="display: none; padding-left: 20px;">
                @php
                $professional_tpye_products = getProductTypes(\App\Models\ProductType::PROFESSIONAL_TYPE);
                @endphp
                @foreach($professional_tpye_products as $product)
                <a href="{{ route('product-list', ['id' => $product->id]) }}">{{ $product->type_name }}</a><br>
                @endforeach
            </div>
        </div>
    </div> -->

<style>
    .banner {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: #f3f3f3;
        /* Light background shade */
        padding: 20px;

    }
    @media only screen and (max-width: 768px) {
        .banner{
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 10px;
        }
        .banner-content h1 {
    color: #005b96 !important;
    font-size: 50px !important;
    margin-bottom: 10px !important;
    font-weight: 700 !important;
}
.custom-card{
 width: 100%;
 border: none;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 100% !important
    

    }
}

    .banner-content h1 {
        color: #005b96;
        font-size: 75px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .banner-content p {
        color: #005b96;
        /* Text color */
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .banner-content button {
        background-color: #005b96;
        /* Button color */
        color: #ffffff;
        /* Text color for the button */
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        width: 200px;
        font-weight: 700;

    }

    .banner-content button:hover {
        background-color: #003f67;
        /* Darker shade for hover effect */
    }

    .banner img {
        max-width: 600px;
        border-radius: 10px;
        width: 100%;
    }

    .custom-card {
        border: none;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-card img {
        height: 240px;
        object-fit: contain;
        width: 100%;
        max-width: 250px;
        margin: auto;

    }
    .custom-card .card-body {
        background-color: #005b96;
        text-align: center;
    }
    .custom-card h5 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #ffffff;
    }
    .custom-card button {
        background-color: #ffffff;
        color: black;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.5s ease;
        transition: background-color 0.3s ease-in-out;
    }
    .custom-card button:hover {
        background-color: #555;
    }
</style>
@if (!empty($products->first()->productType))
<div class="container-fluid p-0">
    <div class="banner">
        <!-- Text Content -->
        <div class="banner-content">
            <h1 class="consumer-heading py-4">{{ $products->first()->productType->type_name ?? ''}}</h1>
            <a href="{{ route('model_specification', ['id' => $products->first()->productType->id])}}" class="btn btn" style="background-color:#005b96;color:#ffffff">
                Shop Now
            </a>
        </div>
        <!-- Image -->
        <img src="{{$products->first()->productType->image_url}}" alt="Cley Pendant" style="max-width: 300px;">
    </div>
</div>
@endif

<div class="container-md bootdey-products-list">
    <div class="col-sm-12" id="js-product-listing">

        <div class="row flex-wrap justify-content-start p-0">
            @if($products->isEmpty())
            <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                <h1>Data not found</h1>
            </div>
            @else
            @foreach($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('model_specification', ['id' => $product->id]) }}">
                        <h3 class="consumer-sub-link">{{ $product->product_model }}</h3>
                        <div class="consumer-sub-img">
                            <img src="{{ !empty($product->image_url) ? $product->image_url : asset('assets/images/indoor1.jpeg') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Function to toggle the visibility of category filters
    function toggleFilters(showId, hideId) {
        // Hide the other filter list if it is visible
        var hideFilters = document.getElementById(hideId);
        if (hideFilters.style.display === 'block') {
            hideFilters.style.display = 'none';
        }

        // Toggle the visibility of the clicked filter
        var filters = document.getElementById(showId);
        filters.style.display = (filters.style.display === 'none') ? 'block' : 'none';
    }
</script>