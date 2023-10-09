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

    <title>Registraion</title>
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

    <!-- about section -->
    <section class="vh-100 p-sm-0" style="background-color: #292525;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" action="{{ route('senddata') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @if (session('success'))
                                <div class="alert bg-dark text-light" style="border-radius: 0px;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert bg-danger alert-danger text-light border-0"
                                    style="border-radius: 0px;">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <h3 class="fw-normal mb-3 pb-3 text-white" style="letter-spacing: 1px;">Registration Portal
                            </h3>

                            <div class="form-outline mb-4">
                                <input type="name" id="form2Example18" name="name" style="border-radius: 0"
                                    value="{{ old('name') }}" placeholder="Enter Name"
                                    class="form-control form-control-lg" />
                                <span> @error('name')
                                        <span class="text-danger">{{ 'Name field is required' }}</span>
                                    @enderror
                                </span>
                                {{-- <label class="form-label" for="form2Example18">Email address</label> --}}
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example28" name="email" style="border-radius: 0"
                                    value="{{ old('email') }}" placeholder="Enter Email"
                                    class="form-control form-control-lg"     />
                                {{-- <span> @error('email')
                                        <span class="text-danger">{{ 'Email field is required' }}</span>
                                    @enderror
                                </span> --}}
                                <span> @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                                {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" name="pswd" style="border-radius: 0"
                                    placeholder="Enter Password" class="form-control form-control-lg" />
                                <span> @error('pswd')
                                        <span class="text-danger">{{ 'Password field is required' }}</span>
                                    @enderror
                                </span>
                                {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form2Example28" name="address" style="border-radius: 0"
                                    value="{{ old('address') }}" placeholder="Enter Address"
                                    class="form-control form-control-lg" />
                                <span> @error('address')
                                        <span class="text-danger">{{ 'Address field is required' }}</span>
                                    @enderror
                                </span>
                                {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form2Example28" name="phone" style="border-radius: 0"
                                    value="{{ old('phone') }}" placeholder="Enter Phone"
                                    class="form-control form-control-lg" />
                                <span> @error('phone')
                                        <span class="text-danger">{{ 'Number is already registered' }}</span>
                                    @enderror
                                </span>
                                {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                            </div>

                            {{-- <div class="form-outline mb-4">
                                <input type="date" id="form2Example28" name="dob" style="border-radius: 0"
                                    value="{{ old('dob') }}" placeholder="" class="form-control form-control-lg" />
                                <span> @error('dob')
                                        <span class="text-danger">{{ 'Date of Birth field is required' }}</span>
                                    @enderror
                                </span>
                                <label class="form-label" for="form2Example28">Password</label>
                            </div> --}}

                            <div class="pt-1 mb-4">
                                <button class="btn btn-warning btn-lg btn-block" style="border-radius: 0"
                                    type="submit">Sign up</button>
                            </div>

                            {{-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> --}}


                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="images/fba4bca523.jpg" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>


    <!-- end about section -->

    <!-- gallery section -->

    <!-- end gallery section -->

    <!-- blog section -->



    <!-- end blog section -->

    <!-- client section -->



    <!-- end client section -->

    <!-- info section -->



    <!-- end info section -->

    <!-- footer section -->
    @include('footer')
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
