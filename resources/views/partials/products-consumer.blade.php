@extends('layout.master')
@section('content')


    


<div class="row p-md-5 gx-0 sub-products">
    <div class="col-lg-12 px-5">
        <h1 class="consumer-heading py-4" style ="color: #005b96;">Consumer</h1>
        <div class="row flex-wrap justify-content-start p-0">
            {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}" class="">
                        <h3 class="consumer-sub-link"></h3>
                        <div class="consumer-sub-img">
                       <img src="{{ !empty($product->image_url) ? $product->image_url : asset('assets/images/indoor1.jpeg') }}">

                        </div>
                    </a>
                </div>
            </div> --}}
            @foreach($products as $product )
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list', ['id' => $product->id])}}">
                        <h3 class="consumer-sub-link">{{$product->type_name}}</h3>
                        <div class="consumer-sub-img">
                       <img src="{{ !empty($product->image_url) ? $product->image_url : asset('assets/images/indoor1.jpeg') }}">

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}">
                        <h3 class="consumer-sub-link">LED Slim Panel Lights</h3>
                        <div class="consumer-sub-img">
                            <img src="{{asset('assets/images/consumer/panel_light.png')}}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}">
                        <h3 class="consumer-sub-link">LED Adjustable Panel Lights</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/adjustable_panel.jpeg"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}">
                        <h3 class="consumer-sub-link">LED Surface Panel</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/surface.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}">
                        <h3 class="consumer-sub-link">LED COB</h3>
                        <div class="consumer-sub-img">
                            <img src="https://orionlightingpvtltd.com/assets/images/consumer/COB.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}">
                        <h3 class="consumer-sub-link">LED Batten Light</h3>
                        <div class="consumer-sub-img">
                            <img src="{{ asset('assets/images/consumer/led-batten.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                <div class="consumer-sub-content">
                    <a href="{{ route('product-list') }}">
                        <h3 class="consumer-sub-link">LED Tube Light</h3>
                        <div class="consumer-sub-img">
                            <img src="{{ asset('assets/images/consumer/led-tubelight.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
