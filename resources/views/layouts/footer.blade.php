    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="{{ route('site.home') }}" class="logo d-flex align-items-center">
                            <span class="sitename" data-translate="footer.company">PetzyBites Company, LLC</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p data-translate="footer.address1"></p>
                            <p data-translate="footer.address2">Egypt</p>
                            <p class="mt-3">
                                <strong data-translate="footer.phone.label">Phone:</strong>
                                <span>
                                    <a href="tel:+201022323293" dir="ltr">+20 102 232 3293</a>
                                </span>
                            </p>
                            <p><strong data-translate="footer.email.label">Email:</strong> <span
                                    data-translate="footer.email">info@petzybites.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4 data-translate="footer.useful">Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('site.home') }}" data-translate="nav.home">Home</a></li>
                            <li><a href="{{ route('site.aboutUs') }}" data-translate="nav.about">About us</a></li>
                            <li><a href="{{ route('site.ourBrands') }}" data-translate="nav.brands">Brands</a></li>
                            <li><a href="{{ route('site.familyGallery') }}" data-translate="nav.gallery">Family
                                    Gallery</a></li>
                            <li><a href="{{ route('site.contactUs') }}" data-translate="nav.contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4 data-translate="footer.brands">Our Brands</h4>
                        <ul>
                            <li><a target="_blank" href="https://101bite.com/101Bites" data-translate="brands.101">101 Bites</a></li>
                            <li><a target="_blank" href="https://101bite.com/BessaBites" data-translate="brands.bessa">Bessa Bites</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        <strong data-translate="footer.rights">
                            © Copyright 2024 PetzyBites Company, LLC. All Rights Reserved
                        </strong>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="https://www.facebook.com/PetzyBites" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/petzybites/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/+201022323293" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.tiktok.com/@petzybites?_t=ZS-8zkHFTqQNRH&_r=1" target="_blank"><i
                            class="bi bi-tiktok"></i></a>
                </div>

            </div>
        </div>

    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/translations.js') }}"></script>
    <script src="{{ asset('assets/js/di_script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var lang = localStorage.getItem('language') || 'en';
            var dropdown = document.getElementById('languageDropdown');
            if (dropdown) dropdown.value = lang;
        });
    </script>
    @stack('external-script')
    </body>

    </html>
