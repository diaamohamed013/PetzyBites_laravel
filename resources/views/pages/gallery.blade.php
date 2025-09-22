@extends('master')
@section('page-headTitle')
    Family Gallery
@endsection
@push('gallary-css')
    <link href="{{asset('assets/css/gallery.css')}}" rel="stylesheet">
@endpush
@push('external-code')
    <style>
        .main {
            padding-top: 0;
        }

        .page-title {
            margin-top: 0;
            padding: 60px 0;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
            max-width: 600px;
            border-radius: 8px;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            right: 15px;
            top: 10px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="tel"],
        .form-group input[type="email"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-group input[type="file"] {
            padding: 5px 0;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-columns {
            display: flex;
            gap: 20px;
        }

        .form-column {
            flex: 1;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .form-columns {
                flex-direction: column;
            }

            .modal-content {
                width: 95%;
                padding: 15px;
            }
        }

        .swiper-slide {
            height: 350px !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .swiper-slide img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
            margin-bottom: 10px;
        }

        .pet-info {
            width: 100%;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 0 0 8px 8px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pet-info h3 {
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #333;
        }

        .pet-info p {
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: #666;
        }

        .swiper {
            padding: 20px 0;
        }

        .swiper-wrapper {
            align-items: stretch;
        }

        .gallery-hero {
            background-color: #116530;
            padding: 80px 0;
        }

        .gallery-hero h1 {
            color: #fff;
            font-weight: 700;
        }

        .gallery-hero .lead {
            color: #fff;
            font-size: 1.2rem;
        }

        .gallery-hero .col-lg-6:last-child {
            background-color: #116530;
            padding: 20px;
            border-radius: 10px;
        }

        .gallery-hero img {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 10px;
        }

        .gallery-hero img:hover {
            transform: scale(1.02);
        }

        .fixed-submit-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
        }

        .fixed-submit-button .btn {
            padding: 15px 30px;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .fixed-submit-button .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .swiper-pagination-bullet {
            background: #116530 !important;
            opacity: 1 !important;
        }

        .swiper-pagination-bullet-active {
            background: #fff !important;
            border: 2px solid #116530 !important;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #116530 !important;
            background: none !important;
            border: none !important;
            box-shadow: none !important;
            width: 40px;
            height: 40px;
            border-radius: 0;
            transition: none;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: none !important;
            color: #0a3a1a !important;
        }

        .swiper,
        .swiper-slide {
            cursor: default !important;
        }

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
        <section class="gallery-hero py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 mb-0" style="color: #fff; font-weight: 700;" data-translate="gallery.title">
                            PetzyBites Family<br>
                            Gallery
                        </h1>
                        <p class="lead mb-4" data-translate="gallery.subtitle">Share your beloved pets with our
                            community. Upload your pet's photo and join our growing family!</p>
                        <div class="d-flex justify-content-start mt-4">
                            <button id="openFormBtn" class="btn btn-primary btn-lg"
                                data-translate="gallery.form.open">Submit A Photo</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('assets/img/Gallery0.png')}}" alt="Pet Gallery" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-section py-5">
            <div class="container">
                <div class="section-header mb-4">
                    <h2 data-translate="gallery.cats">Cats</h2>
                </div>
                <div class="swiper cats-swiper">
                    <div id="cats-section" class="swiper-wrapper">
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="section-header mb-4 mt-5">
                    <h2 data-translate="gallery.dogs">Dogs</h2>
                </div>
                <div class="swiper dogs-swiper">
                    <div id="dogs-section" class="swiper-wrapper">
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="section-header mb-4 mt-5">
                    <h2 data-translate="gallery.young">Puppies & Kittens</h2>
                </div>
                <div class="swiper young-pets-swiper">
                    <div id="young-pets-section" class="swiper-wrapper">
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
    </main>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 data-translate="gallery.form.title">Submit Your Pet's Photo</h2>
            <form id="photoSubmissionForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="species" data-translate="gallery.form.species">Species:</label>
                    <select id="species" name="species" required>
                        <option value="" data-translate="gallery.form.species.select">Select Species</option>
                        <option value="Cat" data-translate="gallery.form.species.cat">Cat</option>
                        <option value="Dog" data-translate="gallery.form.species.dog">Dog</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fullName" data-translate="gallery.form.fullname">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>

                <div class="form-group">
                    <label for="petName" data-translate="gallery.form.petname">Pet's Name:</label>
                    <input type="text" id="petName" name="petName" required>
                </div>

                <div class="form-group">
                    <label for="mobileNumber" data-translate="gallery.form.mobile">Mobile Number:</label>
                    <input type="tel" id="mobileNumber" name="mobileNumber" required pattern="[0-9]{10,15}"
                        title="Please enter a valid mobile number (10-15 digits)">
                </div>

                <div class="form-group">
                    <label for="petBirthday" data-translate="gallery.form.birthday">Pet's Birthday:</label>
                    <input type="date" id="petBirthday" name="petBirthday" required>
                </div>

                <div class="form-group">
                    <label for="email" data-translate="gallery.form.email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="album" data-translate="gallery.form.album">Album:</label>
                    <select id="album" name="album" required>
                        <option value="" data-translate="gallery.form.album.select">Select Album</option>
                        <option value="Cats" data-translate="gallery.form.album.cats">Cats</option>
                        <option value="Dogs" data-translate="gallery.form.album.dogs">Dogs</option>
                        <option value="Kittens" data-translate="gallery.form.album.kittens">Kittens</option>
                        <option value="Puppies" data-translate="gallery.form.album.puppies">Puppies</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="governorate" data-translate="gallery.form.governorate">Governorate:</label>
                    <select id="governorate" name="governorate" required>
                        <option value="" data-translate="gallery.form.governorate.select">Select Governorate
                        </option>
                        <option value="Cairo" data-translate="gallery.form.governorate.cairo">Cairo</option>
                        <option value="Alexandria" data-translate="gallery.form.governorate.alexandria">Alexandria
                        </option>
                        <option value="Giza" data-translate="gallery.form.governorate.giza">Giza</option>
                        <option value="Sharkia" data-translate="gallery.form.governorate.sharkia">Sharkia</option>
                        <option value="Dakahlia" data-translate="gallery.form.governorate.dakahlia">Dakahlia</option>
                        <option value="Gharbia" data-translate="gallery.form.governorate.gharbia">Gharbia</option>
                        <option value="Menoufia" data-translate="gallery.form.governorate.menoufia">Menoufia</option>
                        <option value="Qalyubia" data-translate="gallery.form.governorate.qalyubia">Qalyubia</option>
                        <option value="Port Said" data-translate="gallery.form.governorate.portsaid">Port Said
                        </option>
                        <option value="Suez" data-translate="gallery.form.governorate.suez">Suez</option>
                        <option value="Ismailia" data-translate="gallery.form.governorate.ismailia">Ismailia</option>
                        <option value="Kafr El Sheikh" data-translate="gallery.form.governorate.kafr">Kafr El Sheikh
                        </option>
                        <option value="Beheira" data-translate="gallery.form.governorate.beheira">Beheira</option>
                        <option value="Assiut" data-translate="gallery.form.governorate.assiut">Assiut</option>
                        <option value="Sohag" data-translate="gallery.form.governorate.sohag">Sohag</option>
                        <option value="Qena" data-translate="gallery.form.governorate.qena">Qena</option>
                        <option value="Aswan" data-translate="gallery.form.governorate.aswan">Aswan</option>
                        <option value="Luxor" data-translate="gallery.form.governorate.luxor">Luxor</option>
                        <option value="Red Sea" data-translate="gallery.form.governorate.redsea">Red Sea</option>
                        <option value="New Valley" data-translate="gallery.form.governorate.newvalley">New Valley
                        </option>
                        <option value="Matrouh" data-translate="gallery.form.governorate.matrouh">Matrouh</option>
                        <option value="North Sinai" data-translate="gallery.form.governorate.northsinai">North Sinai
                        </option>
                        <option value="South Sinai" data-translate="gallery.form.governorate.southsinai">South Sinai
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description" data-translate="gallery.form.description">Description:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="petImage" data-translate="gallery.form.image">Upload Image:</label>
                    <input type="file" id="petImage" name="petImage" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary" data-translate="gallery.form.submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('external-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("openFormBtn");
            var span = document.getElementsByClassName("close")[0];

            btn.onclick = function() {
                modal.style.display = "flex";
            }

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            const form = document.getElementById('photoSubmissionForm');
            let isSubmitting = false;
            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                console.log('Form submission event triggered!');

                if (isSubmitting) {
                    console.log('Already submitting, preventing double submission.');
                    return;
                }
                isSubmitting = true;

                const formData = new FormData(form);
                const submitButton = form.querySelector('button[type="submit"]');

                try {

                    submitButton.disabled = true;
                    submitButton.innerHTML = 'جاري الرفع...';

                    const response = await fetch('submit_photo.php', {
                        method: 'POST',
                        body: formData
                    });

                    if (!response.ok) {
                        const errorData = await response.json().catch(() => ({
                            message: 'خطأ غير معروف في السيرفر.'
                        }));
                        throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
                    }

                    const result = await response.json();

                    if (result.success) {
                        modal.style.display = "none";
                        form.reset();

                        await loadExistingImages();

                        alert(result.message);
                    } else {
                        alert('خطأ: ' + result.message);
                    }
                } catch (error) {
                    console.error('Submission Error:', error);
                    alert('حدث خطأ أثناء رفع الصورة: ' + error.message);
                } finally {
                    submitButton.disabled = false;
                    submitButton.innerHTML = 'Submit';
                    isSubmitting = false;
                }
            });

            const swiperConfig = {
                slidesPerView: 4,
                spaceBetween: 20,
                loop: false,
                grabCursor: true,
                centeredSlides: false,
                speed: 300,
                allowTouchMove: true,
                touchRatio: 1,
                touchAngle: 45,
                resistance: true,
                resistanceRatio: 0.85,
                watchSlidesProgress: true,
                preventInteractionOnTransition: false,
                autoHeight: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            };

            let catsSwiper = null;
            let dogsSwiper = null;
            let youngPetsSwiper = null;

            async function loadExistingImages() {
                console.log('Starting image fetch...');
                try {
                    const response = await fetch('get_images.php');
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const data = await response.json();

                    document.getElementById('cats-section').innerHTML = '';
                    document.getElementById('dogs-section').innerHTML = '';
                    document.getElementById('young-pets-section').innerHTML = '';

                    data.forEach(image => {
                        console.log('Processing image:', image);
                        console.log('Image path from data:', image.image_path);

                        if (!image.image_path || image.image_path.trim() === '') {
                            console.warn('Skipping image due to empty or missing image_path:', image);
                            return;
                        }

                        const albumIdMap = {
                            'Cats': 'cats-section',
                            'Dogs': 'dogs-section',
                            'Kittens': 'young-pets-section',
                            'Puppies': 'young-pets-section'
                        };
                        const albumId = albumIdMap[image.album];
                        const albumElement = document.getElementById(albumId);

                        if (albumElement) {
                            const swiperSlide = document.createElement('div');
                            swiperSlide.className = 'swiper-slide';

                            const img = document.createElement('img');
                            img.src = image.image_path;
                            img.alt = image.pet_name || 'Pet Image';
                            img.loading = 'lazy';

                            img.onerror = function() {
                                console.error('Error loading image:', this.src);
                                this.src = '{{asset("assets/img/placeholder.jpg")}}';
                                this.onerror = null;
                            };

                            const petInfo = document.createElement('div');
                            petInfo.className = 'pet-info';
                            petInfo.innerHTML = `
                                <h3>${image.pet_name || 'Unnamed Pet'}</h3>
                                <p><strong>Owner:</strong> ${image.full_name || 'Anonymous'}</p>
                                <p>${image.description || 'No description provided'}</p>
                            `;

                            swiperSlide.appendChild(img);
                            swiperSlide.appendChild(petInfo);
                            albumElement.appendChild(swiperSlide);
                        }
                    });

                    if (catsSwiper) catsSwiper.destroy(true, true);
                    if (dogsSwiper) dogsSwiper.destroy(true, true);
                    if (youngPetsSwiper) youngPetsSwiper.destroy(true, true);

                    catsSwiper = new Swiper('.cats-swiper', swiperConfig);
                    dogsSwiper = new Swiper('.dogs-swiper', swiperConfig);
                    youngPetsSwiper = new Swiper('.young-pets-swiper', swiperConfig);

                } catch (error) {
                    console.error('Error loading images:', error);
                }
            }

            loadExistingImages();

            var lang = localStorage.getItem('language') || 'en';
            var dropdown = document.getElementById('languageDropdown');
            if (dropdown) dropdown.value = lang;
        });
    </script>
@endpush
