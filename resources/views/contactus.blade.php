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


    h1 {
        margin-bottom: 40px;
    }

    label {
        color: #333;
    }

    .btn-send {
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        width: 80%;
        margin-left: 3px;
    }

    .help-block.with-errors {
        color: #ff5050;
        margin-top: 5px;

    }

    .card {
        margin-left: 10px;
        margin-right: 10px;
    }
</style>

<body>
    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}


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


    <div class="container">
        <div class=" text-center mt-5 ">



        </div>


        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">

                        <div class="container">
                            <form id="contact-form" action="{{ route('contactmsg') }}" method="POST"
                                enctype="multipart/form-data" role="form">
                                @csrf



                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- <label for="form_name">Firstname *</label> --}}
                                                <input id="form_name" style='border-radius: 0;' type="text" value='{{old('name')}}' name="name" class="form-control"
                                                    placeholder="Please enter your firstname">
                                                <span> @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- <label for="form_lastname">Phone *</label> --}}
                                                <input id="form_lastname" style='border-radius: 0;' type="text" value='{{old('phone')}}' name="phone"
                                                    class="form-control" placeholder="Please enter your phone">
                                            </div>
                                            <span> @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- <label for="form_email">Email *</label> --}}
                                                <input id="form_email" style='border-radius: 0;' type="email" value='{{old('email')}}' name="email"
                                                    class="form-control" placeholder="Please enter your email">

                                            </div>
                                            <span> @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- <label for="form_need">Please specify your need *</label> --}}
                                                <select id="form_need" style='border-radius: 0;' name="query" value='{{old('query')}}' class="form-control">
                                                    <option value="{{old('query')}}" selected disabled>--Select Complaint--
                                                    </option>
                                                    <option value="request invoice">Request Invoice for order</option>
                                                    <option value="request order status">Request order status</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <span> @error('query')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="form_message">Message *</label> --}}
                                                <textarea id="form_message" style='border-radius: 0;' name="message" value='{{old('message')}}' class="form-control" placeholder="Write your message here." rows="4"></textarea>
                                            </div>
                                            <span> @error('message')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>

                                        </div>


                                        <div class="col-md-12">

                                            <input type="submit"
                                                class="btn btn-warning btn-send btn-block
                            "
                                                value="Send Message" style="border-radius: 0;">

                                        </div>

                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
    </div>



    <!-- Start why section -->

    <section class="why_section layout_padding bg-dark mt-5">
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
