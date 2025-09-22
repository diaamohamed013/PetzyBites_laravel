@extends('master')
@section('page-headTitle')
    Dog's Calories Calculator
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
            <h1 data-translate="pets.dog_calc">Dog's Calories Calculator</h1>
        </div>
    </div>

    <section id="about-3" class="section py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.petsCalculator') }}"
                                    data-translate="nav.pets_calculator">
                                    Pets Calculator</a></li>
                            <li class="breadcrumb-item active" aria-current="page"
                                data-translate="pets.dog_calc">
                                Dog's Calories Calculator
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="content-title articleTitle mb-5" data-translate="pets.dog_calc">
                        Dog's Calories Calculator
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card calculator">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div>
                                    <label>
                                        <span data-translate="pets.type">
                                            Pet Type
                                        </span>
                                        <select id="petType">
                                            <option value="" data-translate="pets.select_type">-- Select Pet
                                                --</option>
                                            <option value="dog" data-translate="pets.dog" selected>Dog</option>
                                        </select>
                                    </label>

                                    <label>
                                        <span data-translate="pets.life_stage">
                                            Life Stage
                                        </span>
                                        <select id="lifeStage">
                                            <option value="" data-translate="pets.select_life_stage">--
                                                Select Life Stage --</option>
                                            <option value="puppy" data-translate="pets.puppy_dog">Puppy</option>
                                            <option value="adult" data-translate="pets.adult">Adult</option>
                                            <option value="senior" data-translate="pets.senior">Senior</option>
                                        </select>
                                    </label>

                                    <label id="activityLabel">
                                        <span data-translate="pets.activity_level">
                                            Activity Level
                                        </span>
                                        <select id="activity" disabled>
                                            <option value="" data-translate="pets.select_activity_level">--
                                                Select Activity Level --
                                            </option>
                                        </select>
                                    </label>

                                    <label>
                                        <span data-translate="pets.weight">
                                            Weight
                                        </span>
                                        <div class="pet_weight">
                                            <input id="weight" type="number" min="0" step="0.1"
                                                placeholder="e.g. 4.5" disabled>
                                            <select id="weightUnit" disabled>
                                                <option value="kg" data-translate="pets.kg">kg</option>
                                                <option value="lb" data-translate="pets.lb">lb</option>
                                            </select>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div>
                                    <label>
                                        <span data-translate="pets.food_type">
                                            Food Type
                                        </span>
                                        <select id="foodType" disabled>
                                            <option value="" data-translate="pets.select_food_type">--
                                                Select Food Type --</option>
                                            <option value="Premium" data-translate="pets.premium">Dry Food Premium
                                            </option>
                                            <option value="Economic" data-translate="pets.economic">Dry Food
                                                Economic</option>
                                        </select>
                                    </label>

                                    <label>
                                        <span data-translate="pets.brand">
                                            Brand
                                        </span>
                                        <select id="brand" disabled>
                                            <option value="" data-translate="pets.select_brand">-- Select
                                                Brand --</option>
                                        </select>
                                    </label>

                                    <label>
                                        <span data-translate="pets.product">
                                            Product
                                        </span>
                                        <select id="product" disabled>
                                            <option value="" data-translate="pets.select_product">-- Select
                                                Product --</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 results">
                            <button id="calculateBtn" disabled
                                data-translate="calory.calculate">Calculate</button>
                            <div class="row mt-5" style="row-gap: 15px;">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="row justify-content-center" style="row-gap: 15px;">
                                        <div class="col-xl-6 col-md-6">
                                            <div id="calorieResult" class="result" style="display:none"></div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div id="feedingResult" class="result" style="display:none"></div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div id="productResult" class="result" style="display:none"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 xol-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="productInfoResult" style="display:none"></div>
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

    <section class="our-process section py-5">
        <div class="container">
            <div data-aos="fade-up" class="qualityAss_content">
                <h2 data-translate="pets.dog_calc_important" class="mb-4">
                    The Importance of a Calorie Calculator for Dogs
                </h2>
                <p data-translate="pets.dog_calc_important_desc">
                    Calculating your dog's calorie needs will help you ensure they get the right amount of food each
                    day.
                    Feeding dogs the
                    correct amount of daily calories will keep them healthy and fit, and will prevent them from
                    becoming
                    overweight and
                    obese, which can cause many health problems.
                </p>
                <h2 data-translate="pets.dog_calc_factors" class="mb-4">
                    Factors Affecting Calorie Counts for Dogs
                </h2>
                <h4 data-translate="pets.dog_calc_factors_age">
                    Dog Age and Different Life Stages
                </h4>
                <p data-translate="pets.dog_calc_factors_age_desc">
                    Calorie needs vary by life stage. Puppies' needs differ from those of adult dogs, and pregnant
                    or lactating
                    female dogs
                    require more calories than the average adult dog.
                </p>
                <h4 data-translate="pets.calc_factors_activity">
                    Activity Level
                </h4>
                <p data-translate="pets.dog_calc_factors_activity_desc">
                    Each dog breed varies in activity level. Active dogs burn more calories than sedentary dogs, so
                    they need
                    more calories
                    each day.
                </p>
            </div>
        </div>
    </section>

</main>
@endsection
@push('external-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function t(key) {
                const htmlDir = document.documentElement.getAttribute("dir");
                const lang = window.currentLang || (htmlDir === "rtl" ? "ar" : "en");
                const value = translations[lang][key];
                return value || key;
            }

            // ---------- PRODUCTS (4) ----------
            const PRODUCTS = [
                // Dogs
                {
                    pet: "dog",
                    type: "Premium",
                    brand: "Petzybites",
                    name: "101Bites",
                    desc: t("brands.101.adult.desc"),
                    benefit1: t("brands.101.adult.protein"),
                    benefit2: t("brands.101.adult.vitamins"),
                    benefit3: t("brands.101.adult.minerals"),
                    benefit4: t("brands.101.adult.omega"),
                    suitableFor: t("brands.101.adult.suitable"),
                    image: "{{ asset('assets/img/101-brand.png') }}",
                    prodLink: "https://web.facebook.com/101bites",
                    calories_per_100g: 370,
                    grams_per_cup: 110
                },
                {
                    pet: "dog",
                    type: "Economic",
                    brand: "Petzybites",
                    name: "Doggo",
                    desc: t("brands.101.puppy.desc"),
                    benefit1: t("brands.101.puppy.protein"),
                    benefit2: t("brands.101.puppy.dha"),
                    benefit3: t("brands.101.puppy.calcium"),
                    benefit4: t("brands.101.puppy.antioxidants"),
                    suitableFor: t("brands.101.puppy.suitable"),
                    image: "{{ asset('assets/img/doggo-brand.png') }}",
                    prodLink: "https://web.facebook.com/D0gg0",
                    calories_per_100g: 330,
                    grams_per_cup: 115
                }
            ];

            // ---------- FOOD FACTORS (محفوظ كما طلبت) ----------
            const FOOD_FACTORS = {
                dry: {
                    Premium: {
                        cal: 3.8,
                        protein: 32,
                        fat: 14
                    },
                    Economic: {
                        cal: 3.2,
                        protein: 28,
                        fat: 10
                    }
                }
            };

            // life stages & growth
            const LIFE_STAGES = {
                cat: [{
                        value: "kitten",
                        label: t("pets.kitten_cat")
                    },
                    {
                        value: "adult",
                        label: t("pets.adult")
                    },
                    {
                        value: "senior",
                        label: t("pets.senior")
                    }
                ],
                dog: [{
                        value: "puppy",
                        label: t("pets.puppy_dog")
                    },
                    {
                        value: "adult",
                        label: t("pets.adult")
                    },
                    {
                        value: "senior",
                        label: t("pets.senior")
                    }
                ]
            };

            const GROWTH_KITTEN = [{
                    value: "kit_lt4",
                    label: t("growth.kitten.lt4")
                },
                {
                    value: "kit_4_9",
                    label: t("growth.kitten.4_9")
                },
                {
                    value: "kit_9_12",
                    label: t("growth.kitten.9_12")
                }
            ];
            const GROWTH_PUPPY = [{
                    value: "pup_lt50",
                    label: t("growth.puppy.lt50")
                },
                {
                    value: "pup_50_80",
                    label: t("growth.puppy.50_80")
                },
                {
                    value: "pup_80_100",
                    label: t("growth.puppy.80_100")
                }
            ];
            const ACTIVITY_OPTIONS = [{
                    value: "normal",
                    text: t("activity.normal")
                },
                {
                    value: "high",
                    text: t("activity.high")
                }
            ];


            // MER factors (كما كان)
            const MER_FACTORS = {
                cat: {
                    adult: {
                        normal: 1.2,
                        high: 1.4
                    },
                    senior: {
                        normal: 0.50,
                        high: 1.12
                    },
                    kitten: {
                        kit_lt4: 2.0,
                        kit_4_9: 2.5,
                        kit_9_12: 2.0
                    }
                },
                dog: {
                    adult: {
                        normal: 1.6,
                        high: 1.8
                    },
                    senior: {
                        normal: 1.5,
                        high: 1.6
                    },
                    puppy: {
                        pup_lt50: 2.0,
                        pup_50_80: 2.0,
                        pup_80_100: 2.0
                    }
                }
            };

            // ---------- عناصر الصفحة ----------
            const petTypeEl = document.getElementById("petType");
            const lifeStageEl = document.getElementById("lifeStage");
            const activityEl = document.getElementById("activity"); // FIXED id
            const activityLabel = document.getElementById("activityLabel");
            const weightEl = document.getElementById("weight");
            const weightUnitEl = document.getElementById("weightUnit");

            const foodTypeEl = document.getElementById("foodType");
            const brandEl = document.getElementById("brand");
            const productEl = document.getElementById("product");

            const calculateBtn = document.getElementById("calculateBtn");
            const calorieResultEl = document.getElementById("calorieResult");
            const feedingResultEl = document.getElementById("feedingResult");
            const productResultEl = document.getElementById("productResult");
            const productInfoResultEl = document.getElementById("productInfoResult");

            // ---------- helpers ----------
            function resetSelect(el, placeholderText) {
                if (!el) return;
                el.innerHTML = "";
                const opt = document.createElement("option");
                opt.value = "";
                opt.textContent = placeholderText || `-- ${t("pets.select")} --`;
                el.appendChild(opt);
                el.disabled = true;
            }

            function enableSelect(el) {
                if (!el) return;
                el.disabled = false;
            }

            function setLabelText(labelEl, text) {
                if (!labelEl) return;
                const span = labelEl.querySelector("[data-translate='pets.activity_level']");
                if (span) {
                    span.textContent = text;
                }
            }

            function updateCalculateButtonState() {
                const pet = petTypeEl.value;
                const life = lifeStageEl.value;
                const act = activityEl.value;
                const weight = parseFloat(weightEl.value);
                const wvalid = !isNaN(weight) && weight > 0;
                const foodType = foodTypeEl.value;
                const brand = brandEl.value;
                const product = productEl.value;

                const enabled = pet && life && act && wvalid && foodType && brand && product;
                calculateBtn.disabled = !enabled;
            }

            // خريطة لربط الـ id بالمفتاح الصحيح
            const TRANSLATION_KEYS = {
                lifeStage: "pets.select_life_stage",
                activity: "pets.select_activity_level",
                foodType: "pets.select_food_type",
                brand: "pets.select_brand",
                product: "pets.select_product",
            };

            function resetDependencies(ids) {
                ids.forEach(id => {
                    const el = document.getElementById(id);
                    if (!el) return;

                    if (el.tagName === "SELECT") {
                        const key = TRANSLATION_KEYS[id] || `pets.select_${id.toLowerCase()}`;
                        resetSelect(el, t(key)); // الترجمة حسب اللغة
                    } else if (el.tagName === "INPUT") {
                        el.value = "";
                        el.disabled = true;
                    }
                });

                // اللابل بتاع النشاط
                setLabelText(activityLabel, t("pets.activity_level"));

                calorieResultEl.style.display = "none";
                feedingResultEl.style.display = "none";
                productResultEl.style.display = "none";
                productInfoResultEl.style.display = "none";
                updateCalculateButtonState();
            }


            function populateActivityOrGrowth(pet, lifeStage) {
                resetSelect(activityEl, t("pets.select_activity_level"));
                if (!lifeStage) return;
                if ((pet === "cat" && lifeStage === "kitten") || (pet === "dog" && lifeStage === "puppy")) {
                    setLabelText(activityLabel, pet === "cat" ? t("pets.kitten") : t("pets.puppy"));
                    const list = pet === "cat" ? GROWTH_KITTEN : GROWTH_PUPPY;
                    list.forEach(item => {
                        const opt = document.createElement("option");
                        opt.value = item.value;
                        opt.textContent = item.label;
                        activityEl.appendChild(opt);
                    });
                    enableSelect(activityEl);
                } else {
                    setLabelText(activityLabel, t("pets.activity_level"));
                    ACTIVITY_OPTIONS.forEach(o => {
                        const opt = document.createElement("option");
                        opt.value = o.value;
                        opt.textContent = o.text;
                        activityEl.appendChild(opt);
                    });
                    enableSelect(activityEl);
                }
            }

            // ---------- أحداث ----------

            petTypeEl.addEventListener("change", () => {
                resetSelect(lifeStageEl, t("pets.select_life_stage"));
                resetDependencies(["activity", "weight", "foodType", "brand", "product"]);
                if (!petTypeEl.value) {
                    lifeStageEl.disabled = true;
                } else {
                    const list = LIFE_STAGES[petTypeEl.value] || [];
                    list.forEach(stage => {
                        const opt = document.createElement("option");
                        opt.value = stage.value; // kitten, adult, senior, puppy
                        opt.textContent = stage.label;
                        lifeStageEl.appendChild(opt);
                    });
                    enableSelect(lifeStageEl);
                }
                updateCalculateButtonState();
            });

            lifeStageEl.addEventListener("change", () => {
                resetDependencies(["weight", "foodType", "brand", "product"]);
                if (lifeStageEl.value) {
                    populateActivityOrGrowth(petTypeEl.value, lifeStageEl.value);
                } else {
                    resetSelect(activityEl, t("pets.select_activity_level"));
                    setLabelText(activityLabel, t("pets.activity_level"));
                }
                updateCalculateButtonState();
            });

            activityEl.addEventListener("change", () => {
                resetDependencies(["foodType", "brand", "product"]);
                if (activityEl.value) {
                    weightEl.disabled = false;
                    weightUnitEl.disabled = false;
                } else {
                    weightEl.value = "";
                    weightEl.disabled = true;
                    weightUnitEl.disabled = true;
                }
                updateCalculateButtonState();
            });

            weightEl.addEventListener("input", () => {
                const pet = petTypeEl.value;
                const life = lifeStageEl.value;
                const act = activityEl.value;
                const weight = parseFloat(weightEl.value);
                if (pet && life && act && !isNaN(weight) && weight > 0) {
                    // populate foodType (Premium / Economic)
                    resetSelect(foodTypeEl, t("pets.select_food_type"));
                    const optP = new Option(t("pets.premium"), "Premium");
                    const optE = new Option(t("pets.economic"), "Economic");
                    foodTypeEl.appendChild(optP);
                    foodTypeEl.appendChild(optE);
                    foodTypeEl.disabled = false;
                } else {
                    resetDependencies(["foodType", "brand", "product"]);
                }
                updateCalculateButtonState();
            });

            foodTypeEl.addEventListener("change", () => {
                resetSelect(brandEl, t("pets.select_brand"));
                resetSelect(productEl, t("pets.select_product"));
                feedingResultEl.style.display = "none";
                calorieResultEl.style.display = "none";
                productResultEl.style.display = "none";
                productInfoResultEl.style.display = "none";
                if (!foodTypeEl.value) {
                    brandEl.disabled = true;
                    productEl.disabled = true;
                    updateCalculateButtonState();
                    return;
                }
                const pet = petTypeEl.value;
                const type = foodTypeEl.value;
                // brands (should be Petzybites only)
                const brands = [...new Set(PRODUCTS.filter(p => p.pet === pet && p.type === type).map(p => p
                    .brand))];
                brands.forEach(b => brandEl.appendChild(new Option(b, b)));
                brandEl.disabled = brands.length === 0;
                // إذا كان خيار واحد، نختاره تلقائياً ونشغّل حدث change علشان يملأ المنتجات
                if (brands.length === 1) {
                    brandEl.value = brands[0];
                    brandEl.dispatchEvent(new Event('change'));
                }
                updateCalculateButtonState();
            });

            brandEl.addEventListener("change", () => {
                resetSelect(productEl, t("pets.select_product"));
                feedingResultEl.style.display = "none";
                calorieResultEl.style.display = "none";
                productResultEl.style.display = "none";
                productInfoResultEl.style.display = "none";
                if (!brandEl.value) {
                    productEl.disabled = true;
                    updateCalculateButtonState();
                    return;
                }
                const pet = petTypeEl.value;
                const type = foodTypeEl.value;
                const brand = brandEl.value;
                const prods = PRODUCTS.filter(p => p.pet === pet && p.type === type && p.brand === brand);
                prods.forEach(prod => productEl.appendChild(new Option(prod.name, prod.name)));
                productEl.disabled = prods.length === 0;
                if (prods.length === 1) {
                    productEl.value = prods[0].name;
                }
                updateCalculateButtonState();
            });

            productEl.addEventListener("change", () => {
                feedingResultEl.style.display = "none";
                calorieResultEl.style.display = "none";
                productResultEl.style.display = "none";
                productInfoResultEl.style.display = "none";
                updateCalculateButtonState();
            });

            // ---------- حسابات ----------
            function calcRER(kg) {
                return 70 * Math.pow(kg, 0.75);
            }

            function pickMerFactor(pet, lifeStage, activityOrGrowth) {
                if (!MER_FACTORS[pet]) return 1.2;
                if (lifeStage === "kitten") return MER_FACTORS[pet].kitten?.[activityOrGrowth] || 2.0;
                if (lifeStage === "puppy") return MER_FACTORS[pet].puppy?.[activityOrGrowth] || 2.0;
                const stageKey = lifeStage === "senior" ? "senior" : "adult";
                const act = activityOrGrowth || "normal";
                return MER_FACTORS[pet][stageKey]?.[act] || 1.2;
            }

            calculateBtn.addEventListener("click", () => {
                const pet = petTypeEl.value;
                let weight = parseFloat(weightEl.value);
                const unit = weightUnitEl.value;
                const activity = activityEl.value;
                const foodType = foodTypeEl.value;
                const brand = brandEl.value;
                const prodName = productEl.value;

                const prod = PRODUCTS.find(p => p.pet === pet && p.type === foodType && p.brand === brand &&
                    p.name === prodName);
                if (!pet || !weight || !activity || !foodType || !brand || !prod) {
                    alert("Please fill all fields correctly before calculating.");
                    return;
                }

                if (unit === "lb") weight = weight * 0.45359237;

                const rer = calcRER(weight);
                const merFactor = pickMerFactor(pet, lifeStageEl.value, activity);

                // حاليا بنحافظ على FOOD_FACTORS كبيانات لكن بنستخدم عامل 1.0 كـ adjustment افتراضي
                // لو عايب تستخدم cal كعامل، هنحتاج تعريف واضح (هل cal هو kcal/g أو multiplier؟)
                const foodAdj = 1.0;

                const dailyCalories = Math.round(rer * merFactor * foodAdj);

                calorieResultEl.style.display = "flex";
                calorieResultEl.innerHTML =
                    `<p><strong>${t("results.daily_calories")}:</strong></p> <p>${dailyCalories} kcal </p>`;

                let feedingText = "";
                const gramsPerDay = (dailyCalories / prod.calories_per_100g) * 100;
                const cups = prod.grams_per_cup ? gramsPerDay / prod.grams_per_cup : null;

                if (cups !== null) {
                    feedingText =
                        `<p><strong>${Math.round(gramsPerDay)} g/${t("units.day")}</strong></p> <p>(≈ ${cups.toFixed(1)} ${t("units.cups")}/${t("units.day")})</p>`;
                } else {
                    feedingText =
                        `<p><strong>${Math.round(gramsPerDay)} g/${t("units.day")}</strong></p> <p>${t("results.product")}: ${prod.name} (${prod.brand}) — ${prod.calories_per_100g} kcal/100g</p>`;
                }

                feedingResultEl.style.display = "flex";
                feedingResultEl.innerHTML = `<p><strong>${feedingText}</strong></p>`;
                productResultEl.style.display = "flex";
                productResultEl.innerHTML =
                    `<p><strong>${t("results.product")}:</strong> ${prod.name}</p> <p><strong>${t("pets.brand")}:</strong> ${prod.brand}</p> <p class="cal_note"> ${prod.calories_per_100g} kcal/100g </p>`;

                productInfoResultEl.style.display = "block";
                productInfoResultEl.innerHTML =
                    `
          <div class="our-products-cards">
          <div class="product-card-single">
            <div class="our-product-card p-4 shadow rounded bg-white mx-0">
              <div>
                <img src="${prod.image}" alt="Product 4" class="img-fluid mb-3 our-product-img">
                <h5 class="mb-2" data-translate="brands.bessa.kitten.title">${prod.name}</h5>
                <p data-translate="brands.bessa.kitten.desc">${prod.desc}</p>
              </div>
              <div class="our-product-content">
                <div>
                  <strong data-translate="brands.nutrition">${t("brands.nutrition")}</strong>
                  <ul>
                    <li data-translate="${prod.benefit1}">${prod.benefit1}</li>
                    <li data-translate="${prod.benefit2}">${prod.benefit2}</li>
                    <li data-translate="${prod.benefit3}">${prod.benefit3}</li>
                    <li data-translate="${prod.benefit4}">${prod.benefit4}</li>
                  </ul>
                </div>
                <div>
                  <strong data-translate="brands.suitable">${t("brands.suitable")}</strong>
                  <p data-translate="${prod.suitableFor}">${prod.suitableFor}</p>
                </div>
                <div class="product-btn-row">
                  <a class="product-btn" href="https://101bite.com/store" data-translate="brands.bessa.buy">${t("brands.bessa.buy")}</a>
                  <span class="product-social">
                    <a href="${prod.prodLink}" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          </div>
          `;

            });

            // ---------- init (reset) ----------
            resetSelect(lifeStageEl, t("pets.select_life_stage"));
            resetSelect(activityEl, t("pets.select_activity_level"));
            resetSelect(brandEl, t("pets.select_brand"));
            resetSelect(productEl, t("pets.select_product"));
            // foodType initially disabled (user will fill it after weight)
            resetSelect(foodTypeEl, t("pets.select_food_type"));
            foodTypeEl.disabled = true;

            weightEl.disabled = true;
            weightUnitEl.disabled = true;
            calculateBtn.disabled = true;

            // ensure state updates on manual changes
            [petTypeEl, lifeStageEl, activityEl, weightEl, weightUnitEl, foodTypeEl, brandEl, productEl]
            .forEach(el => el.addEventListener('change', updateCalculateButtonState));

            const isDogPage = window.location.pathname.includes("dog-calories-calculator");
            if (isDogPage) {
                petTypeEl.value = "dog";

                // populate life stage options مباشرة
                resetSelect(lifeStageEl, t("pets.select_life_stage"));
                const list = LIFE_STAGES["dog"] || [];
                list.forEach(stage => {
                    const opt = document.createElement("option");
                    opt.value = stage.value; // kitten, adult, senior
                    opt.textContent = stage.label;
                    lifeStageEl.appendChild(opt);
                });
                lifeStageEl.disabled = false;

                updateCalculateButtonState();
            }
        });
    </script>
@endpush
