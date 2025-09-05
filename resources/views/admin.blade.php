<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tableau de bord Admin</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ url('css/css.ad.css') }}" />
</head>
<body>
    <!-- Top Navigation Bar -->
    <nav class="top-nav">
        <div class="logo">
            <h2>ADMIN</h2>
        </div>
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Rechercher..." />
        </div>
        <div class="profile-icon">
            <i class="fas fa-user"></i>
        </div>
    </nav>

    <!-- Main Admin Content -->
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="admin-header">MENU</div>
            <ul class="menu">
                <li>
                    <button class="alumni-btn" data-url="{{ route('index') }}">
                        <span class="alumni-btn-content">
                            <i class="fas fa-home alumni-btn-icon"></i>
                            <span class="alumni-btn-text">Alumni-IUT</span>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="alumni-btn" data-url="{{ route('ListeEtudiant') }}">
                        <span class="alumni-btn-content">
                            <i class="fas fa-user-graduate alumni-btn-icon"></i>
                            <span class="alumni-btn-text">Ancien étudiant</span>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="alumni-btn" data-url="{{ route('ListeEntreprise') }}">
                        <span class="alumni-btn-content">
                            <i class="fas fa-building alumni-btn-icon"></i>
                            <span class="alumni-btn-text">Entreprise</span>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="alumni-btn" data-url="{{ route('profil') }}">
                        <span class="alumni-btn-content">
                            <span class="alumni-btn-text">Profil</span>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="alumni-btn" data-url="{{ route('profilutilisateur') }}">
                        <span class="alumni-btn-content">
                            <i class="fas fa-user-graduate alumni-btn-icon"></i>
                            <span class="alumni-btn-text">Profil utilisateur</span>
                        </span>
                    </button>
                </li>

                <li>
                    <button class="alumni-btn" data-url="">
                        <span class="alumni-btn-content">
                            <i class="fas fa-tasks alumni-btn-icon"></i>
                            <span class="alumni-btn-text">Gestion des projets</span>
                        </span>
                    </button>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="welcome-message">
                <h1>Bienvenue M. <span id="admin-name">{{ Auth::user()->name ?? 'Admin' }}</span></h1>
            </div>

            <!-- Conteneur pour charger dynamiquement le contenu -->
            <div id="dynamic-content" style="margin-top: 20px;">
                <p>Sélectionnez une option dans le menu.</p>
            </div>
        </div>
    </div>

    <script>
        async function loadContent(url) {
            const dynamicContent = document.getElementById('dynamic-content');
            if (!url) {
                dynamicContent.innerHTML = "<p style='color:gray;'>Aucune page définie pour ce bouton.</p>";
                return;
            }
            try {
                dynamicContent.innerHTML = "<p>Chargement...</p>";
                const response = await fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                if (!response.ok) throw new Error(`Erreur ${response.status}`);
                const html = await response.text();
                dynamicContent.innerHTML = html;
            } catch (error) {
                dynamicContent.innerHTML = `<p style="color:red;">Erreur de chargement : ${error.message}</p>`;
                console.error(error);
            }
        }

        document.querySelectorAll('.alumni-btn').forEach(button => {
            button.addEventListener('click', () => {
                const url = button.getAttribute('data-url');
                loadContent(url);
            });
        });
    </script>
</body>
</html>
