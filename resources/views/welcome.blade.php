@extends('layout.master')

@section('content')
<!-- =============================================
    =           Banner         =
    =============================================  -->


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
    }

    .controls {
        display: flex;
        margin-top: 20px;
    }

    .controls div {
        padding: 12px 40px;
        cursor: pointer;
        border: 1px solid #fff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        margin: 0 5px;
        border-radius: 10px;
        background-color: #005b96;
        width: 190px;
        text-align: center;
    }

    .controls div.disabled {
        opacity: 0.5;
        cursor: default;
    }

    .slider {
        position: relative;
        width: 100%;
        height: 300px;
    }

    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: red;
        border: 1px solid #fff;
        border-radius: 15px;
        opacity: 0;
        transition: all 0.7s ease-out;
        min-height: 280px;
        box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.15);
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    .slide--active {
        opacity: 1;
        z-index: 9;
    }

    .prev {
        transform: translate(0, -30%) scale(0.8);
    }

    .next {
        transform: translate(0, 30%) scale(0.8);
    }

    .product-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }
    .top-video-section {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        min-height: 700px;
    }

    .top-video-section video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        z-index: 1;
    }
</style>

<body>
<section class="top-video-section">
    <video autoplay loop muted>
      <source src="https://qhlightingpakistan.com/assets/images/VIDEO1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </section>

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="product-heading">Products</h2>
            <p class="product-text">Brighten every space with perfect lighting! From cozy living rooms to professional home offices and sleek commercial setups, our lighting solutions elevate décor, boost productivity, and create inviting vibes. Let the right light shine in every corner!</p>
             <button class="discover-btn">Discover Now</button>
        </div>
      
    </div>
 </div>
 <div class="container mt-5">
    <div class="row gap-5">
        <div class="col-md-6">
            <div class="slider" id="consumer-slider">
                <div class="slide" data-slide="1">
                  <img src="{{ asset('/assets/images/home/tubel.jpg') }}" alt="Slide 1">
                </div>
                <div class="slide" data-slide="2">
                  <img src="{{ asset('/assets/images/home/Panel_light.webp') }}" alt="Slide 2">
                </div>
                <div class="slide" data-slide="3">
                  <img src="{{ asset('/assets/images/home/roof-bulb.jpg') }}" alt="Slide 3">
                </div>
              </div>
              <div class="controls">
                <div id="consumer-back">Back</div>
                <div  id="consumer-forvard">Next</div>
              </div>
        </div>
        <div class="col-md-5 mb-4">
            <h2 class="product-heading">Consumer</h2>
            <p class="product-text">Explore QH’s wide range of high-quality consumer lights, from LED bulbs to all kind of consumer lights  and find the perfect lighting for your space. Visit now to brighten your world and make your purchase today!</p>
             <button class="discover-btn">Discover Now</button>
        </div>
    </div>
 </div>

 <!-- Professional Section -->
 <div class="container mt-5 mb-5">
    <div class="row gap-5">
        <div class="col-md-5 mb-4">
            <h2 class="product-heading">Professional</h2>
            <p class="product-text">
                Discover QH's premium professional lighting solutions,
                from energy-efficient LEDs. Explore now to light up your
                spaces with quality and elegance!
            </p>
             <button class="discover-btn">Discover Now</button>
        </div>
        <div class="col-md-6">
            <div class="slider" id="professional-slider">
                <div class="slide" data-slide="1">
                  <img src="{{ asset('/assets/images/home/perf.jpg') }}" alt="Slide 1">
                </div>
                <div class="slide" data-slide="2">
                  <img src="{{ asset('/assets/images/home/Panel_light.webp') }}" alt="Slide 2">
                </div>
                <div class="slide" data-slide="3">
                  <img src="{{ asset('/assets/images/home/tubel.jpg') }}" alt="Slide 3">
                </div>
              </div>
              <div class="controls">
                <div id="professional-back back">Back</div>
                <div id="professional-forvard forvard">Next</div>
              </div>
        </div>
    </div>
 </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      renderSlider('#consumer-slider', '#consumer-forvard', '#consumer-back');
      renderSlider('#professional-slider', '#professional-forvard', '#professional-back');
    });

    const nextSlide = (sliderId) => {
      let activeSlide = document.querySelector(`${sliderId} .slide--active`);
      let nextSlide = activeSlide.nextElementSibling;
      if (nextSlide) {
        activeSlide.classList.remove('slide--active');
        nextSlide.classList.remove('next');
        nextSlide.classList.add('slide--active');
        renderSlides(sliderId);
        renderBtns(sliderId);
      }
    };

    const renderBtns = (sliderId) => {
      let nextBtn = document.querySelector(`${sliderId} .controls #forvard`);
      let prevBtn = document.querySelector(`${sliderId} .controls #back`);

      let activeSlide = document.querySelector(`${sliderId} .slide--active`);
      let prevSlide = activeSlide.previousElementSibling;
      !prevSlide ? prevBtn.classList.add('disabled'): prevBtn.classList.remove('disabled');

      let nextSlide = activeSlide.nextElementSibling;
      !nextSlide ? nextBtn.classList.add('disabled')
         : nextBtn.classList.remove('disabled');
    };

    const prevSlide = (sliderId) => {
      let activeSlide = document.querySelector(`${sliderId} .slide--active`);
      let prevSlide = activeSlide.previousElementSibling;
      if (prevSlide) {
        activeSlide.classList.remove('slide--active');
        prevSlide.classList.remove('prev');
        prevSlide.classList.add('slide--active');
        renderSlides(sliderId);
        renderBtns(sliderId);
      }
    };

    const renderSlides = (sliderId) => {
      let slides = document.querySelectorAll(`${sliderId} .slide`);
      if (!slides) {
        return;
      }
      let activeSlide = document.querySelector(`${sliderId} .slide--active`);
      if (!activeSlide) {
        activeSlide = slides.item(0);
        activeSlide.classList.add('slide--active');
      }
      slides.forEach(slide => slide.classList.remove('prev', 'next'));

      let prevSlide = activeSlide.previousElementSibling;
      prevSlide && prevSlide.classList.add('prev');

      let nextSlide = activeSlide.nextElementSibling;
      nextSlide && nextSlide.classList.add('next');
    };

    const renderSlider = (sliderId, nextButtonId, prevButtonId) => {
      const slider = document.querySelector(sliderId);
      if (slider) {
        let nextButton = document.querySelector(nextButtonId);
        nextButton.addEventListener('click', function() {
          nextSlide(sliderId);
        });

        let prevButton = document.querySelector(prevButtonId);
        prevButton.addEventListener('click', function() {
          prevSlide(sliderId);
        });
        renderSlides(sliderId);
      }
    };
  </script>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection