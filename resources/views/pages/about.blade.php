@extends('master')
@section('page-headTitle')
    About Us
@endsection
@push('external-code')
    <style>
        .process-step {
            text-align: center;
            padding: 20px;
        }

        .process-step img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .process-step h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #116530;
            font-weight: 600;
        }

        .process-step p {
            font-size: 1.1rem;
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        .row.gy-4 .col-lg-4 {
            flex: 0 0 calc(33.333% - 20px);
            max-width: calc(33.333% - 20px);
            margin-bottom: 20px;
        }

        .row.gy-4 .col-lg-3 {
            flex: 0 0 calc(33% - 20px);
            max-width: calc(33% - 20px);
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {

            .row.gy-4 .col-lg-4,
            .row.gy-4 .col-lg-3 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .process-step {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            .process-step img {
                width: 100%;
                max-width: 400px;
                margin: 0 auto 15px;
            }

            .process-step h3 {
                font-size: 1.5rem;
                margin-bottom: 10px;
            }

            .process-step p {
                font-size: 1.15rem;
                line-height: 1.7;
                padding: 0 5px;
            }

            .team-card {
                margin: 20px 0;
            }

            .team-message {
                padding: 5px 5px 10px 5px;
                width: 100%;
                max-width: 100%;
            }

            .team-message p {
                font-size: 0.95rem;
                line-height: 1.6;
                margin-bottom: 15px;
            }

            .team-message p:first-child {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }

            .team-message .signature {
                margin-top: 10px;
            }

            .team-message .signature p {
                margin-bottom: 3px;
                font-size: 0.9rem;
            }
        }

        .team-card {
            position: relative;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            background-color: #fff;
            margin: 40px 0;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            min-height: 500px;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(17, 101, 48, 0.3);
        }

        .team-image-section {
            flex: 0 0 35%;
            position: relative;
        }

        .team-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .team-card:hover img {
            transform: scale(1.05);
        }

        .team-info {
            padding: 25px;
            background-color: #fff;
            text-align: center;
            border-right: 3px solid #116530;
        }

        .team-info h3 {
            color: #116530;
            font-size: 1.3rem;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .team-info span {
            color: #666;
            font-size: 1rem;
            display: block;
            margin-bottom: 15px;
        }

        .social-links a {
            color: #116530;
            font-size: 1.1rem;
            margin: 0 8px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #39ff14;
        }

        .team-message {
            flex: 0 0 65%;
            padding: 40px;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .team-message p {
            font-size: 1rem;
            line-height: 1.8;
            color: #444;
            margin: 0 0 20px 0;
            font-style: italic;
            text-align: justify;
        }

        .team-message p:first-child {
            font-size: 1.3rem;
            font-weight: 600;
            color: #116530;
            margin-bottom: 30px;
            font-style: normal;
            text-align: center;
        }

        .team-message p:last-child {
            margin-bottom: 0;
        }

        .team-message .signature {
            margin-top: 15px;
        }

        .team-message .signature p {
            margin-bottom: 5px;
            font-size: 0.95rem;
        }

        .language-dropdown-fixed {
            position: absolute;
            top: 10px;
            right: 30px;
            z-index: 2000;
        }

        .language-dropdown-fixed select {
            padding: 5px 16px 5px 8px;
            font-size: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
            background: #fff;
            color: #222;
            font-weight: bold;
            cursor: pointer;
            outline: none;
            transition: border 0.2s;
        }

        .language-dropdown-fixed select:focus {
            border: 1.5px solid #1a7a3c;
        }

        [dir="rtl"] .language-dropdown-fixed {
            right: auto;
            left: 30px;
        }

        [dir="rtl"] [data-translate^="about."] {
            text-align: right !important;
        }

        [dir="rtl"] #our-journey p {
            text-align: center !important;
        }

        [dir="rtl"] #our-journey h2 {
            text-align: center !important;
        }

        [dir="rtl"] #our-process h2,
        [dir="rtl"] #our-process p {
            text-align: center !important;
        }

        [dir="rtl"] #our-process h3 {
            text-align: center !important;
        }

        [dir="rtl"] #mission-vision h2,
        [dir="rtl"] #mission-vision p {
            text-align: center !important;
        }

        [dir="rtl"] #our-team h2 {
            text-align: center !important;
        }

        [dir="rtl"] .page-title h1 {
            text-align: center !important;
        }

        #mission-vision h2,
        #our-journey h2 {
            color: #fff !important;
        }

        #navmenu.navmenu a:not(.category_links a) {
            font-size: 20px !important;
        }

        .header .logo img {
            height: 110px !important;
            max-height: 110px !important;
            width: auto !important;
            margin-right: 8px !important;
            display: block !important;
        }
    </style>
