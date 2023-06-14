<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>IT Smart</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset("frontend/assets/img/favicon.png") }}" rel="icon" />
    <link href="{{ asset("frontend/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset("frontend/assets/vendor/aos/aos.css") }}" rel="stylesheet" />
    <link href="{{ asset("frontend/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet" />
    <link href="{{ asset("frontend/assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("frontend/assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("frontend/assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet" />
    <link href="{{ asset("frontend/assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="frontend/assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">IT Smart</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome To Apps</h1>
                    <h2>
                        I Can Recomended Laptops, You Needed !!
                    </h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="frontend/assets/img/hero-img.png" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Duis aute irure dolor in
                                reprehenderit in voluptate velit
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content">
                            <h3>
                                Check Recomendation <strong>Computer Spesification</strong>
                            </h3>
                        </div>

                        <form action="{{ route("showRanking") }}" method="post">
                            @csrf
                            <div class="row content">
                                <div class="col-md-6 footer-contact">
                                    <div class="form-group">
                                        <label for="">CPU</label>
                                        <select name="cpu" id="" class="form-control">
                                            <option value="">-</option>
                                            <option value="1">Sangat Tinggi</option>
                                            <option value="0.8">Tinggi</option>
                                            <option value="0.6">Sedang</option>
                                            <option value="0.4">Rendah</option>
                                            <option value="0.2">Sangat Rendah</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">RAM</label>
                                        <select name="ram" id="" class="form-control">
                                            <option value="">-</option>
                                            <option value="1">Sangat Tinggi</option>
                                            <option value="0.8">Tinggi</option>
                                            <option value="0.6">Sedang</option>
                                            <option value="0.4">Rendah</option>
                                            <option value="0.2">Sangat Rendah</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Storage</label>
                                        <select name="storage" id="" class="form-control">
                                            <option value="">-</option>
                                            <option value="1">Sangat Tinggi</option>
                                            <option value="0.8">Tinggi</option>
                                            <option value="0.6">Sedang</option>
                                            <option value="0.4">Rendah</option>
                                            <option value="0.2">Sangat Rendah</option>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-3 col-md-6">
                                    <div class="form-group">
                                        <label for="">Resolution</label>
                                        <select name="resolusi" id="" class="form-control">
                                            <option value="">-</option>
                                            <option value="1">Sangat Tinggi</option>
                                            <option value="0.8">Tinggi</option>
                                            <option value="0.6">Sedang</option>
                                            <option value="0.4">Rendah</option>
                                            <option value="0.2">Sangat Rendah</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">VGA</label>
                                        <select name="vga" id="" class="form-control">
                                            <option value="">-</option>
                                            <option value="1">Sangat Tinggi</option>
                                            <option value="0.8">Tinggi</option>
                                            <option value="0.6">Sedang</option>
                                            <option value="0.4">Rendah</option>
                                            <option value="0.2">Sangat Rendah</option>
                                        </select>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <input type="submit" value="Check Recomendation" class="btn btn-primary"
                                            style="border-radius:0" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url('frontend/assets/img/why-us.png')" data-aos="zoom-in"
                        data-aos-delay="150">
                        &nbsp;
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            A108 Adam Street <br />
                            New York, NY 535022<br />
                            United States <br /><br />
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> info@example.com<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra videa magna
                            derita valies
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
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset("frontend/assets/vendor/aos/aos.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/php-email-form/validate.js") }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset("frontend/assets/js/main.js") }}"></script>
</body>

</html>
