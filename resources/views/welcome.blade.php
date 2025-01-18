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
  .product-heading {
    font-size: 30px;
    font-weight: 700;
    color: #005b96;
  }

  .product-text {
    font-size: 18px;
    font-weight: 400;
    line-height: 26px;
    color: rgb(108 117 125);
    text-align: justify;
    
  }


  .discover-btn {
    padding: 10px 28px;
    color: white;
    font-size: 18px;
    font-weight: 500;
    background-color: #005b96;
    border: none;
    border-radius: 8px;
    margin-top: 16px;
  }

  .product-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
  }

  .img-1 {
    height: 300px;
    /* First image */
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
    width: 100%;
     max-width: 320px;
     border-radius: 15px;

  }

  .img-2 {
    height: 250px;
    /* First image */
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
    width: 100%;
     max-width: 320px;
     border-radius: 15px;

  }

  .img-3 {
    height: 220px;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
    width: 100%;
     max-width: 320px;
     border-radius: 15px;

  }

  .product-wrapper:hover .tuble-img {
    transform: scale(1.1);
    /* Zoom-in effect */
  }

  .product-title {
    position: absolute;
    bottom: 10px;
    left: 10px;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 8px 14px;
    border-radius: 5px;
    font-weight: bold;
    font-size: 18px;
  }
</style>

<body>
  <div class="container mt-5" style="max-width: 1420px;">
    <div class="row">
      <div class="col-md-6">
        <h2 class="product-heading">Products</h2>
        <p class="product-text">Brighten every space with perfect lighting! From cozy living rooms to professional home offices and sleek commercial setups, our lighting solutions elevate décor, boost productivity, and create inviting vibes. Let the right light shine in every corner!</p>
        <a class="discover-btn" type="button" href="/products">Discover Now</a>
      </div>

    </div>
  </div>

  <div class="container mt-5" style="max-width: 1420px;">
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="product-wrapper">
          <img class="tuble-img img-1" src="{{ asset('/assets/images/home/tubel.jpg') }}" alt="tubel">
          <div class="product-title">LED Batten Light</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="product-wrapper">
          <img class="tuble-img img-2"  src="{{ asset('/assets/images/home/Panel_light.webp') }}" alt="tubel">
          <div class="product-title">LED Batten Light</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="product-wrapper">
          <img class="tuble-img img-3"  src="{{ asset('/assets/images/home/roof-bulb.jpg') }}" alt="tubel">
          <div class="product-title">LED Batten Light</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <h2 class="product-heading">Consumer</h2>
        <p class="product-text">Explore QH’s wide range of high-quality consumer lights, from LED bulbs to all kind of consumer lights and find the perfect lighting for your space. Visit now to brighten your world and make your purchase today!</p>
        <a class="discover-btn" type="button" href="/product/products/consumer">Discover Now</a>
      </div>
    </div>
  </div>
  <!--perfessional  -->
  <div class="container mt-5" style="max-width: 1420px;">
    <div class="row">
      <div class="col-md-3 mb-4">
        <h2 class="product-heading">Professional</h2>
        <p class="product-text" style="max-width: 337px;">
          Discover QH's premium professional lighting solutions, from energy-efficient LEDs. Explore now to light up your spaces with quality and elegance!
        </p>
        <a  class="discover-btn" type="button" href="/product/products/professional">Discover Now</a>
      </div>
      <div class="col-md-3 mb-4">
        <div class="product-wrapper">
          <img class="tuble-img img-1"  src="{{ asset('/assets/images/home/perf.jpg') }}" alt="tubel">
          <div class="product-title">LED Batten Light</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="product-wrapper">
          <img class="tuble-img img-2"  src="{{ asset('/assets/images/home/Panel_light.webp') }}" alt="tubel">
          <div class="product-title">LED Batten Light</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="product-wrapper">
          <img class="tuble-img img-3"  src="{{ asset('/assets/images/home/tubel.jpg') }}" alt="tubel">
          <div class="product-title">LED Batten Light</div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


@endsection