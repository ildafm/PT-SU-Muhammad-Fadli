<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT Sumatra Unggul | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../template/img/favicon.png" rel="icon">
    <link href="../template/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../template/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../template/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../template/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../template/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../template/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body {{-- oncontextmenu="return false;" --}}>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="../template/img/logo.png" alt="">
                <span class="d-none d-lg-block">PT Sumatra Unggul</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    {{-- user in navbar --}}
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="../template/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            Your Name
                        </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        {{-- name and level --}}
                        <li class="dropdown-header">
                            <h6>
                                Your Name
                            </h6>
                            <span>
                                Staff
                            </span>
                        </li>

                        {{-- divider --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        {{-- profile --}}
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        {{-- Sign Out --}}
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#"
                                onclick="alert('Sign Out')">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-heading">Main Page</li>

            <li class="nav-item">
                <a class="nav-link {{ $active === 'kendaraan' ? '' : 'collapsed' }}" href="/kendaraan">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>Kendaraan</span>
                </a>
            </li><!-- End Catatan Page Nav -->

            <li class="nav-item">
                <a class="nav-link {{ $active === 'kategori_kendaraan' ? '' : 'collapsed' }}"
                    href="/kategori_kendaraan">
                    <i class="bi bi-journals"></i>
                    <span>Kategori Kendaraan</span>
                </a>
            </li><!-- End Semua Catatan Page Nav -->

            <li class="nav-heading">profile page</li>

            <li class="nav-item">
                <a class="nav-link {{ $active == 'profile' ? '' : 'collapsed' }}" href="#">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    {{-- start main content --}}
    <main id="main" class="main">
        {{ $slot }}
    </main>
    {{-- end main content --}}


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; PT Sumatra Unggul
        </div>
        {{-- <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
    </footer><!-- End Footer -->

    {{-- script untuk mencegah ctrl + i, j, atau u --}}
    <script type="text/javascript">
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../template/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../template/vendor/chart.js/chart.umd.js"></script>
    <script src="../template/vendor/echarts/echarts.min.js"></script>
    <script src="../template/vendor/quill/quill.min.js"></script>
    <script src="../template/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../template/vendor/tinymce/tinymce.min.js"></script>
    <script src="../template/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../template/js/main.js"></script>

</body>

</html>
