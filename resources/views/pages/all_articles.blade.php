@extends('master')
@section('page-headTitle')
    All Articles
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
                <h1 data-translate="all_articles.pageTitle">pet talk</h1>
            </div>
        </div>

        <section id="about-3" class="section py-5">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="content-title articleTitle mb-5" data-translate="all_articles.who">
                            All Articles
                        </h2>
                    </div>
                </div>
                <div class="row" style="row-gap: 45px;">
                    <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <article class="article_box">
                            <div class="article_img">
                                <a href="{{route('site.article')}}" title="A Cat Owner’s Guide to Feline Leukemia Virus (FeLV)">
                                    <img src="{{asset('assets/img/Process3.jpg')}}" alt="title from backend" class="img-fluid">
                                </a>
                            </div>
                            <div class="article_desc">
                                <a href="{{route('site.article')}}" rel="bookmark" data-translate="blog.content_topic1">
                                    A Cat Owner’s Guide to Feline Leukemia Virus (FeLV)
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <article class="article_box">
                            <div class="article_img">
                                <a href="{{route('site.article')}}" title="Common Behavior Issues with Older Dogs">
                                    <img src="{{asset('assets/img/Process2.jpg')}}" alt="title from backend" class="img-fluid">
                                </a>
                            </div>
                            <div class="article_desc">
                                <a href="{{route('site.article')}}" rel="bookmark" data-translate="blog.content_topic2">
                                    Common Behavior Issues with Older Dogs
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <article class="article_box">
                            <div class="article_img">
                                <a href="{{route('site.article')}}" title="Warriors’ Best Friend: Meet Gregory!">
                                    <img src="{{asset('assets/img/Process4.jpg')}}" alt="title from backend" class="img-fluid">
                                </a>
                            </div>
                            <div class="article_desc">
                                <a href="{{route('site.article')}}" rel="bookmark" data-translate="blog.content_topic3">
                                    Warriors’ Best Friend: Meet Gregory!
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <article class="article_box">
                            <div class="article_img">
                                <a href="{{route('site.article')}}" title="When Do Puppies Stop Growing?">
                                    <img src="{{asset('')}}assets/img/Process5.jpg" alt="title from backend" class="img-fluid">
                                </a>
                            </div>
                            <div class="article_desc">
                                <a href="{{route('site.article')}}" rel="bookmark" data-translate="blog.content_topic4">
                                    When Do Puppies Stop Growing?
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
