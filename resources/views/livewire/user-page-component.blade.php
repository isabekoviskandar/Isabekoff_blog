<div>

  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Isabekoff blog</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  
    <!-- Favicons -->
    <link href="assets.blog/img/isabekoff.png" rel="icon">
    <link href="assets.blog/img/isabekoff.png" rel="apple-touch-icon">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets.blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets.blog/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets.blog/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets.blog/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets.blog/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets.blog/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Main CSS File -->
    <link href="assets.blog/css/main.css" rel="stylesheet">
  </head>
  
  <body class="index-page">
  
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
  
        <a href="userPage" class="logo d-flex align-items-center">
          <h1 class="sitename">Isabekoff blog</h1>
        </a>
  
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="/blog" wire:navigate>Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
  
      </div>
    </header>
  
    <main class="main">
  
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
  
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
  
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>My blog</span></h2>
              <p class="animate__animated animate__fadeInUp">I am a passionate backend developer with expertise in PHP, Laravel, and MySQL. My journey began with a strong foundation in HTML and CSS, which I expanded into dynamic web development. Over the years, I've worked on a variety of projects, including e-commerce platforms, content management systems, and feature-rich web applications.
              </p>
              {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
            </div>
          </div>
  
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">I am happy to see you in my blog</h2>
              <p class="animate__animated animate__fadeInUp">I thrive in crafting efficient database architectures and optimizing server-side logic. I have a knack for problem-solving and enjoy designing scalable solutions that meet user needs. Whether it's implementing CRUD operations, handling user authentication, or building robust API integrations, I approach every task with dedication and precision.</p>
              {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
            </div>
          </div>
  
          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">If you want to work with me I am ready for that</h2>
              <p class="animate__animated animate__fadeInUp">I'm continuously learning and expanding my skill set. From exploring Laravel's advanced features to understanding modern development workflows, I enjoy staying at the forefront of web development trends.

                If you're looking for someone who can turn complex ideas into practical solutions, I'm always up for a challenge. Let's connect and create something amazing!</p>
              {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
            </div>
          </div>
  
          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>
  
          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
  
        </div>
  
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
          </defs>
          <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3"></use>
          </g>
          <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0"></use>
          </g>
          <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9"></use>
          </g>
        </svg>
  
      </section><!-- /Hero Section -->

      <!-- Recent Posts Section -->
      <section id="recent-posts" class="recent-posts section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Recent Posts</h2>
          <p>Recent Blog Posts<br></p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <article>
  
                <div class="post-img">
                  <img src="assets.blog/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Politics</p>
  
                <h2 class="title">
                  <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <img src="assets.blog/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>
  
              </article>
            </div><!-- End post list item -->
  
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <article>
  
                <div class="post-img">
                  <img src="assets.blog/img/blog/blog-2.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Sports</p>
  
                <h2 class="title">
                  <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <img src="assets.blog/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Allisa Mayer</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 5, 2022</time>
                    </p>
                  </div>
                </div>
  
              </article>
            </div><!-- End post list item -->
  
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <article>
  
                <div class="post-img">
                  <img src="assets.blog/img/blog/blog-3.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Entertainment</p>
  
                <h2 class="title">
                  <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <img src="assets.blog/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Mark Dower</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 22, 2022</time>
                    </p>
                  </div>
                </div>
  
              </article>
            </div><!-- End post list item -->
  
          </div><!-- End recent posts list -->
  
        </div>
  
      </section><!-- /Recent Posts Section -->
  
  
    </main>
  
    <footer id="footer" class="footer dark-background">
      <div class="container">
        <h3 class="sitename">Isabekoff blog</h3>
        <p>If you want to work with me there are how you can find me </p>
        <div class="social-links d-flex justify-content-center">
          <a href="https://t.me/isabekoff_coder"><i class="bi bi-telegram"></i></a>
          <a href="https://github.com/isabekoviskandar"><i class="bi bi-github"></i></a>
          <a href="https://www.instagram.com/shady.programmer/"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/iskandar-isabekov-60745229b/"><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="container">
          <div class="copyright">
            <span>Copyright</span> <strong class="px-1 sitename">Iskandar</strong> <span>All Rights Reserved</span>
          </div>
          <div class="credits">
            Designed by <a href="https://t.me/isabekoff_coder">Isabekoff coder</a>
          </div>
        </div>
      </div>
    </footer>
  
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
    <!-- Vendor JS Files -->
    <script src="assets.blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets.blog/vendor/php-email-form/validate.js"></script>
    <script src="assets.blog/vendor/aos/aos.js"></script>
    <script src="assets.blog/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets.blog/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets.blog/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets.blog/vendor/swiper/swiper-bundle.min.js"></script>
  
    <!-- Main JS File -->
    <script src="assets.blog/js/main.js"></script>
  
  </body>
  
  </html>
</div>