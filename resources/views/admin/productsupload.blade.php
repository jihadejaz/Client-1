<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        {{-- NAVBAR START  --}}
        @include('admin.adminnavbar')
        {{-- NAVBAR END  --}}
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="d-xl-flex justify-content-between align-items-start">
                    <h2 class="text-dark font-weight-bold mb-2">Welcome Admin</h2>

                </div>

                {{-- tabs here  --}}

                <div class="container-fluid">
                    <hr>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link border-0" data-bs-toggle="tab" href="#home">T-Shirt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border-0" data-bs-toggle="tab" href="#menu1">Bags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border-0" data-bs-toggle="tab" href="#menu2">Perfumes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border-0" data-bs-toggle="tab" href="#menu3">Glasses</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    {{-- TSHIRT ROUTE START --}}

                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <h3>Tshirt</h3>
                            <form style="width: 23rem;" action="{{ route('tshirt_registration') }}" method="POST"
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
                                <hr>

                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example18" name="tname" placeholder="Enter Name"
                                        class="form-control form-control-lg" required />
                                    <span> @error('tname')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example18">Email address</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="tprice" placeholder="Enter Price"
                                        class="form-control form-control-lg" required />
                                    <span> @error('tprice')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form2Example28" name="tdescription"
                                        placeholder="Enter Description" class="form-control form-control-lg" required />
                                    <span> @error('tdescription')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="tdiscount"
                                        placeholder="Enter Discount" class="form-control form-control-lg" />
                                    <span> @error('tdiscount')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="category"
                                        placeholder="Enter Category" class="form-control form-control-lg" required />
                                    <span> @error('categort')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="type" placeholder="Enter Type"
                                        class="form-control form-control-lg" required />
                                    <span> @error('type')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <label for="" class="text-black">Enter Stock</label>
                                    <input type="number" min="1" value="1" id="form2Example28"
                                        name="stock" class="form-control form-control-lg" required />
                                    <span> @error('stock')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="file" id="form2Example28" name="timage" placeholder=""
                                        class="form-control form-control-lg" required />
                                    <span> @error('timage')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>

                                <hr>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="size[]" value="small"
                                        id="htmlCheckbox">
                                    <label class="form-check-label" for="htmlCheckbox">Small</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="size[]" value="medium"
                                        id="cssCheckbox">
                                    <label class="form-check-label" for="cssCheckbox">Medium</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="size[]" value="large"
                                        id="jsCheckbox">
                                    <label class="form-check-label" for="jsCheckbox">Large</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="size[]" value="xlarge"
                                        id="pythonCheckbox">
                                    <label class="form-check-label" for="pythonCheckbox">X-large</label>
                                </div>

                                <span> @error('skills')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                                <hr>
                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>
                        {{-- TSHIRT ROUTE EBD --}}

                        {{-- BAGS ROUTE START --}}

                        <div id="menu1" class="container tab-pane fade"><br>
                            <h3>Bags</h3>
                            <form style="width: 23rem;" action="{{ route('bag_registration') }}" method="POST"
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
                                <hr>

                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example18" name="bname"
                                        placeholder="Enter Name" class="form-control form-control-lg" required />
                                    <span> @error('email')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example18">Email address</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="bprice"
                                        placeholder="Enter Price" class="form-control form-control-lg" required />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form2Example28" name="bdescription"
                                        placeholder="Enter Description" class="form-control form-control-lg"
                                        required />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="bdiscount"
                                        placeholder="Enter Discount" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="type"
                                        placeholder="Enter Type" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="category"
                                        placeholder="Enter Category" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <label for="" class="text-black">Enter Stock</label>
                                    <input type="number" min="1" value="1" id="form2Example28"
                                        name="stock" class="form-control form-control-lg" required />
                                    <span> @error('stock')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="file" id="form2Example28" name="bimage" placeholder=""
                                        class="form-control form-control-lg" required />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                </div>

                                <hr>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>

                        {{-- BAG ROUTE END --}}

                        <div id="menu2" class="container tab-pane fade"><br>
                            <h3>Perfumes</h3>
                            <form style="width: 23rem;" action="{{ route('perfume_registration') }}" method="POST"
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
                                <hr>

                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example18" name="pname"
                                        placeholder="Enter Name" class="form-control form-control-lg" required />
                                    <span> @error('pname')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example18">Email address</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="pprice"
                                        placeholder="Enter Price" class="form-control form-control-lg" required />
                                    <span> @error('pprice')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form2Example28" name="pdescription"
                                        placeholder="Enter Description" class="form-control form-control-lg"
                                        required />
                                    <span> @error('pdescription')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="pdiscount"
                                        placeholder="Enter Discount" class="form-control form-control-lg" />
                                    <span> @error('pdiscount')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="type"
                                        placeholder="Enter Type" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="category"
                                        placeholder="Enter Category" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="file" id="form2Example28" name="pimage" placeholder=""
                                        class="form-control form-control-lg" required />
                                    <span> @error('pimage')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>

                                <hr>
                                <div class="form-outline mb-4">
                                    <label for="" class="text-black">Enter Stock</label>
                                    <input type="number" min="1" value="1" id="form2Example28"
                                        name="stock" class="form-control form-control-lg" required />
                                    <span> @error('stock')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>


                                <span> @error('skills')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                                <hr>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Upload</button>
                                </div>
                            </form>

                        </div>
                        <div id="menu3" class="container tab-pane fade"><br>
                            <h3>Glasses</h3>
                            <form style="width: 23rem;" action="{{ route('glasses_registration') }}" method="POST"
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
                                <hr>

                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example18" name="gname"
                                        placeholder="Enter Name" class="form-control form-control-lg" required />
                                    <span> @error('gname')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example18">Email address</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="gprice"
                                        placeholder="Enter Price" class="form-control form-control-lg" required />
                                    <span> @error('gprice')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form2Example28" name="gdescription"
                                        placeholder="Enter Description" class="form-control form-control-lg"
                                        required />
                                    <span> @error('pdescription')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example28" name="gdiscount"
                                        placeholder="Enter Discount" class="form-control form-control-lg" />
                                    <span> @error('gdiscount')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="type"
                                        placeholder="Enter Type" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="name" id="form2Example28" name="category"
                                        placeholder="Enter Category" class="form-control form-control-lg" />
                                    <span> @error('pswd')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <input type="file" id="form2Example28" name="gimage" placeholder=""
                                        class="form-control form-control-lg" required />
                                    <span> @error('gimage')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>

                                <hr>
                                <div class="form-outline mb-4">
                                    <label for="" class="text-black">Enter Stock</label>
                                    <input type="number" min="1" value="1" id="form2Example28"
                                        name="stock" class="form-control form-control-lg" required />
                                    <span> @error('stock')
                                            <span class="text-danger">{{ 'field is required' }}</span>
                                        @enderror
                                    </span>
                                    {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                </div>


                                <span> @error('skills')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                                <hr>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="footer-inner-wraper">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                                templates</a> from Bootstrapdash.com</span>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
