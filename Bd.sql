-- Création de la base de données
CREATE DATABASE IF NOT EXISTS alumni_iut CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE alumni_iut;

-- Table Utilisateurs (pour l'authentification)
CREATE TABLE Ancien_etudiant(
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    dateNais DATE NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telephone VARCHAR(20) NULL,
    anneeEnt INT (4)NOT NULL,
    piece_identite VARCHAR(255) NULL,
   
) ENGINE=InnoDB;

-- Table Entreprises (infos complémentaires pour les utilisateurs entreprises)
CREATE TABLE entreprises (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id BIGINT UNSIGNED NOT NULL,
    nom_entreprise VARCHAR(100) NOT NULL,
    secteur VARCHAR(50) NOT NULL,
    adresse TEXT NULL,
    site_web VARCHAR(255) NULL,
    description TEXT NULL,
    logo VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table Offres d'Emploi
CREATE TABLE offres_emploi (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    entreprise_id BIGINT UNSIGNED NOT NULL,
    titre VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    competences_requises TEXT NOT NULL,
    localisation VARCHAR(100) NOT NULL,
    salaire VARCHAR(50) NULL,
    type_contrat ENUM('cdi', 'cdd', 'stage', 'alternance') DEFAULT 'cdi',
    teletravail BOOLEAN DEFAULT FALSE,
    lien_candidature VARCHAR(255) NULL,
    date_expiration DATE NULL,
    est_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (entreprise_id) REFERENCES entreprises(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table Candidatures
CREATE TABLE candidatures (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    offre_id BIGINT UNSIGNED NOT NULL,
    utilisateur_id BIGINT UNSIGNED NOT NULL,
    message_candidature TEXT NULL,
    chemin_cv VARCHAR(255) NULL,
    statut ENUM('en_attente', 'en_revue', 'acceptee', 'rejetee') DEFAULT 'en_attente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (offre_id) REFERENCES offres_emploi(id) ON DELETE CASCADE,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table Événements (pour les événements alumni)
CREATE TABLE evenements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    lieu VARCHAR(100) NOT NULL,
    date_evenement DATETIME NOT NULL,
    date_fin DATETIME NULL,
    organisateur_id BIGINT UNSIGNED NOT NULL,
    chemin_image VARCHAR(255) NULL,
    est_virtuel BOOLEAN DEFAULT FALSE,
    lien_inscription VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (organisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table Inscriptions aux Événements
CREATE TABLE inscriptions_evenements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    evenement_id BIGINT UNSIGNED NOT NULL,
    utilisateur_id BIGINT UNSIGNED NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut_presence ENUM('inscrit', 'present', 'annule') DEFAULT 'inscrit',
    FOREIGN KEY (evenement_id) REFERENCES evenements(id) ON DELETE CASCADE,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table Jetons de Réinitialisation de Mot de Passe
CREATE TABLE jetons_reinitialisation_mdp (
    email VARCHAR(100) NOT NULL,
    jeton VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL,
    PRIMARY KEY (email)
) ENGINE=InnoDB;

-- Table Sessions
CREATE TABLE sessions (
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    utilisateur_id BIGINT UNSIGNED NULL,
    adresse_ip VARCHAR(45) NULL,
    user_agent TEXT NULL,
    payload TEXT NOT NULL,
    last_activity INT NOT NULL,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Utilisateur Admin Initial
INSERT INTO utilisateurs (prenom, nom, email, mot_de_passe, role) VALUES
('Admin', 'Systeme', 'admin@alumni-iut.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');