<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'College Management')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- Custom CSS -->
     <!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/css/teachers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


</head>

<body>

<div class="dashboard-wrapper">

    <!-- ==========================
            Sidebar
    ========================== -->

  @include('backend.partials.sidebar')

  <div class="dashboard-overlay"></div>



    <!-- ==========================
            Main Content
    ========================== -->

    <main class="dashboard-main">

        <!-- ==========================
                Top Header
        ========================== -->

       @include('backend.partials.topbar')


        <!-- ==========================
                Page Content
        ========================== -->

        <div class="dashboard-content">

            @yield('content')


                    </div>

        <!-- ==========================
                Footer
        ========================== -->

        <footer class="dashboard-footer">

            <div class="dashboard-footer-left">

                <p>

                    © {{ date('Y') }} College Management System.
                    All Rights Reserved.

                </p>

            </div>

            <div class="dashboard-footer-right">

                <span>

                    Developed with
                    <i class="fa-solid fa-heart"></i>
                    Laravel

                </span>

            </div>

        </footer>

    </main>

</div>





<div class="offcanvas offcanvas-start d-lg-none"
     tabindex="-1"
     id="mobileSidebar">

    <div class="offcanvas-header">

        <h5>Canyon College</h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas">
        </button>

    </div>

    <div class="offcanvas-body">

        @include('backend.partials.sidebar')

    </div>

</div>









<!-- ==========================
        Bootstrap JS
========================== -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ==========================
        Chart JS
========================== -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- ==========================
        Custom JS
========================== -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>




<!-- ==========================
        Page Wise JS
========================== -->

@yield('scripts')

</body>

</html>