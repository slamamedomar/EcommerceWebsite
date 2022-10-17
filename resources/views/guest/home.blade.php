<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labbes</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('mainassets/css/bootstrap.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/style.css')}}" type="text/css">
</head>

<body>


    @include('inc.guest.header')


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{asset('mainassets/img/hero/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="/shop" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{asset('mainassets/img/hero/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="/shop" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    @include('inc.guest.products')
    <!-- Product Section End -->

    <!-- Instagram Section Begin -->
    @include('inc.guest.instagram')
    <!-- Instagram Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{asset('mainassets/img/banner/banner-1.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Clothing Collections 2030</h2>
                            <a href="/shop">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{asset('mainassets/img/banner/banner-2.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Accessories</h2>
                            <a href="/shop">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{asset('mainassets/img/banner/banner-3.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Shoes Spring 2030</h2>
                            <a href="/shop">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{asset('mainassets/img/product-sale.png')}}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="/shop" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('mainassets/img/blog/blog-1.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('mainassets/img/icon/calendar.png')}}" alt=""> 16 February 2020</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('mainassets/img/blog/blog-2.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('mainassets/img/icon/calendar.png')}}" alt=""> 21 February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('mainassets/img/blog/blog-3.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('mainassets/img/icon/calendar.png')}}" alt=""> 28 February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

        <!-- Footer Section Begin -->
        @include('inc.guest.footer')
        @include('inc.guest.searchmodel')

        <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('mainassets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('mainassets/js/mixitup.min.js')}}"></script>
    <script src="{{asset('mainassets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('mainassets/js/main.js')}}"></script>
</body>

</html>
