@extends('layout.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
/* 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
        } */

        /* body {
            width: 100%;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: 'Poppins', sans-serif;
        } */

        .containerabout {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
            grid-gap: 60px;
            padding: 35px 0;
        }

        .contentLeft,
        .contentRight {
            width: 100%;
        }

        .contentLeft .row {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
        }

        .contentLeft .row .imgWrapper {
            width: 100%;
            height: 450px;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.15);
        }

        .contentLeft .row .imgWrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            user-select: none;
            transition: 0.3s ease;
        }

        .contentLeft .row .imgWrapper:hover img {
            transform: scale(1.5);
        }

        .contentLeft .row .imgWrapper:nth-child(odd) {
            transform: translateY(-20px);
        }

        .contentLeft .row .imgWrapper:nth-child(even) {
            transform: translateY(20px);
        }

        .contentRight .content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .contentRight .content h4 {
            font-size: 30px;
            font-weight: 700;
            color: #005b96;
        }

        .contentRight .content h2 {
            font-size: 40px;
            color: #1e272e;
            font-weight: 600;
        }

        .contentRight .content p {
            padding-bottom: 10px;
            font-size: 18px;
            font-weight: 400;
            line-height: 30px;
            color: rgb(108 117 125);
            text-align: justify;
        }

        .contentRight .content a {
            display: inline-block;
            text-decoration: none;
            font-size: 16px;
            letter-spacing: 1px;
            padding: 13px 30px;
            color: #fff;
            background: #d35400;
            border-radius: 8px;
            user-select: none;
        }

        @media(max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .contentLeft .row {
                grid-template-columns: repeat(2, 1fr);
        width: 100%;
        max-width: 500px;
        margin: auto;
            }
            .container .card .imgBx {
                position: relative !important;
            }
              .container .card .imgBx img,{
                position: absolute;
            }

            .contentLeft .row .imgWrapper {
                height: 150px;
            }

            .contentRight .content h4 {
                font-size: 18px;
            }

            .contentRight .content h2 {
                font-size: 30px;
            }
        }

        .showcase {
            width: 100%;
            height: 500px;
            position: relative;
            color: white;
            text-align: center;
        }

        .showcase img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99
        }

        .showcase .overlay {
            width: 100%;
            height: 500px;
            background-color: rgba(0, 35, 82, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 999
        }

        .showcase h2 {
            margin-top: 170px;
            font-size: 3em;
        }

        .showcase p {
            margin-top: 8px;
            font-size: 1.2em;
        }

        /*  */
        .about-wrapper {
            position: relative;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: auto;
            width: 100%;
        }

        .container .card {
            min-height: 340px;
            background: #fff;
            display: flex;
            width: 45%;
            margin: 30px 0;
            height: 100%;
            box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.15);
        }

        .container .card .imgBx {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #333;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: 0.5s ease-in-out;
            width: 100%;
        }

        .container .card:hover .imgBx {
            width: 150px;
            height: 150px;
            left: -75px;
            top: calc(50% - 75px);
            transition: 0.5s ease-in-out;
            background: #333;
            border-radius: 5px;
        }

        .container .card .imgBx:before {

            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            font-style: 6em;
            color: rgba(255, 255, 255, .05);
            font-weight: 700;
        }

        .container .card .imgBx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease-in-out;

        }

        .container .card:hover .imgBx img {
            width: 100%;
        }

        .container .card .content {
            position: absolute;
            right: 0;
            width: calc(100% - 75px);
            height: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .card .content h3 {
            margin-bottom: 5px;
            font-size: 24px;
        }

        .container .card .content a {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background: #333;
            text-decoration: none;
            color: #fff;
            padding: 10px 15px 10px 15px;
            border-radius: 5px;
        }
        @media (max-width: 992px) {
            .container {
                width: 100%;
                flex-direction: column;
                align-items: center;
            }
            .container .card {
                width: 100%;
                height: 100%;
            }
        }

        @media (max-width: 760px) {
            .container .card {
                max-width: 300px;
                flex-direction: column;
            }
            .container .card .imgBx,
            .container .card:hover .imgBx {
                width: 100%;
                height: 200px;
                left: 0;
                top: calc(50% - 75px);
                transition: 0.5s ease-in-out;
            }

            .container .card .imgBx img,
            .container .card:hover .imgBx img {
                /* max-width: 100px */
            }

            .container .card .content {
                position: relative;
                width: 100%;
            }
        }

        .content-p {
            font-size: 16px;
            font-weight: 400;
            line-height: 26px;
            color: rgb(108 117 125);
            text-align: justify;
        }
    </style>
</head>
<section class="showcase mb-5">
    <img src="{{ asset('/assets/images/about_us/about1.PNG') }}" alt="Picture">
    <div class="overlay">
        <h2>ABOUT US</h2>
    </div>
</section>
<div class="container containerabout">
    <div class="contentLeft">
        <div class="row">
            <div class="imgWrapper">
                <img src="{{ asset('/assets/images/about_us/about1.PNG') }}" alt="">
            </div>
            <div class="imgWrapper">
                <img src="{{ asset('/assets/images/about_us/about1.PNG') }}" alt="">
            </div>
            <div class="imgWrapper">
                <img src="{{ asset('/assets/images/about_us/about1.PNG') }}" alt="">
            </div>
            <div class="imgWrapper">
                <img src="{{ asset('/assets/images/about_us/about1.PNG') }}" alt="">
            </div>
        </div>
    </div>
    <div class="contentRight">
        <div class="content">
            <h4>Welcome To</h4>
            <h2>QH LIGHTING ABOUT US</h2>
            <p>QHLighting a leading LED lighting manufacturer with a rich history dating back to 1993. Our 70,000 square meter factory in FoShan mainly provides customers with OEM LED Bulb、LED Panel、LED Lighting Fixture. At QHLighting, we are committed to providing high quality products at an affordable cost, ensuring excellence at all times. The primary goal is to maintain the trust of our customers. In the SMT workshop, high-speed production SMT machines for the production of LED Bulb and LED Panel SKD, with a monthly production capacity of up to 2 million pcs. </p>
        </div>
    </div>
</div>

<body>
    <div class="container about-wrapper">
        <div class="card">
            <div class="imgBx" data-taxt="Design">
                <img src="{{ asset('/assets/images/about_us/about1.PNG') }}" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>SMT WorkShop</h3>
                    <p class="content-p">
                        Our assembly workshop has 2 advanced automatic assembly lines with a daily production capacity of up to 50,000Abulb and Tbulb. To ensure the excellent quality of our products, we have set up 15 minute aging process.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="imgBx" data-taxt="Code">
                <img src="{{ asset('/assets/images/about_us/about2.PNG') }}" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>Assembly workshop</h3>
                    <p class="content-p">
                        QHLighting research and development team includes 5 experienced engineers. Specialist lighting test equipment including EMC machines,
                        oscilloscopes and anti-surge machines are available in our laboratory. Prior to production, all product solutions undergo extensive
                        testing via manufacturing samples to guarantee their safety and reliability. Furthermore, our products conform to IEC,
                        high-performance, and safety standards.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="imgBx" data-taxt="startup">
                <img src="{{ asset('/assets/images/about_us/about3.PNG') }}" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>R&D Center</h3>
                    <p class="content-p">
                        We will test and debug the photoelectric parameters of all products, including brightness, color temperature, color rendering index, etc., to achieve accurate light performance.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="imgBx" data-taxt="Money">
                <img src="{{ asset('/assets/images/about_us/about4.PNG') }}" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>Integrating sphere laboratory</h3>
                    <p class="content-p">
                        We will put the sample in an oven at 75-80 degrees for three months to test the working status of each component to ensure that the product can operate normally even at high temperatures.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection