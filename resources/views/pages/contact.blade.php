@extends('master')
@section('page-headTitle')
    Contact Us
@endsection
@push('external-code')
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
                <h1 data-translate="contact.title">Contact Us</h1>
            </div>
        </div>

        <section id="contact" class="contact section">
            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3440.2937911095723!2d31.16299437556855!3d30.42777247473284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDI1JzQwLjAiTiAzMcKwMDknNTYuMSJF!5e0!3m2!1sen!2seg!4v1748782597598!5m2!1sen!2seg"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen=""></iframe>
            </div><!-- End Google Maps -->


            <div class="container" data-aos="fade">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3 data-translate="contact.getintouch">Get in touch</h3>
                            <p data-translate="contact.intro">Contact us today and let's make your pet's nutrition our
                                priority!</p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4 data-translate="contact.location">Location:</h4>
                                    <p data-translate="footer.address1"> </p>
                                    <p data-translate="footer.address2">Egypt</p>
                                </div>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4 data-translate="footer.email.label">Email:</h4>
                                    <p data-translate="footer.email">info@petzybites.com</p>
                                </div>
                            </div>
                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4 data-translate="contact.call">Call:</h4>
                                    <p>
                                        <a href="tel:+201022323293" dir="ltr">+20 102 232 3293</a>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required data-translate-placeholder="contact.form.name">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required data-translate-placeholder="contact.form.email">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required data-translate-placeholder="contact.form.subject">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required
                                    data-translate-placeholder="contact.form.message"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading" data-translate="contact.form.loading">Loading</div>
                                <div class="error-message" data-translate="contact.form.error"></div>
                                <div class="sent-message" data-translate="contact.form.sent">Your message has been
                                    sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit" data-translate="contact.form.send">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </section>

        <section id="call-to-action" class="call-to-action section light-background">

            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 data-translate="contact.newsletter.title">Subscribe To Our Newsletter</h3>
                            <p class="opacity-50" data-translate="contact.newsletter.desc">
                                Subscribe with your email to get our latest news delivered straight to your inbox!
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                                <div class="form-group d-flex align-items-stretch">
                                    <input type="email" name="email" class="form-control h-100"
                                        placeholder="Enter your e-mail"
                                        data-translate-placeholder="contact.newsletter.placeholder">
                                    <input type="submit" class="btn btn-secondary px-4" value="Subcribe"
                                        data-translate-value="contact.newsletter.subscribe">
                                </div>
                                <div class="loading" data-translate="contact.newsletter.loading">Loading</div>
                                <div class="error-message" data-translate="contact.newsletter.error"></div>
                                <div class="sent-message" data-translate="contact.newsletter.sent">
                                    Your subscription request has been sent. Thank you!
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