@endpush
@section('main-content')
    <main class="main">

        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/);">
            <div class="container position-relative">
                <h1 data-translate="about.pageTitle">About Us</h1>
            </div>
        </div>

        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <img src="{{asset('assets/img/aboutnew.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="content-title mb-4" data-translate="about.who">Who we are</h2>
                        <p class="mb-4" data-translate="about.who_desc">
                            We are passionate about creating high-quality, nutritious pet food tailored to meet the
                            unique needs of cats and dogs. Proudly based in Egypt, we combine locally sourced
                            ingredients with advanced production standards to ensure every meal is both delicious and
                            healthy.
                            With a deep understanding of pet nutrition and a commitment to excellence, our mission is to
                            support the well-being of pets across the region. Whether it's for playful kittens or loyal
                            dogs, our products are crafted to deliver the energy, taste, and care they deserve.
                            Driven by love, guided by science — we are more than pet food manufacturers; we are pet
                            lovers dedicated to making a difference.
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <section id="our-journey" class="our-journey section" style="background-color: #116530; text-align: center;">
            <div class="container">
                <div class="row gy-4 justify-content-center align-items-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="content-title mb-4" data-translate="about.journey">Our Journey</h2>
                        <p class="mb-4" data-translate="about.journey_desc">
                            Our journey began with a simple idea: to provide the best nutrition for pets. Over the
                            years, we have grown from a small startup to a leading pet food manufacturer, thanks to our
                            commitment to quality and innovation. Our path has been marked by milestones that reflect
                            our dedication to improving pet health and happiness.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-process" class="our-process section" style="background-color: #fff;">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2 data-translate="about.process">Our Process</h2>
                    <p data-translate="about.process_desc">From raw materials to your doorstep</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-step">
                            <img src="{{asset('assets/img/Process1.png')}}" alt="Raw Materials" class="img-fluid">
                            <h3 data-translate="about.process_step1">Raw Material Selection</h3>
                            <p data-translate="about.process_step1_desc">We carefully select the finest natural
                                ingredients to ensure premium quality pet food.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-step">
                            <img src="{{asset('assets/img/Process2.jpg')}}" alt="Production" class="img-fluid">
                            <h3 data-translate="about.process_step2">Mixing & Preparation</h3>
                            <p data-translate="about.process_step2_desc">Ingredients are precisely blended to create a
                                balanced and nutritious formula.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-step">
                            <img src="{{asset('assets/img/Process3.jpg')}}" alt="Packaging" class="img-fluid">
                            <h3 data-translate="about.process_step3">Cooking & Extrusion</h3>
                            <p data-translate="about.process_step3_desc">The mixture is cooked and shaped into uniform
                                kibble pieces using advanced extrusion technology.</p>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="process-step">
                            <img src="{{asset('assets/img/Process4.jpg')}}" alt="Quality Control" class="img-fluid">
                            <h3 data-translate="about.process_step4">Drying & Cooling</h3>
                            <p data-translate="about.process_step4_desc">Kibble is dried and cooled to lock in
                                freshness and maintain optimal texture.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="process-step">
                            <img src="{{asset('assets/img/Process6.jpg')}}" alt="Delivery" class="img-fluid">
                            <h3 data-translate="about.process_step5">Quality Control</h3>
                            <p data-translate="about.process_step5_desc">Strict testing and inspection ensure every
                                batch meets our high safety and quality standards.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="process-step">
                            <img src="{{asset('assets/img/Process7.jpg')}}" alt="Customer Service" class="img-fluid">
                            <h3 data-translate="about.process_step6">Packaging</h3>
                            <p data-translate="about.process_step6_desc">Products are carefully packed using automated
                                systems to ensure freshness and quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mission-vision" class="mission-vision section"
            style="background-color: #116530; color: white; text-align: center; padding: 35px 0;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 mb-4" data-aos="fade-up" style="background-color: #116530;">
                        <h2 style="color: white;" data-translate="about.mission">Our Mission</h2>
                        <p data-translate="about.mission_desc">To provide high-quality, nutritious pet food that
                            supports the health and happiness of pets. We are committed to innovation, sustainability,
                            and excellence in everything we do.</p>
                    </div>
                    <div class="col-lg-5 mb-4" data-aos="fade-up" data-aos-delay="100"
                        style="background-color: #116530;">
                        <h2 style="color: white;" data-translate="about.vision">Our Vision</h2>
                        <p data-translate="about.vision_desc">To be a global leader in pet nutrition, recognized for
                            our dedication to quality, our passion for pets, and our commitment to making a positive
                            impact on the world.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-team" class="our-team section" style="padding: 40px 0;">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2 data-translate="about.ceo">CEO</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-card">
                            <div class="team-image-section">
                                <img src="{{asset('assets/img/ceo.jpg')}}" alt="ceo" class="img-fluid">
                                <div class="team-info">
                                    <h3>Dr.Mohamed El-Refa'ee</h3>
                                    <span>CEO</span>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-message">
                                <p data-translate="about.ceo_message">A Message from the CEO</p>
                                <p data-translate="about.ceo_text1">As a veterinarian and lifelong animal lover, I
                                    founded PetzyBites with one goal in mind: to give pets the high-quality nutrition
                                    they truly deserve. Over the years, I've seen firsthand how the right diet can
                                    transform a pet's health, energy, and happiness. That's why PetzyBites was born—to
                                    offer pet parents a trustworthy, nutritious, and delicious option backed by science
                                    and guided by genuine care.</p>
                                <p data-translate="about.ceo_text2">At PetzyBites, we carefully select premium
                                    ingredients to craft recipes that support your pet's wellbeing from the inside out.
                                    We don't believe in fillers, shortcuts, or compromises—only real, wholesome food
                                    designed to fuel vibrant, healthy lives.</p>
                                <p data-translate="about.ceo_text3">Thank you for trusting us with your pet's
                                    nutrition. From one pet lover to another, I promise we'll always put their health
                                    first.</p>
                                <div class="signature">
                                    <p data-translate="about.ceo_regards">Warm regards,</p>
                                    <p>Dr.Mohamed El-Refa'ee</p>
                                    <p data-translate="about.ceo_title">DVM & Founder</p>
                                    <p data-translate="footer.company">PetzyBites Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
