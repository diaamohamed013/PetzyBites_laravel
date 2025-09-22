<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ env('APP_NAME') }} - @yield('page-headTitle')</title>
    @if (route('site.familyGallery'))
        <meta name="description"
            content="استعرض صور حيواناتكم الأليفة الجميلة في معرض عائلة PetzyBites. شارك بصور حيوانك الأليف معنا.">
        <meta name="keywords" content="معرض حيوانات أليفة, صور قطط, صور كلاب, حيوانات أليفة, PetzyBites gallery">
    @else
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif
    <meta name="google-site-verification" content="0k82K9_M7fg9vFjqotCzoownqGQzphuRNHCE4od8J90" />
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    @stack('gallary-css')
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/articles.css') }}" rel="stylesheet">
    @stack('external-code')
</head>
