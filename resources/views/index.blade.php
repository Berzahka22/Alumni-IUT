<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Vendor CSS Files -->
  <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ url('css/main.css') }}">
  

</head>

<body class="index-page">
  <!-- Le reste de ton code HTML commence ici, inchangé -->

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
       <h1 class="sitename">Al<span>uMn</span>i-IUT</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Accueil<br></a></li>
          <li><a href="#Objestis">Objectis</a></li>
          <li><a href="#services">Services</a></li> 
          <li><a href="#Emplois/Stages">Emplois/Stages</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="{{ route('log_sig') }}">Nous Rejoindre</a>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
   <section id="hero" class="hero section">
  <div class="hero-background">
    <img src="{{ url('img/Nouveau dossier/1.png') }}" class="hero-img" alt="">
    <div class="hero-overlay"></div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <!-- Titre avec animation de type "typed.js" -->
        <h2 class="hero-title" data-aos="fade-up" data-aos-delay="100">
          <span class="typed-text"></span>
          <span class="cursor">&nbsp;</span>
        </h2>
        
        <!-- Texte avec apparition séquentielle -->
        <div class="hero-text" data-aos="fade-up" data-aos-delay="200">
          <p class="text-line"><span>L'IUT de Ngaoundéré n'est pas seulement un lieu de formation,</span></p>
          <p class="text-line"><span>mais un foyer de relations durables.</span></p>
          <p class="text-line"><span>Il crée un véritable pont entre étudiants,</span></p>
          <p class="text-line"><span>anciens et enseignants, favorisant l'entraide,</span></p>
          <p class="text-line"><span>le partage d'expérience et le mentorat.</span></p>
          <p class="text-line"><span>Ce lien intergénérationnel fait la force et la richesse de la communauté IUT.</span></p>
          
        </div>
        
        <!-- Bouton CTA avec animation -->
        <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
          <a href="#Objestis" class="btn btn-danger btn-scroll">
            <span>Découvrir plus</span>
            <i class="bi bi-arrow-down-circle"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

    @if (session('success'))
    <div class="alert alett-success">
      {{ session('success') }}
    </div>
    @endif

    <!-- Objestis Section -->
    <section id="Objestis" class="Objestis section section-bg dark-background">
      <div class="container position-relative">
        <div class="row gy-5">
          <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
            <h3>Les Objectifs de AluMni-IUT...</h3>
            <p><i class="bi bi-quote quote-icon-left"></i>Ce site a pour objectif de renforcer les liens entre anciens et nouveaux étudiants, en facilitant les échanges, les conseils et les opportunités.
               Il vise à bâtir une communauté soudée, solidaire et tournée vers l'avenir.<i class="bi bi-quote quote-icon-left"></i></p>
          </div>

          <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-md-6 icon-box position-relative">
                <center>
                  <i class="bi bi-briefcase"></i>
                  <h4> Opportunités </h4>
                </center>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <center>
                  <i class="bi bi-person-raised-hand icon flex-shrink-0"></i>
                  <h4>Retrouvailles</h4>
                </center>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <center>
                  <i class="bi bi-broadcast"></i>
                  <h4> Réseaux D'étudiants </h4>
                </center>
              </div><!-- Icon-Box -->
 
              <div class="col-md-6 icon-box position-relative">
                <center>
                  <i class="bi bi-easel"></i>
                  <h4>Promotion Des Etudiants</h4>
                </center>
              </div><!-- Icon-Box -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Objestis Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-person-standing"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Anciens étudiants de l'IUT</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projets Réalisés</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-buildings"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Entreprises partenaires</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Etudiants Actuels</p>
            </div>
          </div><!-- End Stats Item -->
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section section-bg dark-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-person-raised-hand icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Retrouver Ses Anciens Camarades</a></h4>
                <p class="description">Retrouver ses promotionnaires et ses camarades</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-briefcase icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Offres D'emplois/ Stages</a></h4>
                <p class="description">Découvrir, Proposer des Emplois et des Stages</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-journal-bookmark-fill icon flex-shrink-0"></i>  
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Mémoires</a></h4>
                <p class="description">Retrouver les anciens Mémoires et rapports de Stages sur nombreux thèmes</p>
              </div>
            </div>
          </div><!-- End Service Item -->
 
 

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Projets Réalisés</a></h4>
                <p class="description">Voir et Découvrir l'ensemble des réalisations des Etudiants de l'IUT</p>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Majors Section -->
    <section id="testimonials" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Les Majors</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper majors-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ url('img/Nouveau dossier/BN.png') }}" class="testimonial-img" alt="">
                <h3>BERZAHKA BEBDANNE BENYAAMIN</h3>
                <h4>Promotion 2023</h4>
                <p><strong>Moyenne :</strong> 17.5 / 20</p>
                <p><strong>Appréciation :</strong> Excellent</p>
                <p><strong>Mention :</strong> Très Bien</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ url('img/Nouveau dossier/iv.png') }}" class="testimonial-img" alt="">
                <h3>POUBA IVANA</h3>
                <h4>Promotion 2022</h4>
                <p><strong>Moyenne :</strong> 16.8 / 20</p>
                <p><strong>Appréciation :</strong> Très Bon</p>
                <p><strong>Mention :</strong> Bien</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ url('img/Nouveau dossier/OR.png') }}" class="testimonial-img" alt="">
                <h3>NDOUP ORNELLA</h3>
                <h4>Promotion 2021</h4>
                <p><strong>Moyenne :</strong> 17.2 / 20</p>
                <p><strong>Appréciation :</strong> Excellent</p>
                <p><strong>Mention :</strong> Très Bien</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ url('img/Nouveau dossier/tj.png') }}" class="testimonial-img" alt="">
                <h3>TEDJONA KENFACK AXEL PARADOX</h3>
                <h4>Promotion 2020</h4>
                <p><strong>Moyenne :</strong> 16.5 / 20</p>
                <p><strong>Appréciation :</strong> Très Bon</p>
                <p><strong>Mention :</strong> Bien</p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ url('img/Nouveau dossier/ca.png') }}" class="testimonial-img" alt="">
                <h3>NTOLO BAGARI CALEB SAMMUEL</h3>
                <h4>Promotion 2019</h4>
                <p><strong>Moyenne :</strong> 16.9 / 20</p>
                <p><strong>Appréciation :</strong> Excellent</p>
                <p><strong>Mention :</strong> Très Bien</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section><!-- /Majors Section -->

    <!-- Emplois/Stages Section -->
    <!-- Emplois/Stages Section -->
