@extends('master')
@section('page-headTitle')
    Nutritional Integrity
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
                <h1 data-translate="bag.link1">Nutritional Integrity</h1>
            </div>
        </div>

        <section class="our-process section py-5" style="background-color: #fff;">
            <div class="container">
                <div data-aos="fade-up" class="qualityAss_content">
                    <h2 data-translate="nutritional_integrity.desc" class="mb-4">NUTRITION WITH A PURPOSE</h2>
                    <p data-translate="nutritional_integrity.desc2">
                        We only produce foods we’d be proud to feed our own pet. Strong relationships with our trusted
                        suppliers ensure we only
                        source quality ingredients. These foods were developed using our proprietary formulation
                        technology and a team of
                        experts and scientists incorporating the latest research from many disciplines: veterinary
                        medicine (DVMs), pet food
                        nutrition (PhD), food microbiology (PhD), as well as food production and food science. Our
                        formulas are carefully
                        developed to meet the dietary needs of dogs and cats, including many that require specialized
                        diets. Among Diamond,
                        Diamond Naturals, Diamond Naturals Grain-Free*, Diamond CARE and Diamond Pro89, we offer:
                    </p>
                    <ul>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc1">Small and large dog breed formulas
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc2">Formulas with real meat as the first
                            ingredient</li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc3">All life stages formulas</li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc4">Formulas for puppies and senior dogs
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc5">Formulas to enhance skin and coat
                            health
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc6">Grain-free formulation for dogs
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet"
                            data-translate="nutritional_integrity.benefits_desc7">Indoor and active cat formulas</li>
                    </ul>
                    <p data-translate="nutritional_integrity.desc3">
                        With a variety of options and ingredients, including superfoods, whole grains and probiotics in
                        select formulas, you can
                        choose the diet most appropriate for your dog or cat’s health needs and stage in life.
                    </p>
                    <p data-translate="nutritional_integrity.desc4">
                        *The facility in which this food is made also makes food that may contain other ingredients,
                        such as grains. Trace
                        amounts of these other ingredients may be present.
                    </p>
                </div>
            </div>
        </section>

        <section class="our-process section py-5 dark-background text-white">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 data-translate="superFoods.desc" class="mb-4" style="color: #fff !important;">SUPERFOODS
                        FOR A SUPERIOR NUTRITION</h2>
                    <p data-translate="superFoods.desc2">
                        Superfoods are foods that are particularly high in nutritional value. These ingredients are
                        added to Diamond Naturals
                        dry and select canned food recipes as sources of key nutrients such as antioxidants, vitamins,
                        minerals, fatty acids and
                        proteins. When combined, superfoods help provide more complete nutrition for your pet.
                    </p>
                    <div class="superFoodsTabs mt-5">
                        <ul class="nav nav-pills mb-3 px-0" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-Quinoa-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Quinoa" type="button" role="tab"
                                    aria-controls="pills-Quinoa" aria-selected="true"
                                    data-translate="superFoods.quinoa">Quinoa</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Blueberries-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Blueberries" type="button" role="tab"
                                    aria-controls="pills-Blueberries" aria-selected="false"
                                    data-translate="superFoods.blueberries">Blueberries</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Coconut-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Coconut" type="button" role="tab"
                                    aria-controls="pills-Coconut" aria-selected="false"
                                    data-translate="superFoods.coconut">Coconut</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Kale-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Kale" type="button" role="tab" aria-controls="pills-Kale"
                                    aria-selected="false" data-translate="superFoods.kale">Kale</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Oranges-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Oranges" type="button" role="tab"
                                    aria-controls="pills-Oranges" aria-selected="false"
                                    data-translate="superFoods.oranges">Oranges</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Carrots-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Carrots" type="button" role="tab"
                                    aria-controls="pills-Carrots" aria-selected="false"
                                    data-translate="superFoods.carrots">Carrots</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-Quinoa" role="tabpanel"
                                aria-labelledby="pills-Quinoa-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans1">
                                            <strong>Antioxidants&nbsp;</strong>&nbsp;– for overall health
                                        </p>
                                        <p data-translate="superFoods.quinoa_ans2"><strong>Low or No
                                                Fat&nbsp;</strong>– supports lean body condition</p>
                                        <p data-translate="superFoods.quinoa_ans3"><strong>Fiber&nbsp;</strong>–
                                            supports healthy digestion</p>
                                        <p data-translate="superFoods.quinoa_ans4"><strong>Iron&nbsp;</strong>– for
                                            blood, muscle &amp; brain function</p>
                                        <p data-translate="superFoods.quinoa_ans5"><strong>Lean Protein</strong> –
                                            supports healthy muscles</p>
                                        <p data-translate="superFoods.quinoa_ans6"><strong>Vitamins A, E &amp;
                                                C&nbsp;</strong>– support healthy immunity</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans7"><strong>Healthy Fat&nbsp;</strong>–
                                            supplies energy &amp; supports skin &amp; coat health</p>
                                        <p data-translate="superFoods.quinoa_ans8"><strong>Minerals&nbsp;</strong>–
                                            support metabolism, nerve function &amp; healthy growth</p>
                                        <p data-translate="superFoods.quinoa_ans9"><strong>Essential Amino
                                                Acids&nbsp;</strong>– support organ function &amp; lean muscles</p>
                                        <p data-translate="superFoods.quinoa_ans10"><strong>B Vitamins</strong> –
                                            support immunity &amp; overall well-being</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Blueberries" role="tabpanel"
                                aria-labelledby="pills-Blueberries-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans1">
                                            <strong>Antioxidants&nbsp;</strong>&nbsp;– for overall health
                                        </p>
                                        <p data-translate="superFoods.blueberries_ans2"><strong>Low or No
                                                Fat&nbsp;</strong>&nbsp;– supports lean body condition</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.blueberries_ans3"><strong>Fiber</strong> –
                                            supports healthy digestion</p>
                                        <p data-translate="superFoods.quinoa_ans6"><strong>Vitamins A, E &amp;
                                                C&nbsp;</strong>– support healthy immunity</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Coconut" role="tabpanel"
                                aria-labelledby="pills-Coconut-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans3"><strong>Fiber&nbsp;</strong>–
                                            supports healthy digestion</p>
                                        <p data-translate="superFoods.quinoa_ans7"><strong>Healthy Fat&nbsp;</strong>–
                                            supplies energy &amp; supports skin &amp; coat health</p>
                                        <p data-translate="superFoods.quinoa_ans8"><strong>Minerals&nbsp;</strong>–
                                            support metabolism, nerve function &amp; healthy growth</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.coconut_ans4"><b>Essential Amino Acids&nbsp;</b>–
                                            support organ function &amp; lean muscles</p>
                                        <p data-translate="superFoods.quinoa_ans10"><strong>B Vitamins</strong> –
                                            support immunity &amp; overall well-being</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Kale" role="tabpanel" aria-labelledby="pills-Kale-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans1">
                                            <strong>Antioxidants&nbsp;</strong>&nbsp;– for overall health
                                        </p>
                                        <p data-translate="superFoods.quinoa_ans2"><strong>Low or No
                                                Fat&nbsp;</strong>– supports lean body condition</p>
                                        <p data-translate="superFoods.quinoa_ans3"><strong>Fiber&nbsp;</strong>–
                                            supports healthy digestion</p>
                                        <p data-translate="superFoods.quinoa_ans4"><strong>Iron&nbsp;</strong>– for
                                            blood, muscle &amp; brain function</p>
                                        <p data-translate="superFoods.kale_ans5"><strong>Vitamin K&nbsp;</strong>– for
                                            healthy bones &amp; circulation</p>
                                        <p data-translate="superFoods.quinoa_ans6"><strong>Vitamins A, E &amp;
                                                C&nbsp;</strong>– support healthy immunity</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.kale_ans7"><strong>Omega-3 Fatty
                                                Acids&nbsp;</strong>– support healthy skin &amp; coat &amp; immunity</p>
                                        <p data-translate="superFoods.quinoa_ans8"><strong>Minerals&nbsp;</strong>–
                                            support metabolism, nerve function &amp; healthy growth</p>
                                        <p data-translate="superFoods.kale_ans9"><strong>Calcium</strong> – supports
                                            strong bones &amp; teeth</p>
                                        <p data-translate="superFoods.coconut_ans4"><b>Essential Amino Acids&nbsp;</b>–
                                            support organ function &amp; lean muscles</p>
                                        <p data-translate="superFoods.quinoa_ans10"><strong>B Vitamins</strong> –
                                            support immunity &amp; overall well-being</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Oranges" role="tabpanel"
                                aria-labelledby="pills-Oranges-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans1">
                                            <strong>Antioxidants&nbsp;</strong>&nbsp;– for overall health
                                        </p>
                                        <p data-translate="superFoods.quinoa_ans2"><strong>Low or No
                                                Fat&nbsp;</strong>– supports lean body condition</p>
                                        <p data-translate="superFoods.quinoa_ans3"><strong>Fiber&nbsp;</strong>–
                                            supports healthy digestion</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans6"><strong>Vitamins A, E &amp;
                                                C&nbsp;</strong>– support healthy immunity</p>
                                        <p data-translate="superFoods.quinoa_ans8"><strong>Minerals&nbsp;</strong>–
                                            support metabolism, nerve function &amp; healthy growth</p>
                                        <p data-translate="superFoods.kale_ans9"><strong>Calcium</strong> – supports
                                            strong bones &amp; teeth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Carrots" role="tabpanel"
                                aria-labelledby="pills-Carrots-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.quinoa_ans1">
                                            <strong>Antioxidants&nbsp;</strong>&nbsp;– for overall health
                                        </p>
                                        <p data-translate="superFoods.quinoa_ans2"><strong>Low or No
                                                Fat&nbsp;</strong>– supports lean body condition</p>
                                        <p data-translate="superFoods.quinoa_ans3"><strong>Fiber&nbsp;</strong>–
                                            supports healthy digestion</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p data-translate="superFoods.kale_ans5"><strong>Vitamin K&nbsp;</strong>– for
                                            healthy bones &amp; circulation</p>
                                        <p data-translate="superFoods.quinoa_ans6"><strong>Vitamins A, E &amp;
                                                C&nbsp;</strong>– support healthy immunity</p>
                                        <p data-translate="superFoods.quinoa_ans8"><strong>Minerals&nbsp;</strong>–
                                            support metabolism, nerve function &amp; healthy growth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-process section py-5" style="background-color: #fff;">
            <div class="container">
                <div data-aos="fade-up" class="qualityAss_content">
                    <h2 data-translate="proprietary.desc" class="mb-4">PROPRIETARY PROBIOTIC TECHNOLOGY</h2>
                    <p data-translate="proprietary.desc2">
                        Healthy digestive and immune systems are vital to the overall health of your pet. That’s why
                        every Diamond, Diamond
                        Naturals, Diamond Naturals Grain-Free, Diamond CARE and Diamond Pro89 dry dog formula is
                        enhanced with K9 Strain
                        Probiotics and every Diamond and Diamond Naturals dry cat formula, as well as the Diamond CARE
                        Weight Management Formula
                        for Adult Cats, is enhanced with Viables Probiotics. These beneficial bacteria were developed
                        specifically for use in
                        our dog and cat foods to help your pet digest food more efficiently. Each of these dog and cat
                        formulas are guaranteed
                        to provide 80 million colony forming units (CFU) per pound of these proprietary probiotics.
                    </p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    data-translate="proprietary.faq1">
                                    What are Probiotics?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body" data-translate="proprietary.faq1_answer">
                                    Like humans, dogs and cats have both “good” and “bad” bacteria in their digestive
                                    systems. Probiotics, or good bacteria,
                                    help maintain a healthy balance by suppressing the bad bacteria in the intestines. A
                                    healthy digestive system will break
                                    down food and distribute nutrients more efficiently and is an important part of a
                                    healthy immune system.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    data-translate="proprietary.faq2">
                                    Why are probiotics important?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body" data-translate="proprietary.faq2_answer">
                                    Since 70 percent of your pet’s immune system is in the GI tract, helping support
                                    digestive health also supports a
                                    healthy immune system. Nutrients from food are absorbed and processed through the GI
                                    tract. An imbalance in the GI
                                    tract, caused by stress, infection, antibiotic medication or just something your pet
                                    ate, can lead to digestive issues,
                                    an increased susceptibility to illness or general discomfort. Feeding your pet a
                                    diet enhanced with probiotics may help
                                    restore balance and get your pet’s digestive and immune systems back on track.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                    data-translate="proprietary.faq3">
                                    What makes Diamond's probiotics different?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body" data-translate="proprietary.faq3_answer">
                                    For maximum benefit, the bacteria in a probiotic must be viable, that is, alive and
                                    able to multiply. Viable probiotics
                                    are referred to as colony forming units (CFU). We add our probiotics to the food
                                    after the cooking process, which would
                                    otherwise kill beneficial bacteria. Diamond is one of a very small number of pet
                                    food manufacturers who take this extra
                                    step. Every pound of Diamond, Diamond Naturals, Diamond Naturals Grain-Free, Diamond
                                    CARE and Diamond Pro89 dog formulas
                                    and Diamond CARE Weight Management for Cats dry food delivers 80 million CFU of
                                    live, active probiotic cultures,
                                    guaranteed.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
