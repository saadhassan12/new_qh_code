@extends('layout.master')

@section('content')
    <!-- =============================================
    =           Banner         =
    =============================================  -->
    <section class="website-slider">
        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-md-12">
                    <div class="container-fluid p-0">
                        <div class="content-wrapper">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                        <div class="carousel-overlay"></div>
                                        <video class="d-block w-100" autoplay loop muted>
                                            <source src="{{ asset('/assets/images/VIDEO1.mp4') }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <style>
    .product-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
    }

    .product-card img {
            padding-right: 10px;
      width: 100%;
      height: auto;
      transition: transform 0.3s ease-in-out;
    }

    .product-card:hover img {
      transform: scale(1.1);
    }

    .product-title {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 5px 10px;
      border-radius: 5px;
      font-weight: bold;
      font-size: 1rem;
    }

    .btn-products {
      background-color: #005b96;
      color: white;
      font-size: 1rem;
      padding: 10px 20px;
      border-radius: 5px;
      text-transform: uppercase;
      text-decoration: none;
    }

    .btn-products:hover {
      background-color: #333;
    }
  </style>


  <div class="container mt-5">

     

    <div class="row mt-4  g-4">
        
        
 
    
      <!-- Product 1 -->
      <div class="col-md-4 col-lg-4 mb-4">
        <div class="product-card">
          <img src="{{ asset('/assets/images/images/products/tubel.jpg') }}" alt="Tube LED">
          <a href ="https://qhlightingpakistan.com/product/product-list/7">
          <div class="product-title" style ="color :black">LED Batten Light</div>
          </a>
        </div>
      </div>
      <!-- Product 2 -->
      <div class="col-md-4 col-lg-4 mb-4">
        <div class="product-card">
          <img src="{{ asset('/assets/images/images/products/Panel_light.jpg') }}" alt="LED Panel Light">
          <a href ="https://qhlightingpakistan.com/product/product-list/12">
          <div class="product-title" style ="color :black">LED Panel Light</div>
          </a>
        </div>
      </div>
      
              <div class="col-md-4 col-lg-4 mb-4">
        <h2 style ="color:#005b96; text-align: center;">Products</h2>
        <p style ="margin-bottom: 18px; margin-left: 27px;">Brighten every space with perfect lighting! From cozy living rooms to professional home offices and sleek commercial setups, our lighting solutions elevate décor, boost productivity, and create inviting vibes. Let the right light shine in every corner!</p>
        <a href="https://qhlightingpakistan.com/products" class="btn-products mt-5" style ="margin-left: 27px"> Discover Now</a>
   
    </div>
    
      <!-- Product 3 -->
      <div class="col-md-4 col-lg-4 mb-4">
        <div class="product-card">
          <img src="{{ asset('/assets/images/images/products/led_flood.jpg') }}" alt="LED Flood Light">
          <a href ="https://qhlightingpakistan.com/product/product-list/10">
          <div class="product-title" style ="color :black">LED Flood Light</div>
          </a>
        </div>
      </div>
      <!-- Product 4 -->
      <div class="col-md-4 col-lg-4 mb-4">
        <div class="product-card">
          <img src="{{ asset('/assets/images/images/products/LED_Downlight.jpg') }}" alt="LED Downlight">
          
          <a href = "https://qhlightingpakistan.com/product/product-list/2">
          <div class="product-title" style ="color :black">LED Downlight</div>
          </a>
        </div>
      </div>
     
       <div class="col-md-4 col-lg-4 mb-4">
        <div class="product-card">
          <img src="{{ asset('/assets/images/images/products/led_bulb.jpg') }}" alt="LED Bulb">
           <a href ="https://qhlightingpakistan.com/product/product-list/1">
          <div class="product-title" style ="color :black">LED Bulb</div>
            </a>
        </div>
      </div>
    
    </div>
  </div>

   
@endsection
