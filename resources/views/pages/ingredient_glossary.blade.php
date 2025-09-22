@extends('master')
@section('page-headTitle')
    Ingredient Glossary
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
                <h1 data-translate="bag.link3">Ingredient Glossary</h1>
            </div>
        </div>

        <section class="our-process section py-5" style="background-color: #fff;">
            <div class="container">
                <div data-aos="fade-up">
                    <div class="row">
                        <div class="col-12">
                            <div class="mt-5 d-flex align-items-start">
                                <div class="nav flex-column nav-pills glossaryTabs" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-AE-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-AE" type="button" role="tab"
                                        aria-controls="v-pills-AE" aria-selected="true"
                                        data-translate="ingredient_glossary.AE">A-E</button>
                                    <button class="nav-link" id="v-pills-FJ-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-FJ" type="button" role="tab"
                                        aria-controls="v-pills-FJ" aria-selected="false"
                                        data-translate="ingredient_glossary.FJ">F-J</button>
                                    <button class="nav-link" id="v-pills-KO-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-KO" type="button" role="tab"
                                        aria-controls="v-pills-KO" aria-selected="false"
                                        data-translate="ingredient_glossary.KO">K-O</button>
                                    <button class="nav-link" id="v-pills-PU-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-PU" type="button" role="tab"
                                        aria-controls="v-pills-PU" aria-selected="false"
                                        data-translate="ingredient_glossary.PU">P-U</button>
                                    <button class="nav-link" id="v-pills-VZ-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-VZ" type="button" role="tab"
                                        aria-controls="v-pills-VZ" aria-selected="false"
                                        data-translate="ingredient_glossary.VZ">V-Z</button>
                                </div>
                                <div class="tab-content mx-3" id="v-pills-tabContent" style="width: 100%;">
                                    <div class="tab-pane fade show active" id="v-pills-AE" role="tabpanel"
                                        aria-labelledby="v-pills-AE-tab" tabindex="0">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne"
                                                        data-translate="ingredient_glossary.faq1_AE">
                                                        Agar-agar
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq1_AE_answer">
                                                        A thickener derived from red seaweed. It is high in fiber and
                                                        used throughout the human food industry to thicken things
                                                        like pudding and gelatin.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo"
                                                        data-translate="ingredient_glossary.faq2_AE">
                                                        Beef
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq2_AE_answer">
                                                        Meat from beef cattle, provides amino acid nutrition for overall
                                                        good health.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree"
                                                        data-translate="ingredient_glossary.faq3_AE">
                                                        Calcium Carbonate
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq3_AE_answer">
                                                        A mineral source of calcium, an essential nutrient.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour"
                                                        data-translate="ingredient_glossary.faq4_AE">
                                                        D-calcium Pantothenate
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq4_AE_answer">
                                                        A source of pantothenic acid, a B vitamin that is important for
                                                        normal immune function, proper energy levels and nervous
                                                        system function.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive"
                                                        data-translate="ingredient_glossary.faq5_AE">
                                                        Egg Product
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq5_AE_answer">
                                                        Dried whole egg.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-FJ" role="tabpanel"
                                        aria-labelledby="v-pills-FJ-tab" tabindex="0">
                                        <div class="accordion" id="accordionExample_FJ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_FJ"
                                                        aria-expanded="true" aria-controls="collapseOne_FJ"
                                                        data-translate="ingredient_glossary.faq1_FJ">
                                                        Fish Broth
                                                    </button>
                                                </h2>
                                                <div id="collapseOne_FJ" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample_FJ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq1_FJ_answer">
                                                        Broth created from cooking fish in water, used in canned
                                                        products as a source of moisture.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo_FJ"
                                                        aria-expanded="false" aria-controls="collapseTwo_FJ"
                                                        data-translate="ingredient_glossary.faq2_FJ">
                                                        Glucosamine Hydrochloride
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo_FJ" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_FJ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq2_FJ_answer">
                                                        A building block for normal healthy joints. It is obtained from
                                                        the shells of shrimp, lobsters and crabs.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree_FJ"
                                                        aria-expanded="false" aria-controls="collapseThree_FJ"
                                                        data-translate="ingredient_glossary.faq3_FJ">
                                                        Hydrolyzed Salmon
                                                    </button>
                                                </h2>
                                                <div id="collapseThree_FJ" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_FJ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq3_FJ_answer">
                                                        Salmon that has been treated with enzymes to break down the
                                                        protein into smaller components so it is not recognized by
                                                        the immune system as an allergen.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour_FJ"
                                                        aria-expanded="false" aria-controls="collapseFour_FJ"
                                                        data-translate="ingredient_glossary.faq4_FJ">
                                                        Iron Amino Acid Chelate
                                                    </button>
                                                </h2>
                                                <div id="collapseFour_FJ" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_FJ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq4_FJ_answer">
                                                        Iron is a mineral that is important for the transport of oxygen
                                                        throughout the body. Iron amino acid chelate is a
                                                        chelated mineral, bound to amino acids for more efficient
                                                        absorption.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-KO" role="tabpanel"
                                        aria-labelledby="v-pills-KO-tab" tabindex="0">
                                        <div class="accordion" id="accordionExample_KO">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_KO"
                                                        aria-expanded="true" aria-controls="collapseOne_KO"
                                                        data-translate="ingredient_glossary.faq1_KO">
                                                        Kale
                                                    </button>
                                                </h2>
                                                <div id="collapseOne_KO" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample_KO">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq1_KO_answer">
                                                        A cruciferous vegetable that is extremely low in calories. Kale
                                                        has extremely high levels of vitamins A and C.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo_KO"
                                                        aria-expanded="false" aria-controls="collapseTwo_KO"
                                                        data-translate="ingredient_glossary.faq2_KO">
                                                        Lamb Broth
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo_KO" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_KO">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq2_KO_answer">
                                                        Broth created from cooking lamb in water, used in canned
                                                        products as a source of moisture.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree_KO"
                                                        aria-expanded="false" aria-controls="collapseThree_KO"
                                                        data-translate="ingredient_glossary.faq3_KO">
                                                        Menhaden Fish Oil
                                                    </button>
                                                </h2>
                                                <div id="collapseThree_KO" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_KO">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq3_KO_answer">
                                                        Oil obtained from menhaden whitefish. This oil is rich in
                                                        marine-source omega-3 fatty acids such as EPA and DHA.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour_KO"
                                                        aria-expanded="false" aria-controls="collapseFour_KO"
                                                        data-translate="ingredient_glossary.faq4_KO">
                                                        Natural Flavor
                                                    </button>
                                                </h2>
                                                <div id="collapseFour_KO" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_KO">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq4_KO_answer">
                                                        Ingredient that is added to enhance the flavor and acceptance of
                                                        the food. (Does not contain MSG).
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive_KO"
                                                        aria-expanded="false" aria-controls="collapseFive_KO"
                                                        data-translate="ingredient_glossary.faq5_KO">
                                                        Oatmeal
                                                    </button>
                                                </h2>
                                                <div id="collapseFive_KO" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_KO">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq5_KO_answer">
                                                        Whole grain that is an excellent source of slow-burning
                                                        carbohydrates for all-day energy and fiber for proper digestion.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-PU" role="tabpanel"
                                        aria-labelledby="v-pills-PU-tab" tabindex="0">
                                        <div class="accordion" id="accordionExample_PU">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_PU"
                                                        aria-expanded="true" aria-controls="collapseOne_PU"
                                                        data-translate="ingredient_glossary.faq1_PU">
                                                        Pea Flour
                                                    </button>
                                                </h2>
                                                <div id="collapseOne_PU" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample_PU">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq1_PU_answer">
                                                        Whole peas that have been ground into a flour consistency.
                                                        Nutrient-rich source of protein and carbohydrates.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo_PU"
                                                        aria-expanded="false" aria-controls="collapseTwo_PU"
                                                        data-translate="ingredient_glossary.faq2_PU">
                                                        Quinoa
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo_PU" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_PU">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq2_PU_answer">
                                                        Quinoa is a grain that contains high levels of fiber and
                                                        protein. It is rich in minerals and B vitamins, nutrients
                                                        important for vital functions within your pet's body.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree_PU"
                                                        aria-expanded="false" aria-controls="collapseThree_PU"
                                                        data-translate="ingredient_glossary.faq3_PU">
                                                        Raspberries
                                                    </button>
                                                </h2>
                                                <div id="collapseThree_PU" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_PU">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq3_PU_answer">
                                                        These berries contain antioxidants that help support overall
                                                        good health.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour_PU"
                                                        aria-expanded="false" aria-controls="collapseFour_PU"
                                                        data-translate="ingredient_glossary.faq4_PU">
                                                        Salmon Meal
                                                    </button>
                                                </h2>
                                                <div id="collapseFour_PU" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_PU">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq4_PU_answer">
                                                        Salmon is cooked and ground to a fine consistency. A
                                                        nutrient-rich source of protein and minerals as well as omega-3
                                                        fatty acids.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive_PU"
                                                        aria-expanded="false" aria-controls="collapseFive_PU"
                                                        data-translate="ingredient_glossary.faq5_PU">
                                                        Taurine
                                                    </button>
                                                </h2>
                                                <div id="collapseFive_PU" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_PU">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq5_PU_answer">
                                                        An amino acid that maintains healthy eyes and heart.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-VZ" role="tabpanel"
                                        aria-labelledby="v-pills-VZ-tab" tabindex="0">
                                        <div class="accordion" id="accordionExample_VZ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_VZ"
                                                        aria-expanded="true" aria-controls="collapseOne_VZ"
                                                        data-translate="ingredient_glossary.faq1_VZ">
                                                        Vitamin A Supplement
                                                    </button>
                                                </h2>
                                                <div id="collapseOne_VZ" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample_VZ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq1_VZ_answer">
                                                        An active source of vitamin A, which is necessary for
                                                        reproduction, vision, normal skeletal and tooth development,
                                                        immunity and tissue integrity.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo_VZ"
                                                        aria-expanded="false" aria-controls="collapseTwo_VZ"
                                                        data-translate="ingredient_glossary.faq2_VZ">
                                                        Wheat Flour
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo_VZ" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_VZ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq2_VZ_answer">
                                                        This finely ground wheat grain is a carbohydrate ingredient.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree_VZ"
                                                        aria-expanded="false" aria-controls="collapseThree_VZ"
                                                        data-translate="ingredient_glossary.faq3_VZ">
                                                        Yucca Schidigera Extract
                                                    </button>
                                                </h2>
                                                <div id="collapseThree_VZ" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_VZ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq3_VZ_answer">
                                                        A plant extract that provides flavor to the food.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour_VZ"
                                                        aria-expanded="false" aria-controls="collapseFour_VZ"
                                                        data-translate="ingredient_glossary.faq4_VZ">
                                                        Zinc Oxide
                                                    </button>
                                                </h2>
                                                <div id="collapseFour_VZ" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample_VZ">
                                                    <div class="accordion-body"
                                                        data-translate="ingredient_glossary.faq4_VZ_answer">
                                                        A source of the essential mineral zinc. Zinc is important for
                                                        normal structure and function of the skin and the immune system.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
