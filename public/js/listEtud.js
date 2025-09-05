document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour afficher une belle modal de confirmation
    function showConfirmationModal(message, callback) {
        const modal = document.createElement('div');
        modal.style.position = 'fixed';
        modal.style.top = '0';
        modal.style.left = '0';
        modal.style.width = '100%';
        modal.style.height = '100%';x
        modal.style.backgroundColor = 'rgba(0,0,0,0.5)';
        modal.style.display = 'flex';
        modal.style.justifyContent = 'center';
        modal.style.alignItems = 'center';
        modal.style.zIndex = '1000';
        
        const modalContent = document.createElement('div');
        modalContent.style.backgroundColor = 'white';
        modalContent.style.padding = '2rem';
        modalContent.style.borderRadius = '8px';
        modalContent.style.maxWidth = '500px';
        modalContent.style.width = '80%';
        
        modalContent.innerHTML = `
            <h3 style="margin-bottom: 1.5rem; font-size: 1.2rem; color: #333;">${message}</h3>
            <div style="display: flex; justify-content: flex-end; gap: 1rem;">
                <button id="confirmCancel" style="padding: 0.5rem 1rem; background: #f0f0f0; border: none; border-radius: 4px; cursor: pointer;">Annuler</button>
                <button id="confirmOk" style="padding: 0.5rem 1rem; background: var(--primary-color); color: white; border: none; border-radius: 4px; cursor: pointer;">Confirmer</button>
            </div>
        `;
        
        modal.appendChild(modalContent);
        document.body.appendChild(modal);
        
        // Gestion des clics
        modal.querySelector('#confirmOk').addEventListener('click', () => {
            document.body.removeChild(modal);
            callback(true);
        });
        
        modal.querySelector('#confirmCancel').addEventListener('click', () => {
            document.body.removeChild(modal);
            callback(false);
        });
    }

    // Gestion des clics sur les boutons
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const studentName = row.cells[0].textContent;
            const action = this.textContent;
            
            // Animation de feedback immédiate
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
            
            // Message de confirmation différent selon l'action
            const actionMessage = action === 'Valider' 
                ? `Voulez-vous vraiment valider l'étudiant ${studentName} ?` 
                : `Êtes-vous sûr de vouloir refuser l'étudiant ${studentName} ?`;
            
            showConfirmationModal(actionMessage, (confirmed) => {
                if (confirmed) {
                    // Si confirmé
                    const statusCell = row.cells[6];
                    statusCell.innerHTML = action === 'Valider' 
                        ? '<span style="color: var(--success-color); font-weight: 500;">✓ Validé</span>' 
                        : '<span style="color: var(--danger-color); font-weight: 500;">✗ Refusé</span>';
                    
                    // Désactiver les boutons avec animation
                    row.querySelectorAll('.btn').forEach(btn => {
                        btn.style.transition = 'all 0.3s ease';
                        btn.disabled = true;
                        btn.style.opacity = '0.6';
                        btn.style.cursor = 'not-allowed';
                        btn.style.transform = 'scale(0.98)';
                    });
                    
                    // Ajouter un message flash (optionnel)
                    const flashMessage = document.createElement('div');
                    flashMessage.textContent = `Étudiant ${studentName} ${action.toLowerCase()} avec succès`;
                    flashMessage.style.position = 'fixed';
                    flashMessage.style.bottom = '20px';
                    flashMessage.style.right = '20px';
                    flashMessage.style.backgroundColor = action === 'Valider' ? 'var(--success-color)' : 'var(--danger-color)';
                    flashMessage.style.color = 'white';
                    flashMessage.style.padding = '1rem';
                    flashMessage.style.borderRadius = '4px';
                    flashMessage.style.zIndex = '1000';
                    flashMessage.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
                    
                    document.body.appendChild(flashMessage);
                    
                    // Disparaître après 3 secondes
                    setTimeout(() => {
                        flashMessage.style.transition = 'opacity 0.5s ease';
                        flashMessage.style.opacity = '0';
                        setTimeout(() => document.body.removeChild(flashMessage), 500);
                    }, 3000);
                    
                    // Ici vous pourriez ajouter un appel AJAX pour sauvegarder en base de données
                    console.log(`${action} l'étudiant ${studentName}`);
                }
            });
        });
    });
});