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

    <title>Product Details</title>
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
    .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
    }

    @media (min-width: 1025px) {
        .h-custom-2 {
            height: 100%;
        }
    }
</style>

<body>
    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}


    <main>
        @if (session('error'))
            <div class="alert bg-dark text-danger" style="border-radius: 0px;">
                {{ session('error') }}
            </div>
        @endif


        @if (session('success'))
            <div class="alert bg-dark text-light" style="border-radius: 0px;">
                {{ session('success') }}
                <a href="{{ route('orders') }}">View Cart</a>

            </div>
        @endif
        <form action="{{ route('add_to_cart', $allProducts->product_id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- content -->
            <section class="py-5 bg-dark">
                <div class="container">
                    <div class="row gx-5">
                        <aside class="col-lg-6">
                            <div class=" d-flex justify-content-center">
                                <a data-fslightbox="mygalley" class="" data-type="image"
                                    href="images/{{ $allProducts['product_image'] }}">
                                    <img style="" class="img-fluid"
                                        src="images/{{ $allProducts['product_image'] }}" />
                                </a>
                            </div>

                            <!-- thumbs-wrap.// -->
                            <!-- gallery-wrap .end// -->
                        </aside>
                        <main class="col-lg-6">
                            <div class="ps-lg-3">
                                @php $allProducts @endphp
                                <h4 class="title text-white">
                                    {{ $allProducts['product_title'] }}
                                    <br />

                                </h4>
                                <div class="d-flex flex-row my-3">
                                    <div class="text-warning mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-1">
                                            4.5
                                        </span>
                                    </div>
                                    <span class="text-white">{{ $allProducts['product_stock'] }}
                                    </span>
                                    <span class="text-success ms-2">In stock</span>
                                </div>

                                <div class="mb-3">
                                    <span class="h5">Rs {{ $allProducts['product_price'] }}</span>
                                    <span class="text-muted">/per Article</span>
                                </div>

                                <p>
                                    {{ $allProducts['product_description'] }}
                                </p>

                                <div class="row">
                                    <dt class="col-3">Category:</dt>
                                    <dd class="col-9">{{ $allProducts['product_category'] }}</dd>

                                    @if ($allProducts['product_title'] < $allProducts['product_category'])
                                        <dt class="col-3">Color</dt>
                                        <dd class="col-9"><select class="" name="color">
                                                <option value="black">Black</option>
                                                <option value="white">White</option>


                                            </select></dd>
                                    @else
                                    @endif



                                    <dt class="col-3">Brand</dt>
                                    <dd class="col-9">Taha Azhar Products</dd>
                                </div>

                                <hr />

                                <div class="row mb-4">
                                    @if ($allProducts['product_title'] < $allProducts['product_category'])
                                        <div class="col-md-4 col-6">
                                            <label class="mb-2">Size</label>
                                            <select class="form-select border border-secondary"
                                                style="height: 35px; border-radius: 0;" name="size" required>
                                                <option value="small">Small</option>
                                                <option value="medium">Medium</option>
                                                <option value="large">Large</option>
                                                <option value="xlarge">xLarge</option>
                                                {{-- <input type="hidden" name=""> --}}
                                            </select>
                                        </div>
                                    @else
                                    @endif
                                    <!-- col.// -->
                                    <div class="col-md-4 col-6 mb-3">
                                        <label class="mb-2 d-block">Quantity</label>
                                        <div class="input-group mb-3" style="width: 170px;">

                                            <input type="number" min="1" name="quantity" value="1" required
                                                max="{{ $allProducts['product_stock'] }}" class="text-center border"
                                                aria-describedby="button-addon1" />
                                            <button class="btn btn-white px-3" type="button" id="button-addon2"
                                                data-mdb-ripple-color="dark">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="product_name" value="{{$allProducts['product_title']}}">
                                <input type="hidden" name="actual_product_price" value="{{$allProducts['product_price']}}">

                                <button type="submit" class="btn btn-warning shadow-0" style="border-radius: 0">Add
                                    to
                                    Basket</button>

                            </div>
                        </main>
                    </div>
                </div>
            </section>
            <!-- content -->

        </form>



    </main>

    

    <!-- footer section -->
    @include('footer')
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
