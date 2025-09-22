<body>

    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="language-dropdown-fixed">
            <select id="languageDropdown" onchange="setLanguage(this.value)">
                <option value="en">EN</option>
                <option value="ar">عربي</option>
            </select>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="{{route('site.home')}}" class="logo d-flex align-items-center">
                <img src="{{asset('assets/img/logo.png')}}" alt=" ">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('site.home')}}" class="active" data-translate="nav.home">Home</a></li>
                    <li><a href="{{route('site.aboutUs')}}" data-translate="nav.about">About Us</a></li>
                    <li class="nav-item dropdown megamenu-li dmenu" style="position: relative;">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" aria-haspopup="true"
                            aria-expanded="false" data-translate="nav.brands">
                            Our Brands
                        </a>
                        <div class="dropdown-menu megamenu sm-menu border-top brandDropDown"
                            aria-labelledby="dropdown01">
                            <div class="menu_content">
                                <div class="category_links">
                                    <a href="{{route('site.ourBrands')}}" data-translate="nav.brands">Our Brands</a>
                                    <a href="https://101bite.com/store" data-translate="nav.store">Our Store</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{route('site.petsCalculator')}}" data-translate="nav.pets_calculator">Pets</a></li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" aria-haspopup="true"
                            aria-expanded="false" data-translate="nav.blog">
                            Our Blog
                        </a>
                        <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                            <div class="row" style="row-gap: 40px;">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="menu_content">
                                        <h4 data-translate="blog.recent">
                                            Most Recent
                                        </h4>
                                        <div class="category_links">
                                            <div class="recent_topics">
                                                <div class="recent_topics_img">
                                                    <a href="{{route('site.article')}}">
                                                        <img alt="article title" src="{{asset('assets/img/Process5.jpg')}}"
                                                            class="img-fluid">
                                                    </a>
                                                </div>
                                                <a href="{{route('site.article')}}" class="p-0 my-4">
                                                    <span data-translate="blog.title">
                                                        Can Cats Eat Peanut Butter?
                                                    </span>
                                                </a>
                                            </div>
                                            <a href="{{route('site.article')}}" class="btn articlesBtn d-inline-block"
                                                data-translate="blog.read_more">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="menu_content menu_content_mobile">
                                        <h4 data-translate="blog.content_title">
                                            Articles
                                        </h4>
                                        <div class="category_links">
                                            <a data-translate="blog.content_topic1" href="{{route('site.article')}}"
                                                class="link_topics">Proper Puppy Nutrition Is One
                                                Key to a Lifetime of Good Health</a>
                                            <a data-translate="blog.content_topic2" href="{{route('site.article')}}"
                                                class="link_topics">Should You Be Feeding a Large
                                                Breed Dog Formula?</a>
                                            <a data-translate="blog.content_topic3" href="{{route('site.article')}}"
                                                class="link_topics">Debarking Pet Myths: Senior
                                                Dogs Don’t Need Senior Dog Food</a>
                                            <a data-translate="blog.content_topic4" href="{{route('site.article')}}"
                                                class="link_topics">Pet Food Ingredients:
                                                Petzybites products Guide</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="menu_content">
                                        <h4 data-translate="blog.category_title">
                                            Categories
                                        </h4>
                                        <div class="category_links">
                                            <a data-translate="blog.category1" href="{{route('site.articleCategories')}}"
                                                class="link_topics">Adoption</a>
                                            <a data-translate="blog.category2" href="{{route('site.articleCategories')}}"
                                                class="link_topics">Health</a>
                                            <a data-translate="blog.category3" href="{{route('site.articleCategories')}}"
                                                class="link_topics">Puppy</a>
                                            <a data-translate="blog.category_link" href="{{route('site.ourBlog')}}"
                                                class="btn articlesBtn d-inline-block">
                                                See All Articles
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" aria-haspopup="true"
                            aria-expanded="false" data-translate="nav.bag">
                            Our Bag
                        </a>
                        <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                            <div class="row" style="row-gap: 40px;">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="menu_content">
                                        <h4 data-translate="bag.head" style="font-size: 1.3rem;">
                                            What's in the Bag
                                        </h4>
                                        <p data-translate="bag.desc" class="text-white" style="font-size: 1.2rem;">
                                            Discover why families have trusted Diamond Pet Foods for more than fifty
                                            years.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6">
                                    <div class="menu_content">
                                        <div class="category_links">
                                            <a data-translate="bag.link1" href="{{route('site.nutritionalIntegrity')}}"
                                                class="link_topics" style="font-size: 1.1rem;">
                                                Nutritional Integrity
                                            </a>
                                            <a data-translate="bag.link2" href="{{route('site.qualityAssurance')}}"
                                                class="link_topics" style="font-size: 1.1rem;">
                                                Quality Assurance
                                            </a>
                                            <a data-translate="bag.link3" href="{{route('site.ingredientGlossary')}}"
                                                class="link_topics" style="font-size: 1.1rem;">
                                                Ingredient Glossary
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{route('site.familyGallery')}}" data-translate="nav.gallery">Family Gallery</a></li>
                    <li><a href="{{route('site.contactUs')}}" data-translate="nav.contact">Contact Us</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
