@extends('layout.master')
@section('content')

<div class="row flex-wrap justify-content-center gx-0 main-products">
    <div class="col-md-6 col-12">
        <div class="content-products">
            <a href="{{ route('consumer') }}">
                <h1 class="heading">
                    Consumer
                </h1>
                <div class="content-products-img">
                    <img src="https://orionlightingpvtltd.com/assets/images/consumer.webp" alt="" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="content-products">
            <a href="{{ route('professional') }}">
                <h1 class="heading">
                    Professional
                </h1>
                <div class="content-products-img">
                    <img src="https://orionlightingpvtltd.com/assets/images/professional.jpg" alt="" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
</div>


@endsection