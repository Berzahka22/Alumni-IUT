<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Témoignage Alumni</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-red': '#E63946',
                        'dark-red': '#C1121F',
                        'light-gray': '#F8F9FA'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-animation {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #E63946;
            border-radius: 3px;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(230, 57, 70, 0.3);
        }
    </style>
</head>
<body class="font-sans bg-gray-100 min-h-screen">
    <div class="flex flex-col">
        <!-- Header -->
        <div class="bg-black text-white p-4 shadow-md">
            <div class="container mx-auto flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button onclick="history.back()" class="text-primary-red hover:text-white transition-colors">
                        <i class="fas fa-arrow-left text-xl"></i>
                    </button>
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <i class="fas fa-graduation-cap text-2xl text-primary-red"></i>
                        </div>
                        <div>
                            <h1 class="font-bold">Témoignage Alumni</h1>
                            <p class="text-xs text-gray-300">Partagez votre expérience</p>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <button class="text-gray-300 hover:text-primary-red transition-colors">
                        <i class="fas fa-question-circle"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Contenu principal -->
        <div class="container mx-auto p-4 max-w-2xl">
            <div class="bg-white rounded-xl shadow-md overflow-hidden form-animation">
                <!-- Image bannière -->
                <div class="h-32 bg-gradient-to-r from-black to-dark-red flex items-center justify-center">
                    <i class="fas fa-quote-right text-4xl text-primary-red"></i>
                </div>
                
                <!-- Formulaire -->
                <form id="testimonial-form" class="p-6 space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Votre nom</label>
                        <div class="relative">
                            <input 
                                type="text" 
                                id="name" 
                                required
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent"
                                placeholder="Jean Dupont"
                            >
                            <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <div>
                        <label for="promotion" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <div class="relative">
                            <input 
                                type="email" 
                                id="email" 
                                required
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent"
                                placeholder="2020-2023"
                            >
                             
                        </div>
                    </div>
                    
                    <div>
                        <label for="testimonial" class="block text-sm font-medium text-gray-700 mb-1">Votre témoignage</label>
                        <div class="relative">
                            <textarea 
                                id="testimonial" 
                                rows="5"
                                required
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent"
                                placeholder="Mon expérience à Alumni a été..."
                            ></textarea>
                            <i class="fas fa-comment-dots absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="consent"
                            required
                            class="h-4 w-4 text-primary-red focus:ring-primary-red border-gray-300 rounded"
                        >
                        <label for="consent" class="ml-2 block text-sm text-gray-700">
                            J'autorise la publication de ce témoignage
                        </label>
                    </div>
                    
                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full bg-primary-red text-white py-3 px-4 rounded-lg font-medium transition-all duration-300 btn-submit hover:bg-dark-red"
                        >
                            <i class="fas fa-paper-plane mr-2"></i> Soumettre mon témoignage
                        </button>
                    </div>
                </form>
            </div>
            
             
        </div>
    </div>

    <script>
        // Gestion du formulaire
        document.getElementById('testimonial-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupération des valeurs
            const name = document.getElementById('name').value;
            const promotion = document.getElementById('promotion').value;
            const testimonial = document.getElementById('testimonial').value;
            
            // Ici, vous pourriez ajouter le code pour envoyer les données à votre backend
            console.log('Témoignage soumis:', { name, promotion, testimonial });
            
            // Affichage d'un message de succès
            alert('Merci pour votre témoignage ! Il sera publié après modération.');
            
            // Réinitialisation du formulaire
            this.reset();
        });
        
        // Animation au chargement
        window.onload = function() {
            // Vous pourriez ajouter ici une requête pour charger les témoignages existants
        };
    </script>
</body>
</html>