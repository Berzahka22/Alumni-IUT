<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Emplois/stages</title>

  <!-- Vendor CSS Files -->
  <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ url('css/main.css') }}" rel="stylesheet">

  <script>
    function toggleDetails(link) {
      const details = link.closest('.content').querySelector('.job-details');
      if (details.style.display === "none") {
        details.style.display = "block";
        link.textContent = "Réduire...";
      } else {
        details.style.display = "none";
        link.textContent = "Voir plus...";
      }
    }
  </script>
</head>

<body class="emploi-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Al<span>uMn</span>i-IUT</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index') }}">Accueil</a></li>
          <li><a href="#emploi-posts">Emplois/Stages</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="">Nous Rejoindre</a>

    </div>
  </header>

  <main class="main">
    <div class="container mt-3">
      <a href="{{ route('index') }}">Accueil</a> 
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-8">

          <!-- emploi Posts Section -->
          <section id="emploi-posts" class="emploi-posts section">
           <div class="col-12">
  <article>
    <h2 class="title">
      <a href="#!">Offre d'emploi : Développeur Front-End React</a>
    </h2>
    <div class="meta-top">
      <ul>
        <li><i class="bi bi-building"></i> <a href="#!">Startup TechCam</a></li>
        <li><i class="bi bi-clock"></i> <a href="#!"><time datetime="2025-06-17">17 juin 2025</time></a></li>
        <li><i class="bi bi-geo-alt"></i> <a href="#!">Yaoundé, Cameroun</a></li>
      </ul>
    </div>
    <div class="content">
      <p>
        TechCam, une startup innovante spécialisée dans les solutions digitales, recherche un développeur Front-End React passionné pour construire une application web moderne, performante et responsive.
      </p>
      <div class="read-more">
        <a href="#!" onclick="toggleDetails(this)">Voir plus...</a>
        
      </div>
      <div class="job-details" style="display: none; margin-top: 15px;">
        <ul>
          <li><strong>Missions principales :</strong>
            <ul>
              <li>Développer des interfaces utilisateur performantes avec React.js en respectant les bonnes pratiques.</li>
              <li>Collaborer avec l'équipe backend pour intégrer les APIs REST.</li>
              <li>Assurer la maintenance et l'évolution des applications existantes.</li>
              <li>Participer aux revues de code et à l'amélioration continue du produit.</li>
            </ul>
          </li>
          <li><strong>Compétences techniques :</strong>
            <ul>
              <li>Maîtrise avancée de ReactJS (hooks, context API, Redux est un plus).</li>
              <li>Expérience avec Tailwind CSS, Bootstrap ou autre framework CSS moderne.</li>
              <li>Bonne connaissance de Git/GitHub et gestion de versions.</li>
              <li>Compréhension des principes RESTful APIs et intégration JSON.</li>
              <li>Notions de tests unitaires et fonctionnels.</li>
            </ul>
          </li>
          <li><strong>Profil recherché :</strong>
            <ul>
              <li>Étudiant(e) ou diplômé(e) en informatique (Bac+3 minimum).</li>
              <li>Autonomie, rigueur et esprit d'équipe.</li>
              <li>Bonnes capacités de communication et de résolution de problèmes.</li>
              <li>Portfolio ou GitHub actif fortement apprécié.</li>
            </ul>
          </li>
          <li><strong>Conditions :</strong>
            <ul>
              <li>Durée : Stage de 3 à 6 mois, possibilité CDI selon profil.</li>
              <li>Localisation : Yaoundé, possibilité de télétravail partiel.</li>
              <li>Avantages : tickets restaurant, remboursement transport, formations internes.</li>
            </ul>
          </li>
          <li><strong>Début :</strong> Immédiat</li>
        </ul>
        <div class="read-more">
        
        <a href="#!" onclick="">Postuler!!</a>
      </div>
      </div>
    </div>
  </article>
</div>

