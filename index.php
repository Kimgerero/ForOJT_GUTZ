<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Company Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>

    .bar {
      position: relative; /* Make the section container a reference for the absolute positioning */
      width: 100%;
      height: auto;
      overflow: hidden;
    }

    .bar img {
      position: absolute;
      top: -17%;
      left: 80%;
      transform: translateX(-50%);
      z-index: 1;
      width: 850px;
      height: 100%;
      object-fit: cover;
      object-position: center top;
    }

    .card{
      background-color: #003300;
      color: white;
      height: 600px;
      display: flex;
      align-items: center;
      flex-direction: column; /* Stack items vertically */
      justify-content: center;
      padding: 100px;
      width: 65%;
    }

    .card h2{
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: #597931 solid;
      width: 80%;
      font-weight: bolder;
      color: white;
      font-family:Arial, Helvetica, sans-serif;
      font-size: clamp(18px, 3vw, 35px);
    }

    .progress-container {
      position: relative;
      width: 400px;
      margin-top: 50px;
      margin-bottom: 30px;
    }

    .progress-bar {
      width: 100%;
      height: 25px;
      background: #e0e0e0;
      border-radius: 5px;
      position: relative;
      overflow: hidden;
    }

    .progress {
      height: 100%;
      background: #597931;
      border-radius: 5px;
      position: relative;
    }

    .text-group {
      display: flex;
      align-items: center;
      gap: 125px;
      position: absolute;
      top: -32px;
      left: 0;
      font-size: clamp(12px, 2vw, 16px);
    }

    .progress-text {
      font-size: clamp(12px, 1.8vw, 16px);
      font-weight: bold;
      color:rgb(184, 184, 184);
    }

    .box{
      height: 200px;
      width: 300px;
      background-color: #597931;
      align-items: center;
      justify-content: center;
      display: flex;
      padding: 0 25px;
      text-align: center;
      font-size: clamp(18px, 2.5vw, 25px);
      font-weight: bold;
    }

    .card ul {
      list-style-type: none;
      padding-left: 0;
    }

    .card ul li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 10px;
      font-size: clamp(14px, 2vw, 18px);
    }

    .card ul li::before {
      content: "\2713"; /* Unicode checkmark character */
      position: absolute;
      left: 0;
      top: 0;
      font-size: clamp(20px, 3vw, 25px);
      font-weight: bold;
      color: #597931;
    }

    @media (max-width: 1500px) {

      .bar img {
        top: -17%;
        left: 80%;
        transform: translateX(-50%);
        z-index: 1;
        width: 600px;
        height: 100%;
      }

      .card {
        width: 65%;
        height: auto;
        padding: 50px 40px;
      }

      .card h2{
        width: 70%;
      }

      .box{
        height: 100px;
        width: 550px;
      }
    }

    @media (max-width: 1020px) {
      .bar img {
        position: relative;
        top: 0;
        left: 0;
        transform: translateX(0);
        z-index: 0;
        width: 100%;
        height: auto;
      }

      .card {
        width: 100%;
        height: auto;
        padding: 50px 40px;
      }

      .card h2{
        font-size: 30px;
        width: 100%;
        text-align: center;
      }

      .progress-container {
        width: 490px;
      }

      .text-group {
        gap: 200px;
      }

      .box-container {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .box{
        height: 100px;
        width: 400px;
        font-size: 20px;
      }
    }

    @media (max-width: 768px) {
      .bar img {
        position: relative;
        top: 0;
        left: 0;
        transform: translateX(0);
        z-index: 0;
        width: 100%;
        height: auto;
      }
      
      .card {
        width: 100%;
        height: auto;
        padding: 50px 20px;
      }

      .card h2{
        font-size: 20px;
        width: 100%;
        text-align: center;
      }

      .assurance {
        text-align: center;
        margin-top: 20px;
        font-size: 30px;
      }

      .box-container {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .box{
        height: 90px;
        width: 500px;
        padding: 0 25px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
      }

      .progress-wrapper {
        flex-direction: column;
        align-items: center;
        display: flex;
      }

      .card ul li::before {
        left: 10%;
      }

      .card ul li {  
        padding-left: 110px;
      }
    }

    @media (max-width: 525px) {

      .card h2{
        font-size: 15px;
      }

      .progress-container {
        width: 300px;
      }

      .text-group {
        gap: 75px;
      }

      .assurance {
        font-size: 25px;
      }

      .box{
        height: 90px;
        width: 300px;
        font-size: 20px;
      }

      .card ul li::before {
        left: 10%;
      }

      .card ul li {  
        padding-left: 80px;
      }
    }
  </style>

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <?php include "includes/header.php" ?>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/bg.jpg" alt="">
          <div class="container">
            <h2>Who We Are</h2>
            <p>GUTZ Online Communication Services is a company based in the Philippines that provides business process outsourcing services to clients around the world since 2018. Although Gutz is relatively young in the industry as compared to other companies it has a proven track record of delivering high-quality and cost-effective solutions to its clients across various domains, such as customer service, telemarketing, English as a second language (ESL), and virtual assistance.</p>
            <a href="about.html" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/bg.jpg" alt="">
          <div class="container">
            <h2>Who We Are</h2>
            <p>GUTZ OCS operates under the proprietorship of its Chief Executive Officer/ Director Regine Mae E. Gutierrez, and the ardent management of its Chief Operating Officer/Operations Manager, Katherine J. Agripa, alongside a highly competent team of individuals whose dedication and hard work fortify the company's foundations.</p>
            <a href="about.html" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/bg.jpg" alt="">
          <div class="container">
            <h2>Who We Are</h2>
            <p>Our company has a team of skilled and experienced agents who can handle various types of customer interactions, such as voice, chat, email, and social media. We are also expanding our services in different accounts.</p>
            <a href="about.html" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row position-relative">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h2 class="inner-title">What We Can Do for You​</h2>
            <p class="outer-title">We provide solutions for all your back-office needs.</p>
          </div>
          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
            <p>Designed to meet your industry needs, GUTZ offers a full range of outsourcing virtual services such as accounting and bookkeeping, Virtual Property Management, Social Media Management, General Virtual Assistant, and E-commerce services.</p>
            <p>We are your dedicated partner providing efficient back-office support and effective extension of your existing in-house team.</p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="bar section light-background">
        <div class="row">
          <div class="card">
            <div class="row">
              <h2 data-aos="slide-right" data-aos-delay="200">What are the pros of outsourcing?</h2>
              <div class="col">
                <div class="progress-wrapper">
                  <div class="progress-container" data-aos="slide-left" data-aos-delay="200">
                    <div class="text-group">
                      <p>Increase your productivity</p>
                      <span class="progress-text">90%</span>
                    </div>
                    <div class="progress-bar">
                      <div class="progress" style="width: 90%;"></div>
                    </div>
                  </div>

                  <div class="progress-container" data-aos="slide-right" data-aos-delay="200">
                    <div class="text-group">
                      <p>Cost-effective</p>
                      <span class="progress-text">65%</span>
                    </div>
                    <div class="progress-bar">
                      <div class="progress" style="width: 65%;"></div>
                    </div>
                  </div>
                </div>
                <p class="assurance"><b>We can assure you:</b></p>
                <ul>
                  <li>Consistent Improvement</li>
                  <li>Commitment to Clients</li>
                  <li>Administrative Tasks Timely Done</li>
                </ul>
              </div>
              <div class="col box-container">
                  <p class="box" data-aos="slide-left" data-aos-delay="200">Do What You Do Best and GUTZ The Rest</p>
              </div>
            </div>
          </div>
          <img src="assets/img/procons.jpg">
        </div>
    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0 clients-wrap">

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Company</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Company</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>