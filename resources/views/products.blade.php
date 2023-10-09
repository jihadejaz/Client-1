<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">


    <title>Shop</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href=" css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<style>

</style>

<body>
    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}



    <section id="product1">
        <h2 class="text-white">New Arrival</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            @foreach ($newArrival as $item)
                <div class="pro bg-dark">
                    <a href="{{ url('productdetails', $item['product_title']) }}">
                        <img src="images/{{ $item['product_image'] }}" alt="">
                    </a>
                    <div class="des">
                        <span>{{ $item->product_category }}</span>
                        <h5 class="text-white">{{ $item['product_title'] }}</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4 class="text-white">Rs: {{ $item->product_price }}</h4>
                    </div>
                    {{-- <a href="#"><i class="fa fa-shopping-bag cart"></i></a> --}}
                </div>
            @endforeach


        </div>
    </section>


    <div class="container-fluid bg-dark">
        <section id="product1">
            <h2 class="text-white">Latest Products</h2>
            <p>Summer Collection New Modern Design</p>
            <div class="pro-container">
                @foreach ($allProducts as $item)
                    <div class="pro bg-dark">
                        <a href="{{ url('productdetails', $item['product_title']) }}">

                            <img src="images/{{ $item['product_image'] }}" alt="">
                        </a>
                        <div class="des">
                            <span>{{ $item->product_category }}</span>
                            <h5 class="text-white">{{ $item['product_title'] }}</h5>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4 class="text-white">Rs: {{ $item->product_price }}</h4>
                        </div>
                        {{-- <a href="#"><i class="fa fa-shopping-bag cart"></i></a> --}}
                    </div>
                @endforeach


            </div>
        </section>

    </div>

    <!-- footer section -->
    @include('footer')
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