<!-- Poste 2 -->
<div class="col-12">
  <article>
    <h2 class="title">
      <a href="#!">Offre d'emploi : Technicien Bâtiment – Suivi Chantier</a>
    </h2>
    <div class="meta-top">
      <ul>
        <li><i class="bi bi-building"></i> <a href="#!">BatiPlus Cameroun</a></li>
        <li><i class="bi bi-clock"></i> <a href="#!"><time datetime="2025-06-19">19 juin 2025</time></a></li>
        <li><i class="bi bi-geo-alt"></i> <a href="#!">Yaoundé, Cameroun</a></li>
      </ul>
    </div>
    <div class="content">
      <p>
        BatiPlus Cameroun, leader dans le secteur de la construction, recherche un technicien expérimenté pour assurer le suivi et la coordination des travaux sur ses chantiers.
      </p>
      <div class="read-more">
        <a href="#!" onclick="toggleDetails(this)">Voir plus...</a>
     
      </div>
      <div class="job-details" style="display: none; margin-top: 15px;">
        <ul>
          <li><strong>Missions :</strong>
            <ul>
              <li>Contrôler l’avancement des travaux conformément aux plans et délais.</li>
              <li>Coordonner les équipes techniques et sous-traitants sur le chantier.</li>
              <li>Veiller au respect des normes de sécurité et qualité sur site.</li>
              <li>Rédiger les rapports de chantier et faire remonter les anomalies.</li>
              <li>Participer aux réunions de suivi avec les clients et partenaires.</li>
            </ul>
          </li>
          <li><strong>Profil :</strong>
            <ul>
              <li>Diplôme BTS ou DUT en Génie Civil, BTP ou équivalent.</li>
              <li>Minimum 1 an d’expérience en suivi de chantier.</li>
              <li>Maîtrise des logiciels AutoCAD, MS Project et pack Office.</li>
              <li>Bon sens de l’organisation et capacité à travailler en équipe.</li>
            </ul>
          </li>
          <li><strong>Conditions :</strong>
            <ul>
              <li>Contrat : CDD de 6 à 12 mois avec possibilité de renouvellement.</li>
              <li>Lieu : Yaoundé, déplacements fréquents sur chantier.</li>
              <li>Avantages : véhicule de service, prime de chantier, mutuelle.</li>
            </ul>
          </li>
          <li><strong>Début :</strong> Immédiat</li>
        </ul>
        <div class="read-more">
       
        <a href="#!" onclick="">Postuler!!</a>
      </div>
      </div>
    </div>
  </article>
</div>

<!-- Poste 3 -->
<div class="col-12">
  <article>
    <h2 class="title">
      <a href="#!">Offre d'emploi : Technicien Laboratoire – Qualité</a>
    </h2>
    <div class="meta-top">
      <ul>
        <li><i class="bi bi-building"></i> <a href="#!">LabQualiTech</a></li>
        <li><i class="bi bi-clock"></i> <a href="#!"><time datetime="2025-06-19">19 juin 2025</time></a></li>
        <li><i class="bi bi-geo-alt"></i> <a href="#!">Garoua, Cameroun</a></li>
      </ul>
    </div>
    <div class="content">
      <p>
        LabQualiTech recrute un technicien de laboratoire motivé pour réaliser des analyses physico-chimiques et microbiologiques dans le cadre du contrôle qualité de produits alimentaires et pharmaceutiques.
      </p>
      <div class="read-more">
        <a href="#!" onclick="toggleDetails(this)">Voir plus...</a>
        
      </div>
      <div class="job-details" style="display: none; margin-top: 15px;">
        <ul>
          <li><strong>Missions principales :</strong>
            <ul>
              <li>Réaliser les analyses sur échantillons (eau, sol, aliments, médicaments).</li>
              <li>Utiliser des équipements modernes : spectrophotomètre, chromatographe, incubateurs.</li>
              <li>Assurer la traçabilité des résultats selon les normes ISO/IEC 17025.</li>
              <li>Participer à la rédaction des procédures qualité et rapports d'analyse.</li>
            </ul>
          </li>
          <li><strong>Profil recherché :</strong>
            <ul>
              <li>BTS, DUT ou Licence professionnelle en biologie, chimie ou contrôle qualité.</li>
              <li>Expérience souhaitée en laboratoire de contrôle qualité.</li>
              <li>Connaissance des normes ISO 17025 est un plus.</li>
              <li>Capacité d’analyse, rigueur et sens de l’organisation.</li>
            </ul>
          </li>
          <li><strong>Conditions :</strong>
            <ul>
              <li>Contrat : CDD 6 à 12 mois.</li>
              <li>Lieu : Garoua.</li>
              <li>Avantages : formations, mutuelle, environnement dynamique.</li>
            </ul>
          </li>
          <li><strong>Début :</strong> Dès que possible</li>
        </ul>
        <div class="read-more">
  
        <a href="#!" onclick="">Postuler!!</a>
      </div>
      </div>
    </div>
  </article>
</div>

          </section>

        </div>
      </div>
    </div>
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <a href="{{ route('index') }}" class="logo mb-3">
            <h1 class="sitename">Al<span>uMn</span>i-IUT</h1><span>.</span>
          </a>
          <p>IUT de Ngaoundéré - Université de Ngaoundéré</p>
          <p><strong>Téléphone :</strong> +237 690 000 000</p>
          <p><strong>Email :</strong> IutNdere@gmail.com</p>
          <div class="social-links mt-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-4 footer-links mt-4">
          <ul class="list-unstyled">
            <li><a href="#services">Services</a></li>
            <li><a href="#emploi-posts">Emplois/Stages</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container text-center mt-4">
      <p>&copy; Copyright <strong>AluMni-IUT</strong>. Tous droits réservés.</p>
      <div class="credits">Designed by <a href="#">BerZahka</a></div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('vendor/aos/aos.js') }}"></script>
  <script src="{{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('js/main.js') }}"></script>

</body>

</html>
