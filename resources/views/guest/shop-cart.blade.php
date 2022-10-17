
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop-cart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('mainassets/css/bootstrap.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/font-awesome.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/elegant-icons.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/magnific-popup.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/nice-select.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/owl.carousel.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/slicknav.min.css')}} " type="text/css">
    <link rel="stylesheet" href="{{asset('mainassets/css/style.css')}} " type="text/css">
</head>

<body>

    @include('inc.guest.header')
     <!-- Breadcrumb Section Begin -->
     <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="/shop">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commande->lignecommmandes as $lc)

                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                           <img src="{{asset('uploads')}}/{{$lc->product->image}}" width="100" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{$lc->product->name}}</h6>
                                            <h5>{{$lc->product->price}} DT</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="{{$lc->qte}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{$lc->product->price * $lc->qte}} TND</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 169.50</span></li>
                            <li>Total <span>$ 169.50</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    @include('inc.guest.footer')



    <!-- Js Plugins -->
    <script src="{{asset('mainassets/js/jquery-3.3.1.min.js')}} "></script>
    <script src="{{asset('mainassets/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('mainassets/js/jquery.nice-select.min.js')}} "></script>
    <script src="{{asset('mainassets/js/jquery.nicescroll.min.js')}} "></script>
    <script src="{{asset('mainassets/js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{asset('mainassets/js/jquery.countdown.min.js')}} "></script>
    <script src="{{asset('mainassets/js/jquery.slicknav.js')}} "></script>
    <script src="{{asset('mainassets/js/mixitup.min.js')}} "></script>
    <script src="{{asset('mainassets/js/owl.carousel.min.js')}} "></script>
    <script src="{{asset('mainassets/js/main.js')}} "></script>
</body>

</html>
