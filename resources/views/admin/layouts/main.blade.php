<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | {{ $title }}</title>

    {{-- css bootstaraps --}}
    <link href="assets/bootstraps-5.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    {{-- end css bootstraps --}}

    {{-- css fontawesome --}}
    <link href="assets/fontawesome-5.15.4/css/fontawesome.css" rel="stylesheet" />
    <link href="assets/fontawesome-5.15.4/css/brands.css" rel="stylesheet" />
    <link href="assets/fontawesome-5.15.4/css/solid.css" rel="stylesheet" />
    {{-- end css fontawesome --}}

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin.partials.sidebar')
        @include('admin.partials.topbar')

        @yield('container')

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    {{-- js bootstaraps --}}
    <script src="assets/bootstraps-5.1/js/bootstrap.bundle.min.js"></script>
    {{-- end js bootstraps --}}

    {{-- js fontawesome --}}
    <script src="assets/fontawesome-5.15.4/js/fontawesome.min.js"></script>
    {{-- end js fontawesome --}}

</body>

</html>
