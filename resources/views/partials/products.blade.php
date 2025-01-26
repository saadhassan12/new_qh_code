@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Slider</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

#slider-container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
    background-color: #fff;
}

#slider {
    width: 90%;
    max-width: 800px;
    height: auto;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.slider-image {
    width: 100%;
    height: 400px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.slider-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    opacity: 0;
    transition: opacity 0.7s ease-in-out;
}

.slider-image img.active {
    opacity: 1;
}

.slider-text {
    margin-top: 15px;
    text-align: center;
    color: #005b96;
    font-size: 45px;
    font-weight: bold;
}

.nav-dots {
    margin-top: 15px;
    display: flex;
    justify-content: center;
    gap: 10px;
}

.nav-dots .dot {
    width: 12px;
    height: 12px;
    background-color: #ccc;
    border-radius: 50%;
    cursor: pointer;
    transition: transform 0.3s ease-in-out, background-color 0.3s;
}

.nav-dots .dot.active {
    transform: scale(1.2);
    background-color:#005b96;
}

@media (max-width: 768px) {
    .slider-image {
        height: 300px;
    }
    .slider-text {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .slider-image {
        height: 200px;
    }
    .slider-text {
        font-size: 1rem;
    }
}
</style>
<body>
<div id="slider-container">
    <div id="slider">
        <div class="slider-image">
            <img src="assets/images/professional.jpg" class="active" alt="Professional">
            <img src="assets/images/consumer.webp" alt="Consumer">
        </div>
        <div class="slider-text">Professional</div>
        <div class="nav-dots">
            <div class="dot active"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    const images = $(".slider-image img");
    const dots = $(".dot");
    const texts = ["Professional", "Consumer"];
    let currentIndex = 0;

    function updateSlider(index) {
        images.removeClass("active").eq(index).addClass("active");
        dots.removeClass("active").eq(index).addClass("active");
        $(".slider-text").text(texts[index]);
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlider(currentIndex);
    }

    dots.click(function () {
        currentIndex = $(this).index();
        updateSlider(currentIndex);
    });

    setInterval(nextSlide, 4500);
});
</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
