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
            {{-- <h1 class="consumer-heading py-4 px-0"> {{$product->productType->type_name}}</h1> --}}
            <div class="row flex-wrap justify-content-start p-0">
          <h1 class="consumer-heading py-4">{{ $specifications->first()->product_model ?? ''}}</h1>

           
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A55/A60 A2B Series with 3 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719819945_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}
             
                @foreach ($specifications as $product )
                    
               
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('detail',[ 'id'=>$product->id]) }}">
                            <h3 class="consumer-sub-link">{{$product->type}}</h3>
                            <div class="consumer-sub-img">
                                {{-- <img src="https://orionlightingpvtltd.com/storage/images/products/1719821434_1.png" --}}
                                    {{-- alt=""> --}}
                                    <img src="{{ asset('storage/images/products/' . $product->image_url) }}" alt="Product Image">


            {{-- <img src="{{ !empty($product->image_url) ? $product->image_url : asset('storage/images/products') }}"> --}}

                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

                {{-- <div><h1> data not found</h1></div> --}}
              
                 {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A2B-A55-5W with 5 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719821450_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A2B-A60-3W with 3 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719821467_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A2B-A60-5W with 5 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719821496_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}

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
