<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <base href="/public">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Customer Orders</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    .horizontal-timeline .items {
        border-top: 2px solid #ddd;
    }

    .horizontal-timeline .items .items-list {
        position: relative;
        margin-right: 0;
    }

    .horizontal-timeline .items .items-list:before {
        content: "";
        position: absolute;
        height: 8px;
        width: 8px;
        border-radius: 50%;
        background-color: #ddd;
        top: 0;
        margin-top: -5px;
    }

    .horizontal-timeline .items .items-list {
        padding-top: 15px;
    }
</style>

<body>
    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}

    <ul class="nav justify-content-center  ">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('orders') }}" aria-current="page">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="{{ route('myorders') }}">Orders</a>
        </li>
        
    </ul>
    @if (session('success'))
        <div class="alert bg-dark text-light" style="border-radius: 0px;">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert bg-dark text-light" style="border-radius: 0px;">
            {{ session('error') }}
        </div>
    @endif


    @php $bill = []; @endphp

    <section class="bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #000000 !important;">
                        <div class="card-body p-5">
                            @php $currentOrderNumber = null; @endphp

                            @foreach ($myOrders as $orderDetails)
                                @if ($currentOrderNumber !== $orderDetails['order_number'])
                                    @if ($currentOrderNumber !== null)
                        </div>
                        @endif
                        <hr>

                        {{-- TO ACCESS VARIABLE OUTSIDE IT'S SCOPE  --}}

                        {{-- {{ $bill[] = $orderDetails }} --}}

                        {{--  --}}
                        <div class="card p-sm-0" style="border-color: transparent;">
                            <div class="card-body p-0">

                                <center>
                                    <p class="lead mb-5" style="color: #000000;">-----Purchase Receipt------</p>
                                </center>

                                <div class="row">
                                    <div class="col mb-3">
                                        <p class="small text-muted mb-1">Order Date</p>
                                        <p>{{ $orderDetails['created_at'] }}</p>
                                    </div>
                                    <div class="col mb-3">
                                        <p class="small mb-1">Order No.</p>
                                        <p style="font-weight: 500">{{ $orderDetails['order_number'] }}</p>
                                    </div>
                                    <div class="col mb-3">
                                        @if ($orderDetails['delivery_status'] == 'Shipped')
                                        @else
                                            <a href="{{ route('cancelOrder', ['name' => $orderDetails['order_number']]) }}"
                                                onclick="return confirm('Are your sure to cancel complete order!')"
                                                class="btn btn-warning btn-sm" style="border-radius: 0">Cancel Order</a>
                                        @endif



                                    </div>
                                </div>

                                @php $currentOrderNumber = $orderDetails['order_number']; @endphp
                                @endif

                                <div class="mx-n5 px-5 py-4 p-0" style="background-color: #f2f2f2;">
                                    <!-- Receipt details for the current order number -->
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9 d-flex">
                                            <div class="col-md-4 col-lg-3">
                                                <img src="images/{{ $orderDetails['image'] }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <p>{{ $orderDetails['product_name'] }}</p>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <p>Rs {{ $orderDetails['actual_product_price'] }} x
                                                {{ $orderDetails['quantity_ordered'] }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p class="mb-0">Delivery Status</p>
                                            @if ($orderDetails['ordered_size'] == null)
                                            @else
                                                <p class="mb-0">Size: {{ $orderDetails['ordered_size'] }}</p>
                                            @endif
                                            @if ($orderDetails['ordered_color'] == null)
                                            @else
                                                <p class="mb-0">Color: {{ $orderDetails['ordered_color'] }}</p>
                                            @endif

                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            @if ($orderDetails['delivery_status'] == 'shipped')
                                                <p class="mb-0">Shipped</p>
                                            @else
                                                <p class="mb-0">{{ $orderDetails['delivery_status'] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                            <p class="lead fw-bold mb-0" style="color: #f37a27;">
                                                Rs
                                                {{ $orderDetails['actual_product_price'] * $orderDetails['quantity_ordered'] + 100 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <hr>

                                @if ($currentOrderNumber !== null)
                            </div> <!-- Close the last receipt section -->
                        @else
                            <h1>NO Orders</h1>
                            @endif
                            <p class="mt-4 pt-2 mb-0">Need assistance? <a href="{{ route('contactpage') }}"
                                    style="color: #f37a27;">Please
                                    contact us</a></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>








    <!-- footer section -->
    @include('footer')
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
