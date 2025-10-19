@extends('master')
@section('page-headTitle')
    Home
@endsection
@push('external-code')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y2NR641DWN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y2NR641DWN');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1234424254405711');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1234424254405711&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
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

        #hero-carousel,
        #hero-carousel * {
            direction: ltr !important;
            text-align: left !important;
        }

        #hero-carousel video {
            display: block !important;
            width: 100%;
            height: auto;
        }

        [dir="rtl"] [data-translate="about.title"] {
            text-align: right !important;
        }

        @media (max-width: 767px) {
            #hero {
                min-height: 60vh;
                position: relative;
                overflow: hidden;
            }

            #hero-carousel .carousel-item video {
                width: 100vw;
                height: 60vh;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
            }

            #hero-carousel .carousel-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100vw;
                height: 60vh;
                min-height: 60vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center !important;
                padding: 0 10px;
                z-index: 2;
            }

            #hero-carousel .carousel-container h2 {
                font-size: 1.7rem;
                line-height: 1.18;
                margin-bottom: 12px;
            }

            #hero-carousel .carousel-container p {
                font-size: 1.25rem;
                margin-bottom: 0;
            }
        }

        .header .logo img {
            height: 110px !important;
            max-height: 100%;
            width: auto;
            margin-right: 8px;
        }
    </style>
@endpush

