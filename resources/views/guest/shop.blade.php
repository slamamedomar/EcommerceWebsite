
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labbes | Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

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

    <!-- Header Section Begin -->
    @include('inc.guest.header')
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    @include('inc.guest.sidebar')
    <!-- Shop Section End -->

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