<section id="Emplois/Stages" class="Emplois/Stages section section-bg dark-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Temoignage</h2>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="swiper testimonials-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <center> <img src="{{ url('img/Nouveau dossier/Capture2.png') }}" class="emplois-img" alt="">
            <h3>ATOH MBARGA ROSTAND MERCIER</h3>
            <h4>Major en genie Logiciel</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              "Grâce à AluMni-IUT, j'ai décroché un stage chez SM DESING qui s'est transformé en emploi permanent !"
             
              <i class="bi bi-quote quote-icon-right"></i>
              
            </p>
            </center>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <center> <img src="{{ url('img/Nouveau dossier/Capture.png') }}" class="emplois-img" alt="">
            <h3>DJOLLEBE BEBDANNE ASER</h3>
            <h4>Major Génie Biologie 2024</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              "La plateforme m'a permis de rester connectée à mes anciens camarades et de découvrir des opportunités internationales."
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            </center>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <center> <img src="{{ url('img/Nouveau dossier/jj.png') }}" class="emplois-img" alt="">
            <h3>DAMA JOYCE</h3>
            <h4>Major Informatique Industrielle 2021</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              "Un réseau solide et une vraie famille d'anciens. L'IUT m'a formé, AluMni-IUT m'a projeté !"
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            </center>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
           <center> <img src="{{ url('img/Nouveau dossier/file_000000003eb46246b5621c9339f0ae71.png') }}" class="emplois-img" alt="">
            <h3>MAMAYA NOELIE</h3>
            <h4>Major Analyse biologique 2024</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              "Aujourd'hui ingénieure à Douala, je suis fière d'avoir été major et de transmettre mon expérience via AluMni-IUT."
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            </center>
          </div>
        </div>

      </div>
      
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section><!-- /Emplois/Stages Section -->


  

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <center><h1>Pour nous contacter Veuillez vous inscrire</h1></center>
    </section><!-- /Contact Section -->
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6 footer-Objestis">
          <a href="index.html" class="logo d-flex justify-content-center mb-3">
            <h1 class="sitename">Al<span>uMn</span>i-IUT</h1><span>.</span>
          </a>

          <div class="footer-contact">
            <p>Université de Ngaoundéré</p>
            <p>IUT de Ngaoundéré</p>
            <p class="mt-3"><strong>Téléphone +237:</strong> <span> 677-512-108/ 677-916-05</span></p>
            <p><strong>Email :</strong> <span>IutNdere@gmail.com</span></p>
          </div>

          <div class="social-links d-flex justify-content-center mt-4">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 footer-links mt-4">
          <ul class="list-unstyled">
             <li><a href="#Objestis">Objectifs</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#Emplois/Stages">Emplois/Stages</a></li>
            <li><a href="#Contact">Contact</a></li>
           
          </ul>
        </div>
      </div>
    </div>

    <div class="container text-center mt-4">
      <p>© Copyright <strong class="sitename">AluMni-IUT</strong>2025 </p>
 
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ url('vendor/aos/aos.js')}}"></script>
  <script src="{{ url('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ url('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ url('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ url('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ url('js/main.js')}}"></script>


</body>
</html>