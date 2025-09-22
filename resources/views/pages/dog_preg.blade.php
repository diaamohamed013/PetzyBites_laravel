@extends('master')
@section('page-headTitle')
    Dog's Pregnancy Calculator
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
                <h1 data-translate="pets.dog_preg">Dog's Pregnancy Calculator</h1>
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
                                <li class="breadcrumb-item active" aria-current="page" data-translate="pets.dog_preg">
                                    Dog's Pregnancy Calculator
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12">
                        <h2 class="content-title articleTitle mb-5" data-translate="pets.dog_preg">
                            Dog's Pregnancy Calculator
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="card calculator">
                            <div>
                                <label>
                                    <span data-translate="pets.day">Day</span>
                                    <select id="day"></select>
                                </label>
                                <label>
                                    <span data-translate="pets.month">Month</span>
                                    <select id="month"></select>
                                </label>
                                <label>
                                    <span data-translate="pets.year">Year</span>
                                    <select id="year"></select>
                                </label>
                                <div class="input-group">
                                    <label data-translate="pets.dog_preg_period">مدة الحمل (بين 58 و 68 يوم):</label>
                                    <input type="number" id="gestationDays" value="63" min="58" max="68">
                                </div>
                            </div>
                            <div class="mt-2 results">
                                <button onclick="calculateBirth()" data-translate="pets.preg_calc">Calculate Pregnancy
                                    Day</button>
                                <div id="result" class="result" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-process section py-5">
            <div class="container">
                <div data-aos="fade-up" class="qualityAss_content">
                    <h2 data-translate="pets.dog_calc_preg" class="mb-4">
                        How long is a dog's pregnancy?
                    </h2>
                    <p data-translate="pets.dog_calc_preg_desc">
                        The gestation period for dogs is approximately 63 days, which is measured from the day of
                        ovulation to the
                        day
                        of birth
                        of the puppies. The gestation period for female dogs is divided into three stages, each stage
                        lasting 21
                        days.
                    </p>
                    <h2 data-translate="pets.dog_calc_preg_signs" class="mb-4">
                        What are the signs of pregnancy in dogs?
                    </h2>
                    <ul>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet" data-translate="pets.dog_calc_preg_sign1">
                            Increased appetite.
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet" data-translate="pets.dog_calc_preg_sign2">
                            Weight gain.
                        </li>
                        <li data-gc-list-depth="1" data-gc-list-style="bullet" data-translate="pets.dog_calc_preg_sign3">
                            Increased nipple size.
                        </li>
                    </ul>
                    <p data-translate="pets.pets.dog_calc_preg_signs_important1">
                        As your dog's pregnancy nears its end, you'll notice significant enlargement of the mammary
                        glands and
                        nipples,
                        and you
                        may even detect some milky fluid. The pregnant female dog's belly will also increase in size,
                        and she may
                        wobble
                        slightly while walking. Toward the end of pregnancy, you may be able to see or feel the puppies
                        moving
                        around
                        inside the
                        mother's belly.
                    </p>
                    <p data-translate="pets.pets.dog_calc_preg_signs_important2">
                        Caution: It's important to remember that other conditions can cause changes in appetite, weight
                        gain, and
                        abdominal
                        swelling. To rule out more serious conditions, take your dog to the vet for a checkup if these
                        signs appear.
                    </p>
                </div>
            </div>
        </section>

    </main>
@endsection
@push('external-script')
    <script>
        const daySelect = document.getElementById("day");
        const monthSelect = document.getElementById("month");
        const yearSelect = document.getElementById("year");

        // تعبئة الشهور (1 - 12)
        for (let m = 1; m <= 12; m++) {
            const opt = document.createElement("option");
            opt.value = m;
            opt.textContent = m;
            monthSelect.appendChild(opt);
        }

        // تعبئة السنوات (السنة الحالية و اللي قبلها)
        const currentYear = new Date().getFullYear();
        for (let y = currentYear - 1; y <= currentYear; y++) {
            const opt = document.createElement("option");
            opt.value = y;
            opt.textContent = y;
            yearSelect.appendChild(opt);
        }

        // دالة لتعبئة الأيام حسب الشهر والسنة
        function populateDays() {
            const month = parseInt(monthSelect.value);
            const year = parseInt(yearSelect.value);

            if (!month || !year) return;

            const daysInMonth = new Date(year, month, 0).getDate();

            daySelect.innerHTML = "";
            for (let d = 1; d <= daysInMonth; d++) {
                const opt = document.createElement("option");
                opt.value = d;
                opt.textContent = d;
                daySelect.appendChild(opt);
            }
        }

        // تحديث الأيام عند تغيير الشهر أو السنة
        monthSelect.addEventListener("change", populateDays);
        yearSelect.addEventListener("change", populateDays);

        // تحديد التاريخ الحالي بشكل افتراضي
        (function setDefaultDate() {
            const today = new Date();
            yearSelect.value = today.getFullYear();
            monthSelect.value = today.getMonth() + 1;
            populateDays();
            daySelect.value = today.getDate();
        })();

        function calculateBirth() {
            const day = parseInt(daySelect.value);
            const month = parseInt(monthSelect.value) - 1;
            const year = parseInt(yearSelect.value);
            const gestationDays = parseInt(document.getElementById("gestationDays").value);

            if (gestationDays < 58 || gestationDays > 68) {
                alert("❌ مدة الحمل لازم تكون بين 58 و 68 يوم");
                return;
            }

            const startDate = new Date(year, month, day);

            if (isNaN(startDate)) {
                alert("❌ من فضلك اختر تاريخ صحيح");
                return;
            }

            const expectedDate = new Date(startDate);
            expectedDate.setDate(startDate.getDate() + gestationDays);

            const minDate = new Date(startDate);
            minDate.setDate(startDate.getDate() + 58);

            const maxDate = new Date(startDate);
            maxDate.setDate(startDate.getDate() + 68);

            // تحديد اللغة من الـ <html lang="">
            const lang = document.documentElement.lang || "ar";
            let locale = lang === "ar" ? "ar-EG" : "en-US";

            let labels = {
                ar: {
                    expected: "التاريخ المتوقع: ",
                    period: "الفترة المتوقعة: ",
                    from: "من",
                    to: "إلى"
                },
                en: {
                    expected: "Expected Date: ",
                    period: "Expected Period: ",
                    from: "From",
                    to: "To"
                }
            };

            const t = labels[lang] || labels.ar;

            const ResultBox = document.getElementById("result");
            ResultBox.innerHTML = `
    ${t.expected} ${expectedDate.toLocaleDateString(locale)}<br>
    ${t.period} ${t.from} ${minDate.toLocaleDateString(locale)}
    ${t.to} ${maxDate.toLocaleDateString(locale)}
  `;

            ResultBox.style.display = "flex";
        }
    </script>
@endpush
