<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Entreprise</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ url('css/profil.css') }}" />
</head>
<body>
    <div class="company-profile-container">
        <!-- Section Photo de profil -->
        <div class="profile-header">
            <div class="profile-photo-container">
                @if(isset($entreprise) && $entreprise->piece_identite)
                    <img id="company-logo" src="{{ asset('storage/' . $entreprise->piece_identite) }}" alt="Logo entreprise" class="profile-photo" />
                @else
                    <img id="company-logo" src="https://via.placeholder.com/150" alt="Logo entreprise" class="profile-photo" />
                @endif
                <div class="photo-upload">
                    <input type="file" id="logo-upload" accept="image/*" style="display: none;" />
                    <button type="button" id="upload-btn" class="upload-btn">
                        <i class="fas fa-camera"></i> Modifier
                    </button>
                </div>
            </div>
        </div>

        @if(isset($entreprise))
            <h3>Informations de l'entreprise</h3>
            <p><strong>Nom :</strong> {{ $entreprise->nom_entreprise }}</p>
            <p><strong>Secteur :</strong> {{ $entreprise->secteur }}</p>
            <p><strong>Email :</strong> {{ $entreprise->email }}</p>
            <p><strong>Forme Juridique :</strong> {{ $entreprise->forme_juridique }}</p>
            <p><strong>Site Web :</strong> <a href="{{ $entreprise->site_web }}" target="_blank">{{ $entreprise->site_web }}</a></p>
            <p><strong>Téléphone :</strong> {{ $entreprise->telephone }}</p>

            @if($entreprise->piece_identite)
                <p><strong>Pièce d'identité :</strong></p>
                <img src="{{ asset('storage/'.$entreprise->piece_identite) }}" alt="Pièce Identité" width="200" />
            @endif
        @else
            <p>Aucune entreprise associée pour le moment.</p>
        @endif

        <!-- Autres informations -->
        <div class="company-details">
            <div class="detail-card">
                <h2>Description</h2>
                <p>Notre entreprise est spécialisée dans le développement de solutions innovantes pour nos clients depuis 2010.</p>
            </div>
            
            <div class="detail-card">
                <h2>Contact</h2>
                <p>Email: contact@entreprise.com</p>
                <p>Téléphone: 01 23 45 67 89</p>
                <p>
                    <a href="#" class="edit-link">
                        <i class="fas fa-edit"></i> Modifier les informations
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/profil.js') }}"></script>
</body>
</html>
