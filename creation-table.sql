DROP TABLE IF EXISTS COLIS;
DROP TABLE IF EXISTS UTILISATEURS;

CREATE TABLE UTILISATEURS (
    utilisateur_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    motdepasse VARCHAR(255) NOT NULL
);

CREATE TABLE COLIS (
    coli_id INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(50) NOT NULL,
    expediteur VARCHAR(150) NOT NULL,
    destinataire VARCHAR(150) NOT NULL,
    telephone VARCHAR(20) NOT NULL,
    ville_depart VARCHAR(100) NOT NULL,
    ville_destination VARCHAR(100) NOT NULL,
    statut ENUM('en_attente', 'expedie', 'en_transit', 'livre', 'annule')
           DEFAULT 'en_attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP (),
    date_modification DATETIME DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE (numero)
);