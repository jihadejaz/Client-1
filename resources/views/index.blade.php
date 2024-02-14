<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home</title>
    <link rel="shortcut icon" href="images/WhatsApp Image 2023-07-26 at 16.19.18.jpg" type="image/x-icon">
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href=" css/style.css" rel="stylesheet" />
    <link href=" css/style1.css" rel="stylesheet" />


    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<style>
    .custom-banner-img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .d-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .align-center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .flex-centerY-centerX {
        justify-content: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    /* body {
        background-color: #f7f7f7;
    } */

    .page-wrapper {
        height: 100%;
        display: table;
    }

    .page-wrapper .page-inner {
        display: table-cell;
        vertical-align: middle;
    }

    .el-wrapper {
        width: 360px;
        padding: 15px;
        margin: 15px auto;
        /* background-color: #542222; */
    }

    @media (max-width: 991px) {
        .el-wrapper {
            width: 345px;
        }
    }

    @media (max-width: 767px) {
        .el-wrapper {
            width: 290px;
            margin: 30px auto;
        }
    }

    .el-wrapper:hover .h-bg {
        left: 0px;
    }

    .el-wrapper:hover .price {
        left: 20px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #818181;
    }

    .el-wrapper:hover .add-to-cart {
        left: 50%;
    }

    .el-wrapper:hover .img {
        webkit-filter: blur(7px);
        -o-filter: blur(7px);
        -ms-filter: blur(7px);
        filter: blur(7px);
        filter: progid:DXImageTransform.Microsoft.Blur(pixelradius='7', shadowopacity='0.0');
        opacity: 0.4;
    }

    .el-wrapper:hover .info-inner {
        bottom: 155px;
    }

    .el-wrapper:hover .a-size {
        -webkit-transition-delay: 300ms;
        -o-transition-delay: 300ms;
        transition-delay: 300ms;
        bottom: 50px;
        opacity: 1;
    }

    .el-wrapper .box-down {
        width: 100%;
        height: 60px;
        position: relative;
        overflow: hidden;
    }

    .el-wrapper .box-up {
        width: 100%;
        height: 300px;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .el-wrapper .img {
        padding: 20px 0;
        -webkit-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        -moz-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        -o-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
    }

    .h-bg {
        -webkit-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        -moz-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        -o-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        width: 660px;
        height: 100%;
        background-color: #000000;
        position: absolute;
        left: -659px;
    }

    .h-bg .h-bg-inner {
        width: 50%;
        height: 100%;
        background-color: #8ef633;
    }

    .info-inner {
        -webkit-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
        -moz-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
        -o-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
        transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        position: absolute;
        width: 100%;
        bottom: 25px;
    }

    .info-inner .p-name,
    .info-inner .p-company {
        display: block;
    }

    .info-inner .p-name {
        font-family: 'PT Sans', sans-serif;
        font-size: 18px;
        color: #e58989;
    }

    .info-inner .p-company {
        font-family: 'Lato', sans-serif;
        font-size: 12px;
        text-transform: uppercase;
        color: #8c8c8c;
    }

    .a-size {
        -webkit-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
        -moz-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
        -o-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
        transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        position: absolute;
        width: 100%;
        bottom: -20px;
        font-family: 'PT Sans', sans-serif;
        color: #828282;
        opacity: 0;
    }

    .a-size .size {
        color: #252525;
    }

    .cart {
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        font-family: 'Lato', sans-serif;
        font-weight: 700;
    }

    .cart .price {
        -webkit-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        -moz-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        -o-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-delay: 100ms;
        -o-transition-delay: 100ms;
        transition-delay: 100ms;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 16px;
        color: #252525;
    }

    .cart .add-to-cart {
        -webkit-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        -moz-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        -o-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
        /* ease-out */
        -webkit-transition-delay: 100ms;
        -o-transition-delay: 100ms;
        transition-delay: 100ms;
        display: block;
        position: absolute;
        top: 50%;
        left: 150%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .cart .add-to-cart .txt {
        font-size: 12px;
        color: #fff;
        letter-spacing: 0.045em;
        text-transform: uppercase;
        white-space: nowrap;
    }
</style>

<body>


    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}

    @if (session('error'))
        <div class="alert bg-dark text-danger" style="border-radius: 0px;">
            {{ session('error') }}
        </div>
    @endif


    @if (session('success'))
        <div class="alert bg-dark text-light" style="border-radius: 0px;">
            {{ session('success') }}
        </div>
    @endif
    <div id="demo" class="carousel slide" data-ride="carousel">

        {{-- <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul> --}}

        <!-- The slideshow -->
        <div class="carousel-inner text-center" style="height: 40vh">
            <div class="carousel-item active">
                <img class="img-fluid mt-5" src="images/WhatsApp Image 2023-08-07 at 12.59.05.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img class="img-fluid mt-5" src="images/WhatsApp Image 2023-08-07 at 12.59.06.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img class="img-fluid mt-5" src="images/WhatsApp Image 2023-08-07 at 12.59.06.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>


    <!-- products section -->
    {{-- PRODUCTS SECTION START  --}}

    <section class="bg-dark">
        <div class="container py-5">
            <h2 class="mb-5">
                Latest Products
            </h2>
            <div class="row">
                <div class="container-fluid text-center">

                </div>
                {{-- <form action="{{ route('add_to_cart') }}" method="post" enctype="multipart/form-data">
                    @csrf --}}

                @foreach ($allProducts as $item)
                    <div class="col-md-12  col-lg-4 mb-4 mb-lg-0 d-flex">
                        <div class="row">
                            <div class="card bg-dark" style="background-color: #292525;">
                                <div class="d-flex justify-content-between">
                                    {{-- <p class="lead mb-0">Today's Combo Offer</p> --}}
                                    <div class="bg-transparent rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                        style="">
                                        {{-- <p class="text-white mb-0 small">x4</p> --}}
                                    </div>
                                </div>
                                <div class="bg-image hover-zoom">
                                    <a href="{{ url('productdetails', $item['product_title']) }}"><img
                                            src="images/{{ $item['product_image'] }}" class="w-60 img-fluid" /></a>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small text-muted">{{ $item['product_category'] }}</p>
                                        <p class="small text-danger"><s>Rs{{ $item['product_discount'] }}</s>
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0 text-white font-weight-lighter">
                                            {{ $item['product_title'] }}
                                        </h5>
                                        <h5 class="text-white mb-0 font-weight-lighter">Rs
                                            {{ $item['product_price'] }}
                                        </h5>
                                    </div>
                                    <input type="hidden" min="0" name="id"
                                        value="{{ $item['product_id'] }}">
                                    <div class="ms-auto text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0" style="color: black">Stock: <span
                                                class="fw-bold text-white">{{ $item['product_stock'] }}</span></p>

                                    </div>

                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- </form> --}}
            </div>
        </div>
    </section>



    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    New Arrival
                </h2>
            </div>
            <div class="row">
                @foreach ($newArrival as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="box bg-white">
                            <a href="{{ url('productdetails', $item['product_title']) }}">
                                <div class="img-box">
                                    <img src="images/{{ $item['product_image'] }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $item['product_title'] }}
                                    </h6>
                                    <h6>
                                        <span>
                                            Rs {{ $item['product_price'] }}
                                        </span>
                                    </h6>
                                </div>
                                <div class="new bg-warning">
                                    <span>
                                        New
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center mt-4">
                <a href="" class="btn btn-warning btn-lg" style="border-radius: 0">
                    View All Products
                </a>
            </div>
        </div>
    </section>


    {{-- BAG SECTION END  --}}

    <!-- saving section -->

    <section class="saving_section">
        <div class="box bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="images/banner1-removebg-preview.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Best Savings on <br>
                                    new arrivals
                                </h2>
                            </div>
                            <p>
                                Buy now before it's late, Check out my new wardrobe for Men's Clothing, with Accessories to explore.
                                
                            </p>
                            <div class="btn-box">
                                <a href="{{ route('productspage') }}" class="btn btn-warning" style="border-radius: 0">
                                    Buy Now
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end saving section -->

    <!-- Start why section -->

    <section class="why_section layout_padding mt-5 bg-dark">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Why Shop With Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                        </div>
                        <div class="detail-box">
                            <h5 class="text-dark">
                                Fast Delivery
                            </h5>
                            <p class="text-dark">
                                Compatible and safe Delivery
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">

                        </div>
                        <div class="detail-box">
                            <h5 class="text-dark">
                                Free Shiping
                            </h5>
                            <p class="text-dark">
                                variations of passages of Lorem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">

                        </div>
                        <div class="detail-box">
                            <h5 class="text-dark">
                                Best Quality
                            </h5>
                            <p class="text-dark">
                                Premium quality
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->
    <!-- end products section -->







    <!-- footer section -->
    @include('footer')
    <!-- footer section -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const successAlert = document.getElementById("success-alert");
            if (successAlert) {
                setTimeout(function() {
                    successAlert.classList.add("fadeOut");
                    setTimeout(function() {
                        successAlert.remove();
                    }, 500);
                }, 4000); // 5000 milliseconds (5 seconds)
            }
        });
    </script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
