@extends('layout.master')
@section('content')

<style>
    .banner {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: #f3f3f3;
        /* Light background shade */
        padding: 20px;
        width: 100%;

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
        width: 100%;
        max-width: 275px;
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
        font-size: 15px;
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
<div class="container-fluid p-0">
    <div class="banner">
        <!-- Text Content -->
        <div class="banner-content">
            <h1>Professional</h1>
        </div>
        <!-- Image -->
        <img src="{{ asset('/assets/images/professional/professional.webp') }}" alt="Cley Pendant">
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        @foreach($products as $product )
        <div class="col-md-3 mb-5">
            <div class="card custom-card">
                <img src="{{ !empty($product->image_url) ? $product->image_url : asset('assets/images/indoor1.jpeg') }}" class="card-img-top" alt="Lighting Chain & Hooks">
                <div class="card-body">
                    <h5>{{$product->type_name}}</h5>
                    <a href="{{ route('product-list', ['id' => $product->id])}}" class="btn btn-light">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection