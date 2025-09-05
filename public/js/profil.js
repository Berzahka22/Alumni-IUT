document.addEventListener('DOMContentLoaded', function() {
            // Gestion de l'upload de logo
            const logoUpload = document.getElementById('logo-upload');
            const uploadBtn = document.getElementById('upload-btn');
            
            if (logoUpload) {
                // Déclencher l'upload quand on clique sur le bouton
                uploadBtn.addEventListener('click', function() {
                    logoUpload.click();
                });
                
                // Gestion du changement de fichier
                logoUpload.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        // Vérification du type de fichier
                        if (!file.type.match('image.*')) {
                            alert('Veuillez sélectionner une image valide (JPEG, PNG)');
                            return;
                        }

                        // Vérification de la taille
                        if (file.size > 2 * 1024 * 1024) { // 2MB
                            alert('L\'image ne doit pas dépasser 2MB');
                            return;
                        }

                        // Prévisualisation de l'image
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            document.getElementById('company-logo').src = event.target.result;
                            alert('Logo mis à jour avec succès! (simulation)');
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }

            // Animation des cartes au survol
            const infoCards = document.querySelectorAll('.info-card');
            infoCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                });
            });

            // Simulation de modification
            document.querySelector('.edit-link').addEventListener('click', function(e) {
                e.preventDefault();
                alert('Fonctionnalité de modification (simulation)');
            });
        });