@section('main-content')
    <main class="main">

        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <video src="{{asset('assets/img/Main.mp4')}}" autoplay muted playsinline loop data-aos="fade-in"></video>
                    <div class="carousel-container">
                        <h2 data-translate="hero.title1">Natural Nutrition For Your Beloved Pets</h2>
                        <p data-translate="hero.subtitle1">Because They Deserve The Best Every Day.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <video src="{{asset('assets/img/Main1.mp4')}}" autoplay muted playsinline loop data-aos="fade-in"></video>
                    <div class="carousel-container">
                        <h2 data-translate="hero.title2">Premium Pet Food Made With Care</h2>
                        <p data-translate="hero.subtitle2">Tailored To Keep Tails Wagging And Whiskers Twitching.</p>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section>

        <section id="services" class="services section">

            <div class="container section-title" data-aos="fade-up">
                <h2 data-translate="services.title">SERVICES</h2>
                <p data-translate="services.subtitle">We provide premium quality food for all your beloved pets</p>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">01</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/1.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item1.title">High-Quality Pet
                                        Food</h3>
                                    <p data-translate="services.item1.desc">
                                        We offer premium, nutritious meals made from natural and carefully selected
                                        ingredients to keep your
                                        pets healthy and happy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">02</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/2.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item2.title">Pet Nutrition
                                        Consultations</h3>
                                    <p data-translate="services.item2.desc">
                                        Our experts provide personalized advice to help you choose the best diet
                                        tailored to your pet's age,
                                        breed, and health needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">03</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/3.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item3.title">Health
                                        Supplements</h3>
                                    <p data-translate="services.item3.desc">
                                        Enhance your pet's wellbeing with our range of vitamins and supplements designed
                                        to support
                                        digestion, coat health, and overall vitality.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">04</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/4.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item4.title">Customer Service
                                        & Support</h3>
                                    <p data-translate="services.item4.desc">
                                        Our friendly support team is always ready to assist you with any questions or
                                        concerns, ensuring a
                                        smooth and satisfying experience.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">05</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/5.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item5.title">Free Trials &
                                        Product Samples</h3>
                                    <p data-translate="services.item5.desc">
                                        Try before you buy! We offer free or low-cost samples so your pet can enjoy our
                                        products risk-free.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">06</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/6.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item6.title">Quality
                                        Assurance & Returns</h3>
                                    <p data-translate="services.item6.desc">
                                        We stand behind our products with a satisfaction guarantee and easy return
                                        policy if you're not
                                        completely happy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">07</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/7.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item7.title">Fast & Reliable
                                        Delivery</h3>
                                    <p data-translate="services.item7.desc">
                                        Enjoy quick and dependable shipping services, ensuring your pet's food arrives
                                        fresh and on time, to
                                        your doorstep.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">08</span>
                                <div class="service-item-icon">
                                    <img src="{{asset('assets/img/8.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading" data-translate="services.item8.title">Subscription
                                        Plans</h3>
                                    <p data-translate="services.item8.desc">
                                        Convenient monthly subscriptions that deliver your pet's favorite meals — plus
                                        special discounts for
                                        loyal customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section">

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{asset('assets/img/who.png')}}" alt="Image " class="img-fluid img-overlap"
                                data-aos="zoom-out">
                        </div>
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="content-subtitle text-white opacity-50" data-translate="about.why">WHY CHOOSE
                                US</h3>
                            <h2 class="content-title mb-4" data-translate="about.title">Backed by <strong>Years of
                                    Passion and
                                    Expertise</strong> in Pet Food Manufacturing</h2>
                            <p class="opacity-50" data-translate="about.desc">At PetzyBites, we combine science-backed
                                nutrition with
                                natural ingredients to craft pet food that keeps tails wagging and whiskers happy. Our
                                recipes are
                                formulated by veterinary experts, using only high-quality, ethically sourced ingredients
                                — no fillers,
                                no artificial additives. From puppies to senior pets, we care for every stage of their
                                life with
                                tailored meals that support health, energy, and happiness. Trusted by thousands of pet
                                parents, we don't
                                just feed pets — we nourish family.</p>

                            <div class="row my-5">
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <div>
                                        <h4 class="m-0 h5 text-white" data-translate="about.natural">Natural
                                            Ingredients Only</h4>
                                        <p class="text-white opacity-50" data-translate="about.natural.desc">We use
                                            100% natural,
                                            high-quality ingredients — no fillers, no artificial additives.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <div>
                                        <h4 class="m-0 h5 text-white" data-translate="about.vet">Vet-Approved Recipes
                                        </h4>
                                        <p class="text-white opacity-50" data-translate="about.vet.desc">Our meals are
                                            developed by
                                            veterinary experts to ensure optimal nutrition for every pet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-start">
                                    <div>
                                        <h4 class="m-0 h5 text-white" data-translate="about.tailored">Tailored for All
                                            Life Stages</h4>
                                        <p class="text-white opacity-50" data-translate="about.tailored.desc">Whether
                                            it's a playful puppy
                                            or a senior cat, our food supports health at every stage.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container section-title" data-aos="fade-up">
            <h2 data-translate="factory.title">Our Factory</h2>
            <p data-translate="factory.desc">Here, we turn our love into your pet's food</p>
        </div>

        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                    <img src="{{asset('assets/img/about-factory.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="content-title mb-4" data-translate="factory.advanced">Advanced Manufacturing and
                        Technology</h2>
                    <p class="mb-4" data-translate="factory.advanced.desc">Our factory is fully automated,
                        integrating
                        cutting-edge artificial intelligence technology to optimize every stage of the production
                        process. From
                        precise quality control to efficient packaging, AI-driven systems enable us to maximize
                        accuracy, reduce
                        waste, and maintain exceptional operational standards. This commitment to innovation ensures
                        that our
                        manufacturing is both state-of-the-art and environmentally conscious.</p>
                    <h2 class="content-title mb-4" data-translate="factory.quality">Product Quality</h2>
                    <p class="mb-4" data-translate="factory.quality.desc">We are dedicated to providing premium
                        nutrition for your
                        cats and dogs. Our products are crafted using carefully selected, natural ingredients that meet
                        the highest
                        safety and nutritional standards. Each batch undergoes rigorous testing to guarantee
                        consistency, taste, and
                        balanced nourishment that supports your pets' health and happiness.</p>
                    <h2 class="content-title mb-4" data-translate="factory.safety">Health and Safety</h2>
                    <p class="mb-4" data-translate="factory.safety.desc">Your pet's well-being is our top priority.
                        Our
                        manufacturing processes strictly adhere to international health and safety regulations, ensuring
                        that every
                        product is free from harmful additives or contaminants. Through continuous monitoring and
                        quality assurance,
                        we deliver safe, reliable pet food that you can trust for your beloved companions.</p>

                </div>
            </div>
        </div>

        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <video class="img-fluid" autoplay muted loop playsinline>
                            <source src="{{asset('assets/img/Factory.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="content-title mb-4" data-translate="factory.inside">Inside Our Factory <p
                                data-translate="factory.inside.subtitle">Where Innovation Meets Quality</p>
                        </h2>
                        <p class="mb-4" data-translate="factory.inside.desc">Our journey begins in a fully automated
                            factory,
                            designed with precision, efficiency, and cutting-edge technology. Every product we create
                            goes through a
                            seamless, innovation-driven process — from selecting high-quality ingredients to automated
                            packaging —
                            ensuring excellence, safety, and consistency in every batch. Take a closer look and discover
                            how we bring
                            our vision to life through smart manufacturing.</p>
                        <ul class="list-unstyled list-check">
                            <li data-translate="factory.inside.list1">Fully automated for fast, precise production.
                            </li>
                            <li data-translate="factory.inside.list2">Uses the latest technology for consistent
                                quality.</li>
                            <li data-translate="factory.inside.list3">Strict monitoring ensures safety and hygiene.
                            </li>
                        </ul>

                        <p><a href="about.html" class="btn-cta" data-translate="factory.inside.more">More Details</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services-2" class="services-2 section dark-background">
            <div class="container section-title" data-aos="fade-up">
                <a>
                    <h1 data-translate="brands.title">Our Brands</h1>
                </a>

            </div>
            <div class="brand-container"
                style="display: flex; justify-content: center; align-items: flex-start; gap: 40px; flex-wrap: wrap;">
                <div class="brand101">
                    <div class="circle" style="--clr:#15a74b;">
                        <img class="brand-logo" src="{{asset('assets/img/101logo.png')}}" alt="">
                    </div>
                    <div class="content1">
                        <h2 data-translate="brands.101">101Bites</h2>
                        <p data-translate="brands.101.desc">Dog Brand</p>
                        <a href="https://101bite.com/store" data-translate="brands.101.buy">Buy Now</a>
                    </div>
                    <img src="{{asset('assets/img/Package.png')}}" class="brand_img" alt="">
                </div>
                <div class="brand101">
                    <div class="circle" style="--clr:#15a74b;">
                        <img class="brand-logo" src="{{asset('assets/img/Bessa.png')}}" alt="">
                    </div>
                    <div class="content1">
                        <h2 data-translate="brands.bessa">BessaBites</h2>
                        <p data-translate="brands.bessa.desc">Cat Brand</p>
                        <a href="https://101bite.com/store" data-translate="brands.bessa.buy">Buy Now</a>
                    </div>
                    <img src="{{asset('assets/img/Package1.png')}}" class="brand_img" alt="">
                </div>
                <div class="brand101">
                    <div class="circle" style="--clr:#15a74b;">
                        <img class="brand-logo" src="{{asset('assets/img/doggo.png')}}" alt="">
                    </div>
                    <div class="content1">
                        <h2 data-translate="brands.doggo">Doggo</h2>
                        <p data-translate="brands.doggo.desc">Dog Brand</p>
                        <a href="https://101bite.com/store" data-translate="brands.doggo.buy">Buy Now</a>
                    </div>
                    <img src="{{asset('assets/img/Package2.png')}}" class="brand_img" alt="">
                </div>
                <div class="brand101">
                    <div class="circle" style="--clr:#15a74b;">
                        <img class="brand-logo" src="{{asset('assets/img/mshmsh.png')}}" alt="">
                    </div>
                    <div class="content1">
                        <h2 data-translate="brands.mshmsh">Mshmsh</h2>
                        <p data-translate="brands.mshmsh.desc">Cat Brand</p>
                        <a href="https://101bite.com/store" data-translate="brands.mshmsh.buy">Buy Now</a>
                    </div>
                    <img src="{{asset('assets/img/Package3.png')}}" class="brand_img" alt="">
                </div>
                <div class="brand101">
                    <div class="circle" style="--clr:#15a74b;">
                        <img class="brand-logo" src="{{asset('assets/img/catcaoty_logo.png')}}" alt="">
                    </div>
                    <div class="content1">
                        <h2 data-translate="brands.catcoty">CatCoty</h2>
                        <p data-translate="brands.mshmsh.desc">Cat Brand</p>
                        <a href="https://101bite.com/store" data-translate="brands.mshmsh.buy">Buy Now</a>
                    </div>
                    <img src="{{asset('assets/img/catcoty.jpeg')}}" class="brand_img" alt="">
                </div>
            </div>
        </section>

        <div class="container-rev">

            <div class="contents-wraper">

                <section class="header">
                    <h1 data-translate="reviews.title">Review</h1>
                </section>

                <section class="testRow">

                    <div class="testItem active">
                        <img src="{{asset('assets/img/kiks.jpg')}}">
                        <h3 data-translate="reviews.kiks">Kiks</h3>
                        <h4 data-translate="reviews.kiks.author">Ahmed Khaled</h4>
                        <p data-translate="reviews.kiks.text">My dog gets super excited at mealtime ever since I
                            started feeding him
                            this
                            The ingredients are natural and rich in protein, and it really shows in his energy levels
                            and overall
                            health.
                        </p>
                    </div>

                    <div class="testItem">
                        <img src="{{asset('assets/img/rob.jpg')}}">
                        <h3 data-translate="reviews.rob">Rob</h3>
                        <h4 data-translate="reviews.rob.author">Akram Elhady </h4>
                        <p data-translate="reviews.rob.text">I recently tried this dog food for my pet, and I'm quite
                            satisfied. The
                            ingredients seem high quality, and my dog loves the taste. After a few weeks, I noticed
                            better digestion,
                            more energy, and a shinier coat. </p>
                    </div>

                    <div class="testItem">
                        <img src="{{asset('assets/img/yuki.jpg')}}">
                        <h3 data-translate="reviews.yuki">Yuki</h3>
                        <h4 data-translate="reviews.yuki.author">Nermine Fathy </h4>
                        <p data-translate="reviews.yuki.text">Tried bessa bites and honestly, it was a great
                            experience. My cat is
                            super picky, but she actually liked this one a lot. She's eating better, more active, and
                            her fur looks
                            cleaner and softer. </p>
                    </div>

                    <div class="testItem">
                        <img src="{{asset('assets/img/Bugz.jpg')}}">
                        <h3 data-translate="reviews.bugz">Bugz</h3>
                        <h4 data-translate="reviews.bugz.author">Shrouk Ahmed </h4>
                        <p data-translate="reviews.bugz.text">My tiny dog can't get enough of this food! The little
                            bites are
                            perfect for his small mouth, and he gobbles it up like a champ. Since switching, he's been
                            bouncing around
                            with extra energy . </p>
                    </div>

                    <div class="testItem">
                        <img src="{{asset('assets/img/mosha.jpg')}}">
                        <h3 data-translate="reviews.mosha">Mosha </h3>
                        <h4 data-translate="reviews.mosha.author">Karim Adel </h4>
                        <p data-translate="reviews.mosha.text">My cat tried this food and honestly, I think she's
                            officially spoiled
                            now. She sniffs it like a detective, then devours it like she's on a secret mission. Since
                            starting this,
                            she's been strutting around like she owns the place </p>
                    </div>

                </section>

                <section class="indicators">
                    <div class="dot active" attr='0' onclick="switchTest(this)"></div>
                    <div class="dot" attr='1' onclick="switchTest(this)"></div>
                    <div class="dot" attr='2' onclick="switchTest(this)"></div>
                    <div class="dot" attr='3' onclick="switchTest(this)"></div>
                    <div class="dot" attr='4' onclick="switchTest(this)"></div>
                </section>

            </div>
        </div>

    </main>
@endsection
