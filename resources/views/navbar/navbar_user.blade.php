<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bapeling | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon1.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div>
        @yield('context')
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto" data-aos="fade-up">
                <!-- <h1><a href="index.html">Bapeling</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1><a href="/"><img src="assets/img/favicon.png" alt="" class="image"></a></h1>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto {{ $title === 'Home_user' ? 'active' : ' ' }}" href="/user">Beranda</a>
                    </li>
                    </li>
                    <li><a class="nav-link scrollto {{ $title === 'About' ? 'active' : ' ' }}" href="/about_user">Tentang</a></li>


                    <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto {{ $title === 'Lokasi' ? 'active' : ' ' }}" href="/page-location-user">Lokasi TPS</a></li>
                            <li><a class="nav-link scrollto {{ $title === 'Merketplace' ? 'active' : ' ' }}" href="/page-market-user">Marketplace</a></li>
                        </ul>

                    <li><a class="nav-link scrollto {{ $title === 'Kontak' ? 'active' : ' ' }}" href="/contact-user">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                </ul>
                <img src="assets/img/person-fill.svg" class="user-pic" onclick="toggleMenu()">
            </nav><!-- .navbar -->
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="assets/img/person-fill.svg">
                        <h3>user</h3>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="assets/img/pencil-fill.svg">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="assets/img/gear-fill.svg">
                        <p>Settings</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="assets/img/info-circle-fill.svg">
                        <p>Help</p>
                        <span>></span>
                    </a>
                    <a href="/" class="sub-menu-link">
                        <img src="assets/img/box-arrow-right.svg">
                        <p>Logout</p>
                        <span>></span>
                    </a>

                </div>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Bapeling</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Semua Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/user">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/about_user">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/page-location-user">Lokasi TPS</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/page-market-user">Bank Sampah</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/contact-user">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/about_user">Edukasi Pemilahan Sampah</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/page-location-user">Maps TPS terdekat</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/page-market-user">Marketplace</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Lokasi</h4>
                        <p>Provinsi Bali</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Bapeling</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

</body>

</html>