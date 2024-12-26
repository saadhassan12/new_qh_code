@extends('layout.master')

@section('content')

<style>
    .keep-all-text {
        word-break: keep-all;
    }
</style>
<section class="py-3 py-md-5 about-us">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5 order-2 order-lg-1">
                <img class="img-fluid about-img" loading="lazy" src="{{ asset('/assets/images/about_us/about1.PNG') }}"
                    alt="About Orion Lighting">
            </div>
            <div class="col-12 col-lg-6 col-xl-7 order-1 order-lg-2">
                <div class="row justify-content-xl-center gx-0 p-3">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">QH LIGHTING ABOUT US</h2>
                        <p class="text-secondary mb-3  keep-all-text">QHLighting a leading LED lighting manufacturer with a
                            rich history dating back to 1993. Our 70,000 square meter factory in FoShan mainly provides
                            customers with OEM LED Bulb、LED Panel、LED Lighting Fixture. At QHLighting, we are committed
                            to providing high quality products at an affordable cost, ensuring excellence at all times.
                            The primary goal  is to maintain the trust of our customers.
                         In the SMT workshop, high-speed production SMT machines for the production of
                            LED Bulb and LED Panel SKD, with a monthly production capacity of up to 2 million pcs.</p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5 order-1 order-lg-2">
                <img class="img-fluid about-img" loading="lazy" src="{{ asset('/assets/images/about_us/about2.PNG') }}"
                    alt="About Orion Lighting">
            </div>
            <div class="col-12 col-lg-6 col-xl-7 order-2 order-lg-1">
                <div class="row justify-content-xl-center gx-0 p-3">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">SMT WorkShop</h2>
                        <p class=" text-secondary mb-3">Our assembly workshop has 2 advanced automatic assembly
                            lines with a daily production capacity of up to 50,000Abulb and Tbulb. To ensure the
                            excellent quality of our products, we have set up 15 minute aging process.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5 order-2 order-lg-1">
                <img class="img-fluid about-img" loading="lazy" src="{{ asset('/assets/images/about_us/about3.PNG') }}"
                    alt="About Orion Lighting">
            </div>
            <div class="col-12 col-lg-6 col-xl-7 order-1 order-lg-2">
                <div class="row justify-content-xl-center gx-0 p-3">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">Assembly workshop</h2>
                        <p class=" text-secondary mb-3  keep-all-text">QHLighting research and development team includes 5 experienced engineers. Specialist lighting test equipment including EMC machines, oscilloscopes and anti-surge machines are available in our laboratory. Prior to production, all product solutions undergo extensive testing via manufacturing samples to guarantee their safety and reliability. Furthermore, our products conform to IEC, high-performance, and safety standards. QHLighting currently exports to over 100 countries worldwide and our engineers have the ability to quickly design product solutions according to different market needs.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5 order-1 order-lg-2">
                <img class="img-fluid about-img" loading="lazy" src="{{ asset('/assets/images/about_us/about4.PNG') }}"
                    alt="About Orion Lighting">
            </div>
            <div class="col-12 col-lg-6 col-xl-7 order-2 order-lg-1">
                <div class="row justify-content-xl-center gx-0 p-3">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">R&D Center</h2>
                        <p class="text-secondary mb-3  keep-all-text">We will test and debug the photoelectric parameters of all products, including brightness, color temperature, color rendering index, etc., to achieve accurate light performance.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5 order-2 order-lg-1">
                <img class="img-fluid about-img" loading="lazy" src="{{ asset('/assets/images/about_us/about5.PNG') }}"
                    alt="About Orion Lighting">
            </div>
            <div class="col-12 col-lg-6 col-xl-7 order-1 order-lg-2">
                <div class="row justify-content-xl-center gx-0 p-3">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">Integrating sphere laboratory</h2>
                        <p class=" text-secondary mb-3  keep-all-text">We will put the sample in an oven at 75-80 degrees for three months to test the working status of each component to ensure that the product can operate normally even at high temperatures.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection