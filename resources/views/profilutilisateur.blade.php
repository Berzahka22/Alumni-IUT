<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Étudiant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg-primary: rgba(15, 23, 42, 0.9);
            --bg-secondary: rgba(30, 41, 59, 0.7);
            --text-primary: white;
            --text-secondary: #e2e8f0;
            --accent-color: #E63946;
            --border-color: rgba(255, 255, 255, 0.1);
        }
        
        .light-mode {
            --bg-primary: rgba(255, 255, 255, 0.9);
            --bg-secondary: rgba(241, 245, 249, 0.9);
            --text-primary: #1e293b;
            --text-secondary: #475569;
            --accent-color: #E63946;
            --border-color: rgba(0, 0, 0, 0.1);
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://source.unsplash.com/random/1920x1080/?university,campus') no-repeat center center fixed;
            background-size: cover;
            color: var(--text-primary);
            transition: all 0.3s ease;
        }

        body.light-mode {
            background: 
                linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),
                url('https://source.unsplash.com/random/1920x1080/?university,campus,day') no-repeat center center fixed;
        }

        .profile-container {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.1);
            min-height: 100vh;
        }

        .light-mode .profile-container {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .profile-content {
            background-color: var(--bg-primary);
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            color: var(--text-primary);
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid rgba(230, 57, 70, 0.8);
            box-shadow: 0 4px 20px rgba(230, 57, 70, 0.4);
        }

        .upload-btn {
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 9999px;
            padding: 0.6rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .upload-btn:hover {
            background-color: #C1121F;
            transform: scale(1.1);
        }

        .info-card {
            background-color: var(--bg-secondary);
            border-radius: 0.75rem;
            padding: 1.25rem;
            transition: all 0.3s;
            border: 1px solid var(--border-color);
            color: var(--text-primary);
        }

        .info-card:hover {
            transform: translateY(-5px);
            background-color: rgba(30, 41, 59, 0.9);
            box-shadow: 0 8px 25px rgba(230, 57, 70, 0.3);
            border-color: var(--accent-color);
        }

        .light-mode .info-card:hover {
            background-color: rgba(226, 232, 240, 0.9);
        }

        .detail-card {
            background-color: var(--bg-secondary);
            border-radius: 0.75rem;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
        }

        .edit-link {
            color: var(--accent-color);
            font-weight: 500;
            transition: all 0.3s;
        }

        .edit-link:hover {
            color: #F8AD9D;
            text-decoration: underline;
        }

        .header {
            background: linear-gradient(to right, rgba(230, 57, 70, 0.9), rgba(193, 18, 31, 0.9));
            backdrop-filter: blur(5px);
        }

        .light-mode .header {
            background: linear-gradient(to right, rgba(230, 57, 70, 0.9), rgba(193, 18, 31, 0.9));
        }

        .icon-red {
            color: var(--accent-color);
        }

        .icon-blue {
            color: #93C5FD;
        }

        .testimonial-card {
            background-color: var(--bg-secondary);
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s;
        }

        .testimonial-card:hover {
            transform: translateX(5px);
            background-color: rgba(30, 41, 59, 0.9);
        }

        .light-mode .testimonial-card:hover {
            background-color: rgba(226, 232, 240, 0.9);
        }

        .mode-toggle {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            z-index: 100;
            transition: all 0.3s;
        }

        .mode-toggle:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <!-- En-tête -->
        <div class="header text-white p-4 flex items-center shadow-lg">
            <a href="{{ route('indexa') }}" class="text-white mr-4 hover:text-gray-200 transition-colors">
                <i class="fas fa-arrow-left text-xl"></i>
            </a>
            <h1 class="text-xl font-bold">Profil Étudiant</h1>
        </div>

        <!-- Contenu principal -->
        <div class="profile-content mx-auto my-8 p-6 max-w-4xl w-full">
            <!-- Section Photo de profil -->
            <div class="profile-header flex flex-col items-center mb-10">
                <div class="relative mb-6 group">
                    <img id="user-avatar" src="https://source.unsplash.com/random/300x300/?portrait" alt="Photo de profil" class="profile-photo">
                    <label for="avatar-upload" class="upload-btn absolute -bottom-2 -right-2">
                        <i class="fas fa-camera"></i>
                        <input type="file" id="avatar-upload" accept="image/*" class="hidden">
                    </label>
                </div>
                
                <h1 class="company-name text-3xl font-bold mb-2" contenteditable="true">Nom de l'étudiant</h1>
                <p class="text-opacity-80" contenteditable="true">Promotion 2022</p>
            </div>

            <!-- Section Informations -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="info-card flex items-center space-x-5">
                    <i class="fas fa-map-marker-alt icon-red text-2xl"></i>
                    <div>
                        <h3 class="font-medium text-opacity-80">Localisation</h3>
                        <p class="mt-1" contenteditable="true">Ndere</p>
                    </div>
                </div>
                
                <div class="info-card flex items-center space-x-5">
                    <i class="fas fa-graduation-cap icon-red text-2xl"></i>
                    <div>
                        <h3 class="font-medium text-opacity-80">Promotion</h3>
                        <p class="mt-1" contenteditable="true">2022</p>
                    </div>
                </div>
                
                <a href="https://chat.whatsapp.com/LDPIfoJtG0n2hK4sPq8iLh" class="info-card flex items-center justify-between p-5 hover:border-red-300 transition-colors col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-5">
                        <i class="fas fa-comment-dots icon-blue text-2xl"></i>
                        <div>
                            <h3 class="font-medium">Chatter</h3>
                            <p class="text-sm text-opacity-60">Discuter avec d'autres étudiants</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right text-opacity-40 text-xl"></i>
                </a>

                <!-- Nouvelle carte pour les témoignages -->
                <a href="{{ route('temoignage') }}" class="info-card flex items-center justify-between p-5 hover:border-red-300 transition-colors col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-5">
                        <i class="fas fa-quote-right icon-red text-2xl"></i>
                        <div>
                            <h3 class="font-medium">Témoignages</h3>
                            <p class="text-sm text-opacity-60">Lire et écrire des témoignages</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right text-opacity-40 text-xl"></i>
                </a>
            </div>

            <!-- Section Témoignage récent (exemple) -->
            <div class="testimonial-card mb-8 p-5 rounded-r-lg">
                <div class="flex items-start space-x-4">
                    <i class="fas fa-quote-left text-opacity-40 mt-1"></i>
                    <div>
                        <h3 class="font-medium mb-2">Mon expérience à l'université</h3>
                        <p class="italic text-opacity-80">
                            "J'ai adoré mon passage à l'université. Les professeurs étaient compétents et les installations modernes.
                            J'ai pu acquérir des compétences précieuses pour ma carrière."
                        </p>
                        <div class="mt-3 flex justify-between items-center">
                            <span class="text-sm text-opacity-60">Posté le 15/06/2023</span>
                            <a href="{{ route('indexa') }}" class="text-sm edit-link">
                                Voir plus <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Description -->
            <div class="detail-card mb-8">
                <h2 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-align-left icon-red mr-3"></i> Description
                </h2>
                <p class="mt-3 leading-relaxed text-opacity-90" contenteditable="true">
                    Étudiant passionné par les technologies web avec une spécialisation en développement front-end. 
                    Expérience dans la création d'interfaces utilisateur réactives et accessibles.
                    <br><br>
                    Particulièrement intéressé par les frameworks modernes comme React et Vue.js.
                </p>
            </div>

            <!-- Section Contact -->
            <div class="detail-card">
                <h2 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-envelope icon-red mr-3"></i> Contact
                </h2>
                <div class="space-y-4 mt-3">
                    <div class="flex items-start">
                        <i class="fas fa-at text-opacity-40 mt-1 mr-4 text-lg"></i>
                        <p contenteditable="true">etudiant@example.com</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-phone text-opacity-40 mt-1 mr-4 text-lg"></i>
                        <p contenteditable="true">01 23 45 67 89</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-opacity-20">
                        <a href="#" class="edit-link inline-flex items-center text-lg">
                            <i class="fas fa-edit mr-2"></i> Modifier les informations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bouton de bascule jour/nuit -->
    <button id="mode-toggle" class="mode-toggle">
        <i class="fas fa-moon" id="mode-icon"></i>
    </button>

    <script>
        // Gestion de l'upload de photo
        document.getElementById('avatar-upload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('user-avatar').src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Animation pour les cartes
        document.querySelectorAll('.info-card, .testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = card.classList.contains('testimonial-card') 
                    ? 'translateX(5px)' 
                    : 'translateY(-5px)';
                card.style.boxShadow = '0 8px 25px rgba(230, 57, 70, 0.3)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
                card.style.boxShadow = '';
            });
        });

        // Effet d'édition
        document.querySelectorAll('[contenteditable="true"]').forEach(el => {
            el.addEventListener('focus', function() {
                this.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
                this.style.borderRadius = '4px';
                this.style.padding = '0.25rem 0.5rem';
                this.style.outline = 'none';
            });
            el.addEventListener('blur', function() {
                this.style.backgroundColor = '';
                this.style.padding = '0';
            });
        });

        // Gestion du mode jour/nuit
        const modeToggle = document.getElementById('mode-toggle');
        const modeIcon = document.getElementById('mode-icon');
        const body = document.body;

        // Vérifier le mode stocké dans localStorage
        if (localStorage.getItem('theme') === 'light') {
            enableLightMode();
        }

        modeToggle.addEventListener('click', () => {
            if (body.classList.contains('light-mode')) {
                disableLightMode();
            } else {
                enableLightMode();
            }
        });

        function enableLightMode() {
            body.classList.add('light-mode');
            modeIcon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'light');
        }

        function disableLightMode() {
            body.classList.remove('light-mode');
            modeIcon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'dark');
        }
    </script>
</body>
</html>