<div>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blogs</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets.blog/img/isabekoff.png" rel="icon">
  <link href="assets.blog/img/isabekoff.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets.blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets.blog/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets.blog/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets.blog/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets.blog/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets.blog/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets.blog/css/main.css" rel="stylesheet">
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename">Isabekoff blog</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/userPage" wire:navigate>Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html" class="active">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Blog</h1>
        <p> In here I write only my thoughts</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/userPage" wire:navigate>Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
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


        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

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
