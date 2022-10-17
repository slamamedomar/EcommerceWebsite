<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labbess | Details</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

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

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="/">Home</a>
                            <a href="/shop">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{asset('uploads')}}/{{$product->image}} ">
                                    </div>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{asset('uploads')}}/{{$product->image}}">
                                    </div>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{asset('uploads')}}/{{$product->image}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-1">
                        <div class="product__details__content">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="product__details__text">
                                            <h4>{{$product->name}}</h4>
                                            <h3>{{$product->price}}TND</h3>
                                            <p>{{$product->description}}</p>
                                            <div class="product__details__option">
                                                <div class="product__details__option__size">
                                                    <span>Size:</span>
                                                    <label for="xxl">xxl
                                                        <input type="radio" id="xxl">
                                                    </label>
                                                    <label class="active" for="xl">xl
                                                        <input type="radio" id="xl">
                                                    </label>
                                                    <label for="l">l
                                                        <input type="radio" id="l">
                                                    </label>
                                                    <label for="sm">s
                                                        <input type="radio" id="sm">
                                                    </label>
                                                </div>
                                                <div class="product__details__option__color">
                                                    <span>Color:</span>
                                                    <label class="c-1" for="sp-1">
                                                        <input type="radio" id="sp-1">
                                                    </label>
                                                    <label class="c-2" for="sp-2">
                                                        <input type="radio" id="sp-2">
                                                    </label>
                                                    <label class="c-3" for="sp-3">
                                                        <input type="radio" id="sp-3">
                                                    </label>
                                                    <label class="c-4" for="sp-4">
                                                        <input type="radio" id="sp-4">
                                                    </label>
                                                    <label class="c-9" for="sp-9">
                                                        <input type="radio" id="sp-9">
                                                    </label>
                                                </div>
                                            </div>
                                        <form action="/client/com/add" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$product->id}}" name="product_id" name="qte">

                                            <div class="product__details__cart__option">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" value="1" name="qte" >
                                                    </div>
                                                </div>
                                                <button type="submit" class="primary-btn" >add to cart</button>
                                            </div>
                                            <div class="product__details__btns__option">
                                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                                {{-- <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a> --}}
                                            </div>
                                        </form>

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
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($prodexcept->take(4) as $p)
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    @include('inc.guest.productItem')
                </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- Related Section End -->
    @include('inc.guest.footer')
    @include('inc.guest.searchmodel')


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

</html>
