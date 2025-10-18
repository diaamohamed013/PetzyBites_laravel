@extends('master')
@section('page-headTitle')
    Our Brands
@endsection
@push('external-code')
    <style>
        #toggle-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        @media (max-width: 768px) {
            #toggle-row {
                flex-direction: row !important;
                justify-content: center !important;
                align-items: center !important;
                gap: 0 !important;
                padding: 0 !important;
                margin: 0 !important;
                display: flex !important;
                min-height: 80px !important;
                width: 100% !important;
            }

            .col-12.col-md-5,
            .col-12.col-md-2 {
                flex: 1 1 0% !important;
                width: 0 !important;
                display: flex !important;
                align-items: center !important;
                padding: 0 !important;
                margin: 0 !important;
                justify-content: center !important;
                min-width: 0 !important;
                box-sizing: border-box !important;
            }

            #dog-img-col {
                order: 1 !important;
                justify-content: flex-start !important;
            }

            #toggle-col {
                order: 2 !important;
                justify-content: center !important;
            }

            #cat-img-col {
                order: 3 !important;
                justify-content: flex-end !important;
            }

            .toggle-animal-img {
                width: 120px !important;
                max-width: 100% !important;
                height: auto !important;
                display: block !important;
                max-width: 250px !important;
            }

            .form-switch {
                transform: scale(.9) !important;
                margin: 0 0 0 40px !important;
                z-index: 10 !important;
                position: relative !important;
            }

            .form-switch .slider {
                width: 110px !important;
                height: 40px !important;
            }

            .form-switch .slider:before {
                height: 30px !important;
                width: 30px !important;
                bottom: 3px !important;
                left: 3px !important;
            }

            .form-switch input:checked+.slider:before {
                transform: translateX(44px) !important;
            }
        }

        .our-product-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .our-product-content {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }

        .our-product-content .product-btn-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: auto;
        }

        .our-product-content .product-btn {
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 32px;
            font-size: 1.15rem;
            font-weight: bold;
            border-radius: 8px;
        }

        .our-product-content .product-social {
            display: flex;
            align-items: center;
            margin-top: 17px;
        }

        .our-product-content .product-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #3b5998;
            color: #fff;
            width: 54px;
            height: 54px;
            border-radius: 8px;
            font-size: 1.3rem;
            margin-left: 0;
            margin-right: 0;
            transition: background 0.2s, color 0.2s;
            box-shadow: 0 2px 6px rgba(24, 119, 243, 0.08);
        }

        .our-product-content .product-social a:hover {
            background: #2d4985;
            color: #fff;
        }

        #product-card-3 .our-product-content h5 {
            font-size: 2rem;
            font-weight: bold;
        }

        #product-card-3 .our-product-content h5 p {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        #product-card-3 .our-product-img {
            width: 100%;
            max-width: 480px;
            max-height: 400px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        #product-card-3 .our-product-content p,
        #product-card-3 .our-product-content ul,
        #product-card-3 .our-product-content li {
            font-size: 1.25rem;
        }

        #product-card-3 .our-product-content strong {
            font-size: 1.18rem;
        }

        .our-product-content h5 {
            font-size: 2rem;
            font-weight: bold;
        }

        .our-product-content h5 p {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .our-product-content p,
        .our-product-content ul,
        .our-product-content li {
            font-size: 1.25rem;
        }

        .our-product-content strong {
            font-size: 1.18rem;
        }

        .our-product-img {
            width: 100%;
            max-width: 480px;
            max-height: 400px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Modal Styles */
        #petSelectionModal .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        #petSelectionModal .modal-header {
            border-bottom: none;
            padding: 1.5rem 1.5rem 0.5rem;
        }

        #petSelectionModal .modal-body {
            padding: 1.5rem;
        }

        #petSelectionModal .btn {
            padding: 1.5rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        #petSelectionModal .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        #petSelectionModal .btn img {
            transition: all 0.3s ease;
        }

        #petSelectionModal .btn:hover img {
            transform: scale(1.1);
        }

        #petSelectionModal .modal-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .pet-icon-box {
            width: 120px;
            height: 120px;
            margin: 0 auto 10px auto;
            cursor: pointer;
            background: transparent;
            box-shadow: none;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 10;
            pointer-events: auto;
        }

        .pet-icon-box:hover {
            background: transparent;
            box-shadow: none;
            border: none;
        }

        .pet-icon-img {
            width: 170px;
            height: 170px;
            object-fit: contain;
            display: block;
            transition: transform 0.2s;
            background: transparent;
            /* Green filter for #116530 */
            filter: brightness(0) saturate(100%) invert(24%) sepia(98%) saturate(1100%) hue-rotate(66deg) brightness(90%) contrast(95%);
        }

        .pet-icon-box:hover .pet-icon-img {
            transform: scale(1.1);
        }

        .pet-icon-btn {
            outline: none;
            border: none;
            background: transparent;
            padding: 0;
            margin: 0;
            box-shadow: none;
            appearance: none;
            -webkit-appearance: none;
            transition: box-shadow 0.2s;
        }

        .pet-icon-btn:focus {
            outline: 2px solid #1976d2;
            box-shadow: 0 0 0 2px #1976d2;
        }
    </style>

    <style>
        /* Ensure columns center their content for the modal icons */
        #petSelectionModal .col-6 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <style>
        /* Force modal and buttons to accept pointer events and be on top */
        #petSelectionModal {
            pointer-events: auto !important;
            z-index: 9999 !important;
        }

        #petSelectionModal .pet-icon-btn {
            pointer-events: auto !important;
            z-index: 99999 !important;
        }
    </style>

    <style>
        /* Custom extra large popup size */
        @media (min-width: 576px) {
            .custom-popup-xl {
                max-width: 700px;
            }
        }

        @media (min-width: 992px) {
            .custom-popup-xl {
                max-width: 900px;
            }
        }
    </style>

    <style>
        /* Increase modal popup height */
        .custom-popup-xl .modal-content {
            min-height: 320px;
        }

        @media (min-width: 992px) {
            .custom-popup-xl .modal-content {
                min-height: 400px;
            }
        }
    </style>

    <style>
        .language-dropdown-fixed {
            position: fixed !important;
            top: 18px !important;
            right: 30px !important;
            z-index: 3000 !important;
        }

        [dir="rtl"] .language-dropdown-fixed {
            right: auto !important;
            left: 30px !important;
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

        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
            <div class="container position-relative">
                <h1 id="products-page-title" data-translate="brands.title">Our Brands</h1>
            </div>
        </div>
        <section id="our-products-section" class="our-products-section py-5">
            <div class="container">
                <div class="our-products-cards d-flex flex-wrap justify-content-center align-items-stretch gap-4 flex-md-row flex-column"
                    style="gap: 32px;">
                    <div class="product-card-single" style="max-width: 420px; min-width: 280px; flex: 1 1 320px;"
                        id="product-card-1">
                        <div class="our-product-card p-4 h-100 shadow rounded bg-white">
                            <img src="{{asset('assets/img/101-brand.png')}}" alt="Product 1" class="img-fluid mb-3 our-product-img">
                            <div class="our-product-content">
                                <h5 class="mb-2" data-translate="brands.101.adult.title">101 Bites</h5>
                                <p data-translate="brands.101.adult.desc">A balanced and nutritious dry dog food
                                    specially formulated for adult dogs. Supports healthy digestion, maintains muscle
                                    tone, and promotes a shiny coat.</p>
                                <div>
                                    <strong data-translate="brands.nutrition">Nutritional Value</strong>
                                    <ul>
                                        <li data-translate="brands.101.adult.protein">High protein</li>
                                        <li data-translate="brands.101.adult.vitamins">Vitamins (A, D, E)</li>
                                        <li data-translate="brands.101.adult.minerals">Minerals</li>
                                        <li data-translate="brands.101.adult.omega">Omega fatty acids</li>
                                    </ul>
                                </div>
                                <div>
                                    <strong data-translate="brands.suitable">Suitable for</strong>
                                    <p data-translate="brands.101.adult.suitable">Adult dogs</p>
                                </div>
                                <div class="product-btn-row">
                                    <a class="product-btn" href="https://101bite.com/store"
                                        data-translate="brands.101.buy">Buy Now</a>
                                    <span class="product-social">
                                        <a href="https://web.facebook.com/profile.php?id=61575007538336" target="_blank"
                                            title="Facebook"><i class="bi bi-facebook"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-single" style="max-width: 420px; min-width: 280px; flex: 1 1 320px;"
                        id="product-card-2">
                        <div class="our-product-card p-4 h-100 shadow rounded bg-white">
                            <img src="{{asset('assets/img/doggo-brand.png')}}" alt="Product 2" class="img-fluid mb-3 our-product-img">
                            <div class="our-product-content">
                                <h5 class="mb-2" data-translate="brands.101.puppy.title">Doggo</h5>
                                <p data-translate="brands.101.puppy.desc">Nutritious dry food specially designed for
                                    puppies. Carefully formulated to support healthy growth, strong bones, and optimal
                                    brain development.</p>
                                <div>
                                    <strong data-translate="brands.nutrition">Nutritional Value</strong>
                                    <ul>
                                        <li data-translate="brands.101.puppy.dha">Contains DHA</li>
                                        <li data-translate="brands.101.puppy.protein">Balanced protein</li>
                                        <li data-translate="brands.101.puppy.calcium">Calcium</li>
                                        <li data-translate="brands.101.puppy.antioxidants">Antioxidants</li>
                                    </ul>
                                </div>
                                <div>
                                    <strong data-translate="brands.suitable">Suitable for</strong>
                                    <p data-translate="brands.101.puppy.suitable">Puppies under 6 months old</p>
                                </div>
                                <div class="product-btn-row">
                                    <a class="product-btn" href="https://101bite.com/store"
                                        data-translate="brands.101.buy">Buy Now</a>
                                    <span class="product-social">
                                        <a href="https://web.facebook.com/profile.php?id=61575007538336" target="_blank"
                                            title="Facebook"><i class="bi bi-facebook"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-single" style="max-width: 420px; min-width: 280px; flex: 1 1 320px;"
                        id="product-card-3">
                        <div class="our-product-card p-4 h-100 shadow rounded bg-white">
                            <img src="{{asset('assets/img/bessa-brand.png')}}" alt="Product 3" class="img-fluid mb-3 our-product-img">
                            <div class="our-product-content">
                                <h5 class="mb-2" data-translate="brands.bessa.adult.title">Bessa Bites</h5>
                                <p data-translate="brands.bessa.adult.desc">Complete and balanced dry cat food for
                                    adult cats. Helps maintain healthy weight, supports urinary tract health, and
                                    enhances coat condition.</p>
                                <div>
                                    <strong data-translate="brands.nutrition">Nutritional Value</strong>
                                    <ul>
                                        <li data-translate="brands.bessa.adult.protein">High protein</li>
                                        <li data-translate="brands.bessa.adult.taurine">Taurine</li>
                                        <li data-translate="brands.bessa.adult.vitamins">Vitamins (B-complex, E)</li>
                                        <li data-translate="brands.bessa.adult.minerals">Minerals</li>
                                    </ul>
                                </div>
                                <div>
                                    <strong data-translate="brands.suitable">Suitable for</strong>
                                    <p data-translate="brands.bessa.adult.suitable">Cats over 6 months old</p>
                                </div>
                                <div class="product-btn-row">
                                    <a class="product-btn" href="https://101bite.com/store"
                                        data-translate="brands.bessa.buy">Buy Now</a>
                                    <span class="product-social">
                                        <a href="https://web.facebook.com/bessabites" target="_blank" title="Facebook"><i
                                                class="bi bi-facebook"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-single" style="max-width: 420px; min-width: 280px; flex: 1 1 320px;"
                        id="product-card-4">
                        <div class="our-product-card p-4 h-100 shadow rounded bg-white">
                            <img src="{{asset('assets/img/mshmsh-brand.png')}}" alt="Product 4" class="img-fluid mb-3 our-product-img">
                            <div class="our-product-content">
                                <h5 class="mb-2" data-translate="brands.bessa.kitten.title">Mshmsh</h5>
                                <p data-translate="brands.bessa.kitten.desc">Dry food for specially designed kittens,
                                    supporting fast growth with essential nutrients for strong bones, good eyesight, and
                                    immunity.</p>
                                <div>
                                    <strong data-translate="brands.nutrition">Nutritional Value</strong>
                                    <ul>
                                        <li data-translate="brands.bessa.kitten.dha">Rich in DHA</li>
                                        <li data-translate="brands.bessa.kitten.protein">Protein</li>
                                        <li data-translate="brands.bessa.kitten.vitamins">Vitamins (A, D, E)</li>
                                        <li data-translate="brands.bessa.kitten.minerals">Minerals including calcium
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <strong data-translate="brands.suitable">Suitable for</strong>
                                    <p data-translate="brands.bessa.kitten.suitable">Kittens under 6 months old</p>
                                </div>
                                <div class="product-btn-row">
                                    <a class="product-btn" href="https://101bite.com/store"
                                        data-translate="brands.bessa.buy">Buy Now</a>
                                    <span class="product-social">
                                        <a href="https://web.facebook.com/bessabites" target="_blank" title="Facebook"><i
                                                class="bi bi-facebook"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-single" style="max-width: 420px; min-width: 280px; flex: 1 1 320px;"
                        id="product-card-5">
                        <div class="our-product-card p-4 h-100 shadow rounded bg-white">
                            <img src="{{asset('assets/img/catcoty.jpeg')}}" alt="Product 5" class="img-fluid mb-3 our-product-img" style="height: 259px;">
                            <div class="our-product-content">
                                <h5 class="mb-2" data-translate="brands.catcoty">CatCoty</h5>
                                <p data-translate="brands.bessa.kitten.desc">Dry food for specially designed kittens,
                                    supporting fast growth with essential nutrients for strong bones, good eyesight, and
                                    immunity.</p>
                                <div>
                                    <strong data-translate="brands.nutrition">Nutritional Value</strong>
                                    <ul>
                                        <li data-translate="brands.bessa.kitten.dha">Rich in DHA</li>
                                        <li data-translate="brands.bessa.kitten.protein">Protein</li>
                                        <li data-translate="brands.bessa.kitten.vitamins">Vitamins (A, D, E)</li>
                                        <li data-translate="brands.bessa.kitten.minerals">Minerals including calcium
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <strong data-translate="brands.suitable">Suitable for</strong>
                                    <p data-translate="brands.bessa.kitten.suitable">Kittens under 6 months old</p>
                                </div>
                                <div class="product-btn-row">
                                    <a class="product-btn" href="https://101bite.com/store"
                                        data-translate="brands.bessa.buy">Buy Now</a>
                                    <span class="product-social">
                                        <a href="https://web.facebook.com/bessabites" target="_blank" title="Facebook"><i
                                                class="bi bi-facebook"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('external-script')
    <div class="modal fade" id="petSelectionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="petSelectionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl custom-popup-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="petSelectionModalLabel" data-translate="brands.select"
                        style="width:100%;text-align:center;">Select Pet Type</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <button type="button" class="pet-icon-box pet-icon-btn" onclick="showDogs()">
                                <img src="{{asset('assets/img/dog-icon.png')}}" alt="Dog Icon" class="pet-icon-img" />
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="pet-icon-box pet-icon-btn" onclick="showCats()">
                                <img src="{{asset('assets/img/cat-icon.png')}}" alt="Cat Icon" class="pet-icon-img" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hide all product cards before selection
            document.getElementById('product-card-1').style.display = 'none';
            document.getElementById('product-card-2').style.display = 'none';
            document.getElementById('product-card-3').style.display = 'none';
            document.getElementById('product-card-4').style.display = 'none';
            document.getElementById('product-card-5').style.display = 'none';
            var petSelectionModal = new bootstrap.Modal(document.getElementById('petSelectionModal'));
            petSelectionModal.show();
            // Hide sidebar when popup is visible
            document.getElementById('pet-sidebar').style.display = 'none';

            // Sidebar logic
            const sidebar = document.getElementById('pet-sidebar');
            const dogBtn = document.getElementById('sidebar-dog-btn');
            const catBtn = document.getElementById('sidebar-cat-btn');
            const toggleBtn = document.getElementById('sidebar-toggle-btn');
            let currentPet = null;

            function activateSidebar(pet) {
                sidebar.style.display = 'flex';
                if (pet === 'dog') {
                    dogBtn.classList.add('active');
                    catBtn.classList.remove('active');
                    // Arrow points to dog (up if vertical, left if horizontal)
                    const icon = document.getElementById('sidebar-toggle-icon');
                    if (window.innerWidth > 768) {
                        icon.className = 'bi bi-arrow-up';
                    } else {
                        icon.className = 'bi bi-arrow-left';
                    }
                } else {
                    catBtn.classList.add('active');
                    dogBtn.classList.remove('active');
                    // Arrow points to cat (down if vertical, right if horizontal)
                    const icon = document.getElementById('sidebar-toggle-icon');
                    if (window.innerWidth > 768) {
                        icon.className = 'bi bi-arrow-down';
                    } else {
                        icon.className = 'bi bi-arrow-right';
                    }
                }
                currentPet = pet;
            }

            function showDogsSidebar() {
                document.getElementById('product-card-1').style.display = 'block';
                document.getElementById('product-card-2').style.display = 'block';
                document.getElementById('product-card-3').style.display = 'none';
                document.getElementById('product-card-4').style.display = 'none';
                document.getElementById('product-card-5').style.display = 'none';
                const pageTitle = document.getElementById('products-page-title');
                pageTitle.setAttribute('data-translate', 'brands.dogs');
                pageTitle.textContent = 'Dog Brands';
                setLanguage(localStorage.getItem('language') || 'en');
                activateSidebar('dog');
            }

            function showCatsSidebar() {
                document.getElementById('product-card-1').style.display = 'none';
                document.getElementById('product-card-2').style.display = 'none';
                document.getElementById('product-card-3').style.display = 'block';
                document.getElementById('product-card-4').style.display = 'block';
                document.getElementById('product-card-5').style.display = 'block';
                const pageTitle = document.getElementById('products-page-title');
                pageTitle.setAttribute('data-translate', 'brands.cats');
                pageTitle.textContent = 'Cat Brands';
                setLanguage(localStorage.getItem('language') || 'en');
                activateSidebar('cat');
            }

            dogBtn.addEventListener('click', showDogsSidebar);
            catBtn.addEventListener('click', showCatsSidebar);
            toggleBtn.addEventListener('click', function() {
                if (currentPet === 'dog') {
                    showCatsSidebar();
                } else {
                    showDogsSidebar();
                }
            });

            // Replace modal showDogs/showCats to use sidebar logic
            window.showDogs = function() {
                showDogsSidebar();
                var petSelectionModal = bootstrap.Modal.getInstance(document.getElementById(
                    'petSelectionModal'));
                petSelectionModal.hide();
                // Show sidebar after popup closes
                sidebar.style.display = 'flex';
            }
            window.showCats = function() {
                showCatsSidebar();
                var petSelectionModal = bootstrap.Modal.getInstance(document.getElementById(
                    'petSelectionModal'));
                petSelectionModal.hide();
                // Show sidebar after popup closes
                sidebar.style.display = 'flex';
            }
        });
    </script>

    <!-- TEST: Font Awesome icon should appear below. Remove after confirming icons work. -->
    <!-- <i class="fa-solid fa-dog" style="font-size: 40px; color: red;"></i> -->

    <!-- Sidebar for pet selection -->
    <div id="pet-sidebar"
        style="display:none; position:fixed; top:50%; right:0; transform:translateY(-50%); z-index:1050; background:#fff; border-radius:16px 0 0 16px; box-shadow:0 2px 16px rgba(0,0,0,0.08); padding:24px 12px; display:flex; flex-direction:column; align-items:center; gap:18px; min-width:60px;">
        <button id="sidebar-dog-btn" class="sidebar-pet-btn" type="button"
            style="background:none; border:none; outline:none; cursor:pointer; padding:0;">
            <img src="{{asset('assets/img/dog-icon.png')}}" alt="Dog Icon"
                style="width:38px; height:38px; object-fit:contain; opacity:0.7; transition:opacity 0.2s;" />
        </button>
        <button id="sidebar-toggle-btn" class="sidebar-toggle-btn" type="button"
            style="background:#198754; border:none; border-radius:50%; width:36px; height:36px; color:#fff; display:flex; align-items:center; justify-content:center; font-size:1.3rem; cursor:pointer;">
            <span id="sidebar-toggle-icon" class="bi bi-arrow-up"
                style="display: inline-block; transition: none !important;"></span>
        </button>
        <button id="sidebar-cat-btn" class="sidebar-pet-btn" type="button"
            style="background:none; border:none; outline:none; cursor:pointer; padding:0;">
            <img src="{{asset('assets/img/cat-icon.png')}}" alt="Cat Icon"
                style="width:38px; height:38px; object-fit:contain; opacity:0.7; transition:opacity 0.2s; filter: brightness(0) saturate(100%) invert(66%) sepia(16%) saturate(1167%) hue-rotate(66deg) brightness(98%) contrast(92%);" />
        </button>
    </div>

    <style>
        #pet-sidebar {
            background: #fff !important;
            border-radius: 16px 0 0 16px !important;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08) !important;
            padding: 24px 12px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 18px !important;
            min-width: 60px !important;
            height: auto !important;
        }

        @media (max-width: 768px) {
            #pet-sidebar {
                border-radius: 16px 16px 0 0 !important;
                padding: 4px 8px !important;
                min-width: unset !important;
                width: auto !important;
                height: 120px !important;
                box-shadow: 0 -2px 12px rgba(0, 0, 0, 0.08) !important;
                gap: 8px !important;
                background: #fff !important;
                align-items: center !important;
                flex-direction: column !important;
            }
        }

        #pet-sidebar .sidebar-pet-btn.active img {
            opacity: 1 !important;
            width: 56px !important;
            height: 56px !important;
            filter: brightness(0) saturate(100%) invert(24%) sepia(98%) saturate(1100%) hue-rotate(66deg) brightness(90%) contrast(95%) drop-shadow(0 4px 16px #11653055) !important;
        }

        #pet-sidebar .sidebar-pet-btn img {
            opacity: 0.5;
            transition: opacity 0.2s, filter 0.2s;
            /* Much lighter green filter for inactive icon */
            filter: brightness(0) saturate(100%) invert(85%) sepia(20%) saturate(800%) hue-rotate(66deg) brightness(120%) contrast(90%);
        }

        #pet-sidebar .sidebar-pet-btn:hover img {
            opacity: 1;
        }

        #pet-sidebar .sidebar-toggle-btn {
            background: #198754;
            color: #fff;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin: 8px 0;
            box-shadow: 0 2px 8px #1976d233;
            transition: background 0.2s;
        }

        #pet-sidebar .sidebar-toggle-btn:hover {
            background: #157347;
        }

        @media (max-width: 768px) {
            #pet-sidebar {
                padding: 4px 8px !important;
                min-width: unset !important;
                height: 56px !important;
                box-shadow: 0 -2px 12px rgba(0, 0, 0, 0.08) !important;
                gap: 8px !important;
            }

            #pet-sidebar .sidebar-pet-btn img {
                width: 28px !important;
                height: 28px !important;
            }

            #pet-sidebar .sidebar-pet-btn.active img {
                width: 36px !important;
                height: 36px !important;
            }

            #pet-sidebar .sidebar-toggle-btn {
                width: 28px !important;
                height: 28px !important;
                font-size: 1rem !important;
                margin: 0 6px !important;
            }
        }
    </style>
@endpush
