<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elkod</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.html" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="preload" href="assets/img/slide/slide-1.webp" as="image">
  <link rel="preload" href="assets/img/slide/slide-2.webp" as="image">
  <link rel="preload" href="assets/img/slide/slide-3.webp" as="image">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <style>
    .apliciraj { 
  border: 0;
  width: 150px;
  height: 50px;
  background-color: #2c3091;
  color: #fff;
  transition: .4s;

}

.apliciraj:hover {
  background: #fff300;
  color: black;
}

.apliciraj:focus{
  outline: none;
}
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
  
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:office@elkod.rs">office@elkod.rs</a>
        <i class="icofont-phone"></i> 
        <a href="tel:+381 64 2577 884">+381 64 2577 884</a>
      </div>
      <div class="social-links float-right">
        <a href="https://m.facebook.com/elkoddoo/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/elkod_doo/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/company/elkod-doo/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
    

  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
    
         <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/en">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#test">Projects</a></li>
          <li><a href="/brendovi">Brands</a></li>
          <li><a href="/partneri">Partners</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="/">Srpski</a></li>
          <li><a href="/de" class="de">Deutsch</a></li>
          @if(Route::has('login'))
          <li>
            @auth
            <a href="/dashboard">Dashboard</a>
            @else
            <a href="/login">Admin Login</a>
            @endauth
          </li>
          @endif


   
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">ELKOD <span>DOO</span></h2>
                <p class="animate__animated animate__fadeInUp">Engineering, design and execution of works in the field of electrical installations.</p>
              </div>
            </div>
            <img data-src="assets/img/slide/slide-1.webp" 
                 srcset="assets/img/slide/slide-1-300.webp 300w, assets/img/slide/slide-1-600.webp 600w, assets/img/slide/slide-1.webp 1200w"
                 sizes="(max-width: 600px) 300px, (max-width: 1200px) 600px, 1200px"
                 class="d-block w-100 lazyload" alt="Slide 1" loading="lazy">
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Goals</h2>
                <p class="animate__animated animate__fadeInUp">The goal of the company ELKOD is professionally done work, meeting deadlines and
                contractual obligations.</p>
              </div>
            </div>
            <img data-src="assets/img/slide/slide-2.webp" 
                 srcset="assets/img/slide/slide-2-300.webp 300w, assets/img/slide/slide-2-600.webp 600w, assets/img/slide/slide-2.webp 1200w"
                 sizes="(max-width: 600px) 300px, (max-width: 1200px) 600px, 1200px"
                 class="d-block w-100 lazyload" alt="Slide 2" loading="lazy">
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
              </div>
            </div>
            <img data-src="assets/img/slide/slide-3.webp" 
                 srcset="assets/img/slide/slide-3-300.webp 300w, assets/img/slide/slide-3-600.webp 600w, assets/img/slide/slide-3.webp 1200w"
                 sizes="(max-width: 600px) 300px, (max-width: 1200px) 600px, 1200px"
                 class="d-block w-100 lazyload" alt="Slide 3" loading="lazy">
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>


  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/onama.png" class="img-fluid" alt="">

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
            <h2>About us</h2>
              <p>Company "ELKOD" d.o.o. for engineering, design and execution of works
               was founded in January 2014 in Sremska Mitrovica.</p>
              <br>
              <p>The predominant activity of the company is engineering, as a product of many years of experience in electrical engineering
               a wide range of jobs in the field of strong and weak current works, on all types
               buildings; residential, commercial-business and industrial-production facilities
               character, ie. plants, as well as performing electrical installation work on power
               facilities, with special emphasis on the construction of power, control and distribution
               closet.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
  <section id="test" class="faq section-bg">
      <div class="container">


        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-12 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>RELIABILITY</h4>
            <p>
              Reliability, quality of work and organization of the company lead to successful cooperation
               with numerous <a href="/partneri">business partners</a>. We are aware that only professional knowledge,
               permanent education and application of modern methods in our business can
               make our business partners happy.
            </p>
          </div>
        </div>

      </div>
    </section>

    



    <section id="portfolio" class="portfolio section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
        <h2>Some of our projects</h2>
          <p>Thanks to experience, leadership attitude towards work and proactive approach to the market formed
               is a team absolutely committed to constantly improving customer satisfaction, increasing
               the volume of business, the absolute quality of services, and the creation of long-term mutual benefits
               as perhaps the most important principle of business.
               A team of more than 40 employees, consisting of highly professional engineering and technical staff, installers,
               electricians with many years of joint experience in business for investors with
               high standards and requirements.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active" style="display: none;"></li>
                </ul>
            </div>
        </div>

 

    <div class="row portfolio-container">

        @foreach ($projects as $project)
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/' . $project->picture) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$project->name}}</h4>

                <div class="portfolio-links">
                  <a href="{{ asset('storage/' . $project->picture) }}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-eye"></i></a>
                  <a href="{{ route('projects.show', $project->id) }}" title="Pogledaj više"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>
</section><!-- End Our Portfolio Section -->







<section id="test" class="faq section-bg">
      <div class="container">

 

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-12 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>JOIN OUR TEAM:</h4>
            <img src="assets/img/pridružise.jpg" class="img-fluid" alt="">
                       <p>
                       Since we are constantly developing our business, educated and reliable people are always welcome to our team. You can send mail to <a href="mailto:office@elkod.rs?subject=Poslovi">office@elkod.rs</a>
              
              <form action="/send" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input class="form-control" placeholder="Email Address:" type="email" id="from_email" name="from_email" required><br><br>
    </div>
    
    <div class="form-group">
        <input class="form-control" placeholder="Title:" type="text" id="subject" name="subject" required><br><br>
    </div>
    
    <textarea class="form-control" placeholder="Message:" id="message" name="message" required></textarea><br><br>
    
    <label for="file">Your CV:</label><br>
    <input type="file" id="file" name="file"><br><br>
    
    <input class="apliciraj" type="submit" value="Submit">
</form>



              
            </p>
            
           

          </div>          

        </div>

      </div>
    </section>



    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact ">
      <div class="container ">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Addresses</h3>
              <h3>Company headquarters address</h3>
                 <p>Trg nikole Pašića BB, TC Madesa</p> 
                 <p>lokal br. 17 22000 Sremska Mitrovica</p>
              <h3>Address of the company representative office</h3>
                    <p>Pirazzistraße 18</p> 
                    <p>63067 Offenbach am Main, Deutschland</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:office@elkod.rs">office@elkod.rs</a><br><a href="mailto:office.de@elkod.rs">office.de@elkod.rs</a></p>



            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>
 <a href="tel:+381 64 2577 884">+381 64 2577 884</a>

 <br> <a href="tel:+381 64 3610 562">+381 64 3610 562</a></p>
            </div>
          </div>


        </div>

      </div>
    </section>

  </main><!-- End #main

  <!-- ======= Footer ======= -->
  <footer id="footer">
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Elkod</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>


</body>


</html>