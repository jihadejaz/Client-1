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
                    <h2 class="text-dark font-weight-bold mb-2">Orders</h2>
                    @if (session('success'))
                        <div class="alert bg-dark text-white" style="border-radius: 0px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert bg-danger alert-danger text-white border-0" style="border-radius: 0px;">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>


                {{-- MAIN SECTION START  --}}
                <div class="table-responsive">
                    <table class="table table-light table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Number @php $count=1; @endphp</th>

                                <th scope="col">Order ID</th>
                                <th scope="col">Delivery Status</th>

                                <th scope="col">Ordered by</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Color</th>
                                <th scope="col">Size</th>
                                <th scope="col">Product Image</th>
                                {{-- <th scope="col">Product Id</th> --}}

                                <th scope="col">Quantity Ordered</th>

                                <th scope="col">Product Price</th>
                                <th scope="col">Order Number</th>

                                <th scope="col" class="bg-warning text-black">Bill</th>
                                <th scope="col" class="">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Orders as $item)
                                <tr class="">
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ $item->delivery_status }}</td>


                                    <td>{{ $item->ordered_by }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->ordered_color ?: 'No Color' }}</td>
                                    <td>{{ $item->ordered_size ?: 'No Size' }}</td>
                                    <td><img src="images/{{ $item->image }}" class="img-fluid" alt=""></td>
                                    {{-- <td>{{ $item->product_id }}</td> --}}
                                    <td>{{ $item->quantity_ordered }}</td>

                                    <td>{{ $item->actual_product_price }}</td>
                                    <td style="">{{ $item->order_number }}</td>

                                    <td class="bg-warning text-black">{{ $item->bill }}</td>
                                    @if ($item->delivery_status == 'Shipped')
                                        <td><span class="text-muted">Shipped</span></td>
                                    @else
                                        <td class=""><a
                                                href="{{ route('shippedOrder', ['order' => $item->order_number]) }}"
                                                class="btn btn-sm btn-warning " style="color: black">Mark as Shipped</a>
                                        </td>
                                    @endif


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{-- MAIN SECTION END  --}}


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="footer-inner-wraper">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright 
                            </span>
                        
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
