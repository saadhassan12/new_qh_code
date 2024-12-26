@extends('layout.master')

@section('content')
<div class="container-md bootdey-products-list">
    <div class="row gx-0">
        <div class="col-sm-3">
            <div class="sidebar">
                <!-- Consumer Category -->
                <div class="main-category" onclick="toggleFilters('filters1', 'filters2')">
                    Consumer
                    <i class="fa fa-angle-right"></i>
                </div>
                <div id="filters1" style="display: none; padding-left: 20px;">
                    @php
                        $comsumer_tpye_products = getProductTypes(\App\Models\ProductType::CONSUMER_TYPE);
                    @endphp
                    @foreach($comsumer_tpye_products as $product)
                        <a href="{{ route('product-list', ['id' => $product->id]) }}">{{ $product->type_name }}</a><br>
                    @endforeach
                </div>

                <!-- Professional Category -->
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
        </div>

        <div class="col-sm-9" id="js-product-listing">
            <h1 class="consumer-heading py-4">{{ $products->first()->productType->type_name ?? ''}}</h1>
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
