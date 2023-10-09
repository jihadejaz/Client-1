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

    <title>Cart</title>
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
    <link href=" css/style1.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>

<body>
    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}

    <ul class="nav justify-content-center  ">
        <li class="nav-item">
            <a class="nav-link active disabled" href="#" aria-current="page">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('myorders') }}">Orders</a>
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
    <section class="h-100 h-custom bg-dark">




        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4" style="border-radius: 0">
                        <div class="card-header py-3">
                            <h5 class="mb-0">My Cart</h5>
                        </div>
                        @php
                            $totalAmount = 0; // Initialize total amount
                        @endphp
                        @if (count($myCart) > 0)
                            @foreach ($myCart as $item)
                                <div class="card-body">
                                    <!-- Single item -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img src="images/{{ $item['product_image'] }}" class="w-100"
                                                    alt="Blue Jeans Jacket" />
                                                <a href="#!">
                                                    <div class="mask"
                                                        style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>
                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $item['product_title'] }}</strong></p>
                                            @if ($item['size'] == null)
                                            @else
                                                <p>Color: {{ $item['color'] }}</p>
                                            @endif

                                            {{-- @if ($item['product_title'] < $item['product_category']) --}}
                                            @if ($item['size'] == null)
                                            @else
                                                <p>Size: {{ $item['size'] }}</p>
                                            @endif
                                            {{-- @endif --}}
                                            <a href="{{ route('removecart', ['id' => $item['order_id']]) }}"
                                                class="btn btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                                                title="Remove item">
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                            {{-- <p>Size: {{$item['size']}}</p> --}}

                                            <!-- Data -->
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4" style="max-width: 300px">


                                                <div class="form-outline">
                                                    <label class="form-label" for="form1">Quantity:
                                                        {{ $item['quantity'] }}</label>

                                                    <p class="text-start text-md-center">
                                                        <strong>Rs {{ $item['product_price'] }}</strong>
                                                    </p>
                                                    <!-- Price -->
                                                </div>


                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->

                                        </div>
                                    </div>
                                    <!-- Single item -->

                                </div>
                                @php
                                    $totalAmount += $item->product_price * $item->quantity; // Update total amount
                                @endphp
                            @endforeach


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4" style="border-radius: 0">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Sub Total
                                    <span>Rs {{ $totalAmount }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Rs 100</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total Amount</strong>

                                    </div>
                                    <span><strong>Rs {{ $totalAmount + 100 }}</strong></span>
                                </li>
                            </ul>

                            <div class="container p-0">
                                <form action="{{ route('orderPlaced') }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="disable" class="form-control" style="border-radius: 0"
                                            name="" placeholder="" value="{{ session('uemail') }}" required>

                                        <input type="text" class="form-control mt-2" style="border-radius: 0"
                                            name="address" placeholder="Enter Address" required>

                                        <input type="hidden" class="form-control mt-2" style="border-radius: 0"
                                            name="product_title" value="{{ $item['product_title'] }}"
                                            placeholder="Enter Address" required>

                                        <input type="hidden" min="0" class="form-control"
                                            style="border-radius: 0" name="bill" placeholder=""
                                            value="{{ $totalAmount + 100 }}">

                                        <input type="hidden" min="0" class="form-control"
                                            style="border-radius: 0" name="size" placeholder=""
                                            value="{{ $item['size'] }}">

                                        <input type="hidden" min="0" class="form-control"
                                            style="border-radius: 0" name="color" placeholder=""
                                            value="{{ $item['color'] }}">

                                        <input type="text" class="form-control mt-2" style="border-radius: 0"
                                            name="phone" placeholder="Enter Phone" required>


                                    </div>
                                    <button type="submit" style="border-radius: 0"
                                        class="btn btn-warning btn-lg btn-block">
                                        Place Order
                                    </button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            @else
                <div class="container p-5">
                    <h5>Cart is empty</h5>
                    <hr>
                    <a href="{{ route('index') }}" class="btn btn-warning btn-lg" style="border-radius: 0"><i
                            class="fa fa-arrow-left"></i> Shop Now</a>
                </div>
                @endif
            </div>
        </div>

    </section>


    <!-- Start why section -->

    <section class="why_section layout_padding bg-dark">
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


    <!-- footer section -->
    @include('footer')
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
