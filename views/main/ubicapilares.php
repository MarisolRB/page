<?php require  'views/header.php'?>


<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <nav class="navbar navbar-expand-lg">
                      <!-- Logo -->
                      <a class="navbar-brand" href="index.html"><img src="img/core-img/Pilares_logo.svg" alt="Logo"></a>
                      <!-- Navbar Toggler -->
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                      <!-- Navbar -->
                      <div class="collapse navbar-collapse" id="worldNav">
                          <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                                  <a class="nav-link" href="regular-page.html">Convocatorias</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="contact.html">Ubica tu PILARES</a>
                              </li>
                              <li class="nav-item">
                                  <a id="btn-abrir-popup" class="nav-link btn-abrir-popup">Registro Usuarios</a>
                              </li>
                              <li class="nav-item">
                                  <a  class="nav-link" href="single-blog.html">Administración <span class="sr-only">(current)</span></a>
                              </li>
                          </ul>
                          <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item">
                              <a class="nav-link" href="https://www.facebook.com/Pilares-CDMX-325332928095841/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                          </ul>
                            <!--Vantana emergente de Registro Usuarios
                            <div class="contenedor">
                              <div class="overlay" id="overlay">
                                <div class="popup" id="popup">
                                  <a href="index.html" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times"></i></a>
                                  <h4 class="text-white">Ingresa usuario y contraseña </h4>
                                    <form action='index.php' method="post">
                                      <input placeholder="Usuario" name='txtusuario'>
                                      <input type="password" placeholder="Contraseña" name='txtpass'>
                                      <button type="submit" name="login">Login</button>
                                    </form>
                                 </div>
                                </div>
                              </div>
                              -->
                          <!--Search Form
                          <div id="search-wrapper">
                              <form action="#">
                                  <input type="text" id="search" placeholder="Search something...">
                                  <div id="close-icon"></div>
                                  <input class="d-none" type="submit" value="">
                              </form>
                           -->
                          </div>
                      </div>
                  </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Get in Touch</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <!--
    <div class="map-area">
        <div id="googleMap" class="googleMap"></div>
    </div>
    -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

   
  <?php require 'views/footer.php'; ?>

</body>

</html>
