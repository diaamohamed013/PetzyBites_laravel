@extends('master')
@section('page-headTitle')
    Quality Assurance
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

        .qualityAss_content p {
            line-height: 2;
        }

        .qualityAss_content ul li {
            margin-bottom: 10px;
        }
    </style>
@endpush
@section('main-content')
    <main class="main">

        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/);">
            <div class="container position-relative">
                <h1 data-translate="quality_assurance.pageTitle">Quality Assurance</h1>
            </div>
        </div>

        <section id="our-process" class="our-process section py-5" style="background-color: #fff;">
            <div class="container">
                <div data-aos="fade-up" class="qualityAss_content">
                    <h2 data-translate="quality_assurance.process" class="mb-4">PETZYBITES STANDARD</h2>
                    <p data-translate="quality_assurance.process_desc1">
                        We understand that&nbsp;because you love your pet, you take the decision of choosing their food
                        seriously,
                        whether
                        they’re in optimal health&nbsp;or require specialized nutrition. That is why nothing is more
                        important to us
                        than the
                        safety of our ingredients and products.
                    </p>
                    <p data-translate="quality_assurance.process_desc2">
                        Our manufacturing processes adhere to stringent and scientifically advanced food safety
                        protocols. We
                        consistently
                        monitor and test our raw materials, production environment, processes and finished products. By
                        improving
                        performance
                        with advancements in science and technology, we’ve developed a comprehensive food safety system
                        that guides
                        our
                        processes and ensures the quality and safety of every product in the Diamond family. Here is a
                        brief
                        overview of some
                        facets of that system:
                    </p>
                    <h3 class="my-4" data-translate="quality_assurance.process2">ON-SITE PRODUCT TESTING</h3>
                    <p data-translate="quality_assurance.process2_desc1">
                        We test and monitor every critical aspect of the manufacturing process: pre-production,
                        production and
                        post-production.
                    </p>
                    <ul>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc1">3,458 mycotoxin tests per week</li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc2">1,538 microbiological tests per week</li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc3">268 oxidative stability tests per week
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc4">5,520 ingredient nutritional tests per
                            week</li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc5">40,095 finished product nutritional tests
                            per week
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc6">20+ hours of employee safety training per
                            employee
                            per year
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="quality_assurance.benefits_desc7">700+ safety assessments per year</li>
                    </ul>
                    <h3 class="my-4" data-translate="quality_assurance.process3">MYCOTOXIN CONTROL</h3>
                    <p data-translate="quality_assurance.process3_desc1"><strong>3,458</strong> MYCOTOXIN TESTS PER
                        WEEK</p>
                    <p data-translate="quality_assurance.process3_desc2">
                        Aflatoxins are a type of mycotoxin, which are toxic chemicals produced by fungi that can
                        occasionally
                        appear in
                        grains. Before any grains or grain-related ingredients are allowed to enter our manufacturing
                        facilities,
                        they are
                        tested for aflatoxin, vomitoxin/DON and fumonisin. Additionally, we test all finished products
                        prior to
                        release.
                    </p>
                    <h3 class="my-4" data-translate="quality_assurance.process4">MICROBIAL TESTING</h3>
                    <p data-translate="quality_assurance.process4_desc1"><strong>1,538</strong> MICROBIOLOGICAL TESTS
                        PER WEEK</p>
                    <p data-translate="quality_assurance.process4_desc2">
                        We conduct 1,538 microbiological tests every week. All topical palatants and probiotics must
                        have a
                        Certificate of
                        Analysis and prove to be <em>Salmonella</em>-negative before submission to our facilities.
                    </p>
                    <h3 class="my-4" data-translate="quality_assurance.process5">WATER PURIFICATION</h3>
                    <p data-translate="quality_assurance.process5_desc1">
                        Our reverse-osmosis water purification process ensures the water we use is free from
                        microorganisms and any
                        possible
                        contaminants.
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection
