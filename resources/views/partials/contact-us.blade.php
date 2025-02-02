@extends('layout.master')
@section('content')
<section class="py-5 my-5 contact-us">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 45px;
            color: #000;
            margin-bottom: 18px;
            font-weight: 600;
        }
        @media(max-width: 768px) {
            .infor-left ul{
                padding: 0;
                margin: 18px 0 0 0;
            }
            .information .infor-top h3{
                color: #fff;
                margin-top: 20px;
            }
            .contact-wrapper{
                padding: 0px 33px;
            }
            .map-container{
                width: 100% !important;
                height:auto !important
            }
            .iframe-contact-page {
        width: 100% !important;
        height: 100% !important;
        min-width: 390px;
        min-height: 245px !important;
    }
   
            h1 {
            font-size: 27px;
            color: #000;
            margin-bottom: 18px;
            font-weight: 600;
        }
        p {
            font-size: 15px !important;
            color: #333 !important;
            font-weight: 400 !important;
            text-align: justify !important;
        }
        .form-container{
            background-color: var(--e-global-color-vamtam_accent_5) !important;
    margin: 0px 26px 0px 0px !important;
    padding: 0px 050px 24px 40px !important;
    border-radius: 40px 40px 40px 40px !important;
    box-shadow: 10px 7px 0px 0px #005b96 !important;
        }
        }
        @media (max-width: 992px) {
            iframe {
    width: 100% !important;
    height: 100% !important;
    max-width: 200px !important;
    max-height: 100px !important;
    }
    }

        p {
            font-size: 18px;
            color: #333;
            font-weight: 600;
            text-align: justify;
        }

        .map-container {
            border-radius: 5px;
            overflow: hidden;
        }

        .form-container {
            background-color: var(--e-global-color-vamtam_accent_5) !important;
            margin: 0px 0100px 0px 0px;
            padding: 0px 050px 24px 40px;
            border-radius: 40px 40px 40px 40px;
            box-shadow: 10px 7px 0px 0px #005b96;

        }

        .form-container h3 {
            color: #000;
        }

        .form-container .form-control {
            border-radius: 16px;
            padding: 15px;
        }

        .form-control:hover {
            box-shadow: none;
            outline: none;
        }

        .form-container .btn-dark {
            background-color: #005b96 !important;
            border: none;
            font-size: 1rem;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .form-container .btn-dark:hover {
            background-color: #333;
        }

        .number-text {
            font-size: 14px;
            font-weight: 400;
            color: #000;

        }

        .number-mail {
            font-size: 18px;
            font-weight: 600;
        }

        .icon-wrapper {
            background-color: #F7F7FA;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-icon-wrpper {
            display: flex;
            gap: 18px;
            align-items: center;
        }

        .address {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 0;
        }

        .view {
            font-size: 20px;
            font-weight: 600;
        }

        .map-container {
            width: 100%;
            height: 75vh;
            /* Full-screen height */
        }

        iframe {
            border: none;
        }
    </style>

    <body>
        <div class="container my-5">
            <div class="text-center mb-4">
                <h1>We’re here to help you grow</h1>
                <p>
                    Feel free to reach out to us through your preferred method of contact. We are eager to connect with you
                    and <br>explore how our team can contribute to your success.
                </p>
            </div>
            <div class="conainer">
            <div class="row">
                <div class="col-md-6">
                    <div class="map-container mb-4">
                        <iframe class="iframe-contact-page"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1692.6194859351736!2d113.1615243!3d22.8088828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3402e52191c5395d%3A0x56b5a5142e4cd8b7!2sNo.%209%2C%20Shunde%20Lighting%20Industrial%20Zone%2C%20Shunde%20District%2C%20Foshan%2C%20Guangdong%2C%20China!5e0!3m2!1sen!2s!4v1673050657596!5m2!1sen!2s"
                            width="100%"
                            height="100%"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="row contact-wrapper">
                        <div class="col-md-6">
                            <p class="number-text">Phone number:</p>
                            <h5 class="number-mail">042 37510711</h5>
                        </div>
                        <div class="col-md-6">
                            <p class="number-text"> Email address:</p>
                            <h5 class="number-mail">info@qhlightingpakistan.com</h5>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="main-icon-wrpper">
                                <a href="https://www.google.com/maps/place/Shunde+Lighting+Industrial+Zone,+Shunde+District,+Foshan,+Guangdong,+China"
                                    target="_blank"
                                    title="Open Map Location">
                                    <div class="icon-wrapper">
                                        <img width="40" height="40" src="https://img.icons8.com/color/48/google-maps-new.png" alt="Google Maps Icon" />
                                    </div>
                                </a>
                                <h3 class="address">LAL BADSHAH ROAD, Multan Rd,<br> Khanpur, Lahore, Punjab 53710</h3>
                            </div>
                        </div>
                        <div class="col-8 mt-5">
                            <div class="main-icon-wrpper">
                                <a href="https://www.google.com/maps/place/Shunde+Lighting+Industrial+Zone,+Shunde+District,+Foshan,+Guangdong,+China"
                                    target="_blank"
                                    title="Open Map Location">
                                    <div class="icon-wrapper">
                                        <img width="40" height="40" src="https://img.icons8.com/color/48/google-maps-new.png" alt="Google Maps Icon" />
                                    </div>
                                </a>
                                <h3 class="address">No. 9, Shunde Lighting Industrial Zone, Shunde District, Foshan, Guangdong, China</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-container">
                        <h3 class="mb-3">Let’s get started with your project</h3>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Company name" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Phone number" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="What can we help you with?" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">GET IN TOUCH</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</section>
@endsection