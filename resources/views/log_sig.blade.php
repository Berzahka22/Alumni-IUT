<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion / Inscription</title>
 <link rel="stylesheet" href="{{ url('css/form.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-box" id="loginForm">
            <h2>Connexion</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit">Se connecter</button>
                <a href="{{ route('admin') }}">admin</a>
            </form>
            <div class="toggle-link">
                <p>Pas encore de compte ? <a onclick="toggleForms()">S'inscrire</a></p>
            </div>
        </div>

        <div class="form-box" id="registerForm" style="display: none;">
            <h2>Inscription</h2>
             
        <form action="{{ route('ancien.ajouter') }}" method="POST" enctype="multipart/form-data">

        @csrf

  
        <div class="form-group">
         
        <input type="text" name="nom" placeholder="Nom Complet" value="{{ old('nom') }}">
        @error('nom')
          <span style="color:red">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group input-group">
         <label for="annee_entree">Date de naissanse </label>
        <input type="date" name="datenaissance" value="{{ old('datenaissance') }}">
         @error('datenaissance')
        <span style="color:red">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
         
         <i class="fa fa-map-marker-alt"></i>
        <input type="text" name="lieunaissance" placeholder="Lieu de Naissance" value="{{ old('lieunaissance') }}">
         @error('lieunaissance')
        <span style="color:red">{{ $message }}</span>
        @enderror
        </div>


        <div class="form-group">
        
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
         @error('email')
        <span style="color:red">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
       
           <i class="fa fa-phone"></i>
        <input type="text" name="telephone" placeholder="Numéro de Téléphone" value="{{ old('telephone') }}">
        @error('telephone')
        <span style="color:red">{{ $message }}</span>
         @enderror
        </div>

    <div class="form-group input-group">
    <label for="annee_entree">Année d'entrée à l'IUT</label>
    <i class="fa fa-graduation-cap"></i>
    <input type="number" id="annee_entree" name="annee_entree" 
           placeholder="Ex: 2023" value="{{ old('annee_entree') }}">
    @error('annee_entree')
        <span class="error-text">{{ $message }}</span>
    @enderror
</div>



<div class="form-group">
    <label for="photo">Photo  </label>
    <i class="fa fa-camera"></i>
    <input type="file" name="photo" id="photo" accept="image/*">
    @error('photo')
        <span style="color:red">{{ $message }}</span>
    @enderror
</div>

         

        <button type="submit">Suivant</button>
      </form>
            <div class="toggle-link">
                <p>Déjà inscrit ? <a onclick="toggleForms()">Se connecter</a></p>
            </div>
        </div>
    </div>

    <script>
        function toggleForms() {
            const login = document.getElementById('loginForm');
            const register = document.getElementById('registerForm');
            login.style.display = (login.style.display === "none") ? "block" : "none";
            register.style.display = (register.style.display === "none") ? "block" : "none";
        }
       
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('#registerForm form');
  
  form.addEventListener('submit', function(event) {
    const errorSpans = form.querySelectorAll('.error-text, .error-message');
    errorSpans.forEach(span => span.remove());

    let isValid = true;

    function showError(input, message) {
      const errorSpan = document.createElement('span');
      errorSpan.className = 'error-message';
      errorSpan.style.color = 'red';
      errorSpan.style.fontSize = '0.9em';
      errorSpan.textContent = message;
      input.parentNode.appendChild(errorSpan);
      isValid = false;
    }

    const nom = form.nom;
    const datenaissance = form.datenaissance;
    const lieunaissance = form.lieunaissance;
    const email = form.email;
    const telephone = form.telephone;
    const annee_entree = form.annee_entree;
    const photo = form.photo;

    if (!nom.value.trim()) {
      showError(nom, "Le nom complet est obligatoire.");
    } else if (nom.value.trim().length < 3) {
      showError(nom, "Le nom doit contenir au moins 3 caractères.");
    }

    // Validation date naissance avec âge min 15 ans
    if (!datenaissance.value) {
      showError(datenaissance, "La date de naissance est obligatoire.");
    } else {
      const birthDate = new Date(datenaissance.value);
      const today = new Date();

      let age = today.getFullYear() - birthDate.getFullYear();
      const m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }

      if (birthDate >= today) {
        showError(datenaissance, "La date de naissance doit être dans le passé.");
      } else if (age < 15) {
        showError(datenaissance, "L'âge minimum requis est de 15 ans.");
      }
    }

    if (!lieunaissance.value.trim()) {
      showError(lieunaissance, "Le lieu de naissance est obligatoire.");
    }

    if (!email.value.trim()) {
      showError(email, "L'email est obligatoire.");
    } else {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value.trim())) {
        showError(email, "Format d'email invalide.");
      }
    }

    if (!telephone.value.trim()) {
      showError(telephone, "Le numéro de téléphone est obligatoire.");
    } else {
      const phoneRegex = /^\d{8,15}$/;
      if (!phoneRegex.test(telephone.value.trim())) {
        showError(telephone, "Le numéro de téléphone doit contenir entre 8 et 15 chiffres sans espaces.");
      }
    }

    if (!annee_entree.value.trim()) {
      showError(annee_entree, "L'année d'entrée à l'IUT est obligatoire.");
    } else {
      const year = parseInt(annee_entree.value, 10);
      const currentYear = new Date().getFullYear();
      if (isNaN(year) || year < 1950 || year > currentYear) {
        showError(annee_entree, `Veuillez entrer une année valide entre 1950 et ${currentYear}.`);
      }
    }

    if (photo.files.length > 0) {
      const file = photo.files[0];
      const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
      const maxSizeMB = 2;
      if (!allowedTypes.includes(file.type)) {
        showError(photo, "Format de photo non supporté (jpeg, png, gif, webp uniquement).");
      }
      if (file.size > maxSizeMB * 1024 * 1024) {
        showError(photo, `La taille de la photo ne doit pas dépasser ${maxSizeMB} Mo.`);
      }
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});
 

    </script>
</body>
</html>
