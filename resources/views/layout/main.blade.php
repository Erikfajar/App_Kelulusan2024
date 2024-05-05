<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/admin') }}/assets/" data-template="vertical-menu-template-free">

<head>
    <!-- Character Set Meta Tag -->
    <meta charset="utf-8" />
    <!-- Viewport Meta Tag for Responsive Design -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Dynamic Title Tag -->
    <title>@yield('title')</title>

    <!-- Meta Description -->
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin') }}/assets/img/favicon/favicon.ico" />

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Google Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/datatable/datatables.min.css') }}">

    <!-- Helpers Script -->
    <script src="{{ asset('assets/admin') }}/assets/vendor/js/helpers.js"></script>

    <!-- Template Configurations Script -->
    <script src="{{ asset('assets/admin') }}/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            @include('layout.sidebar')
            <!-- /Sidebar -->

            <!-- Layout page container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('layout.navbar')
                <!-- /Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Main content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- /Main content -->

                    <!-- Footer -->
                    @include('layout.footer')
                    <!-- /Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- /Content wrapper -->
            </div>
            <!-- /Layout page container -->
        </div>

        <!-- Layout overlay for menu toggle -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- /Layout wrapper -->

    <!-- Core JS -->
    <script src="{{ asset('assets/admin') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/admin') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/admin') }}/assets/js/main.js"></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('assets/admin') }}/assets/js/dashboards-analytics.js"></script>

    <!-- DataTables Script -->
    <script src="{{ asset('assets/admin/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/table.js') }}"></script>

    <!-- DataTable Initialization Script -->
    <script>
        $(function() {
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

    <!-- SweetAlert2 for Alerts -->
    @include('sweetalert::alert')

</body>

</html>
