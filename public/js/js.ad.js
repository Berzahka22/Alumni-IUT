document.addEventListener('DOMContentLoaded', function() {
    // Récupération du nom de l'admin depuis l'attribut data si nécessaire
    const adminName = document.getElementById('admin-name').textContent;
    console.log('Admin connecté:', adminName);
    
    // Gestion des clics sur le menu
    const menuItems = document.querySelectorAll('.menu li');
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            menuItems.forEach(i => {
                i.style.backgroundColor = 'transparent';
                i.querySelector('i').style.color = 'white';
            });
            
            this.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            this.querySelector('i').style.color = '#3498db';
            
            // Ici vous pourriez utiliser Axios pour charger du contenu dynamique
            console.log('Menu cliqué:', this.textContent.trim());
        });
    });
    
    // Gestion du clic sur le profil
    document.querySelector('.profile-icon').addEventListener('click', function() {
        // Redirection vers le profil ou affichage d'un menu déroulant
        window.location.href = "{{ route('admin.profile') }}";
    });
    
    // Gestion de la recherche
    const searchBar = document.querySelector('.search-bar');
    searchBar.addEventListener('keyup', function(e) {
        if (e.key === 'Enter') {
            // Implémentez la logique de recherche ici
            console.log('Recherche:', this.value);
        }
    });
});
function openTab(tabId) {
    // Masquer tous les contenus
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.style.display = 'none';
    });
    
    // Désactiver tous les boutons
    document.querySelectorAll('.tab-button').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Afficher le contenu sélectionné
    document.getElementById(tabId).style.display = 'block';
    
    // Activer le bouton cliqué
    event.currentTarget.classList.add('active');
    
    // Si c'est l'onglet Alumni, recharger l'iframe
    if(tabId === 'alumni') {
        document.querySelector('#alumni iframe').src = 'http://localhost:8002'; 
    }
}