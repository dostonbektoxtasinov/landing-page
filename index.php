<?php
$title = 'Portfolio Mine';
require './layouts/header.php' ?>

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">
    <div class="profile">
      <img src="/assets/img/link-img.png" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.php">Dostonbek <br> To'xtasinov</a></h1>
      <div class="social-links mt-3 text-center">
        <a href="https://t.me/dostonbek_909" class="telegram"><i class="bx bxl-telegram"></i></a>
        <a href="https://instagram.com/dostonbek21_?igshid=ZDdkNTZiNTM=" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.facebook.com/dostonbek.toxtasinov.963?mibextid=ZbWKwL)" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://wa.me/qr/IALNNQWY3PQGK1" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1>Dostonbek <br> To'xtasinov</h1>
    <p>I'm <span class="typed" data-typed-items="Front-end developer, Back-end developer, Freelancer"></span></p>
  </div>
</section><!-- End Hero -->

<main id="main">

  <?php
  require './Admin/about/about.php'
  ?>
  </section><!-- End About Section -->


  <!-- ======= Skills Section ======= -->
  <?php
  require './Admin/skills/skills.php'
  ?>
  <!-- End Skills Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Bu men haqimda yana qisqacha malumotim.</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
          <h3 class="resume-title">About</h3>
          <div class="resume-item pb-0">
            <h4>Dostonbek To'xtasinov</h4>
            <ul>
              <li>Andijon Viloyati, Buloqboshi Tumani, Toshkechik MFY, 192 - uy</li>
              <li>+998 99 909 92 66</li>
              <li>+998 91 609 92 66</li>
              <li>dostonbektoxtasinov910@gmail.com</li>
              <li>dostonbektoxtasinov909@gmail.com</li>
            </ul>
          </div>


        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Andijon Axborot Texnalogiyalari Texnikumi</h4>
            <h5>2021 - 2023</h5>
            <p><em>Dasturiy Injinering Fakulteti</em></p>
            <p>Front-end &amp; Back-end Yonalishlari.</p>
          </div>
          <div class="resume-item">
            <h4>Andijon Aqloqa Kasb Hunar Kolleji</h4>
            <h5>2017 - 2020</h5>
            <p><em>EJM - Yonalishi</em></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <?php
  require './Admin/portfolio/porfolio.php'
  ?>
  <!-- End Portfolio Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Admin bilan bog'lanish uchun royhatdan oting malumotlaringiz admin telegramiga boradi. Admin ruxsat siz bilan bog'lanishi mumkin.</p>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Andijon Viloyati, Buloqboshi Tumani, Toshkechik MFY, 192 - uy</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>dostonbektoxtasinov909@gmail.com dostonbektoxtasinov910@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+998 99 909 92 66 <br> +998 91 609 92 66</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2997.271158948484!2d72.51010818181868!3d40.611764392762446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDM2JzQyLjUiTiA3MsKwMzAnMzguNiJF!5e1!3m2!1sru!2s!4v1683135567634!5m2!1sru!2s" width="420" height="300" style="border:0;" allowfullscreen="" loading="lazy" style="border:0; width: 100%; height: 290px;" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>


        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <label for="name">Your FullName</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="number">Your Number</label>
              <input type="number" name="number" class="form-control" id="number" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


<?php require './layouts/footer.php' ?>