-- SQLite
CREATE TABLE personnages (
    id_personnage INT AUTO_INCREMENT PRIMARY KEY,
    nom_personnage VARCHAR(50),
    couleur_personnage VARCHAR(50)
);

CREATE TABLE armes (
    id_arme INT AUTO_INCREMENT PRIMARY KEY,
    nom_arme VARCHAR(50)
);

CREATE TABLE pieces (
    id_piece INT AUTO_INCREMENT PRIMARY KEY,
    nom_piece VARCHAR(50)
);

CREATE TABLE portes (
    id_piece1 INT,
    id_piece2 INT,
    FOREIGN KEY (id_piece1) REFERENCES pieces(id_piece),
    FOREIGN KEY (id_piece2) REFERENCES pieces(id_piece)
);

-- Insertion de quelques données d'exemple
INSERT INTO personnages (nom_personnage, couleur_personnage) VALUES ('Chevalier', 'Rouge');
INSERT INTO personnages (nom_personnage, couleur_personnage) VALUES ('Mage', 'Bleu');
INSERT INTO personnages (nom_personnage, couleur_personnage) VALUES ('Archer', 'Vert');

INSERT INTO armes (nom_arme) VALUES ('Épée');
INSERT INTO armes (nom_arme) VALUES ('Baguette');
INSERT INTO armes (nom_arme) VALUES ('Arc');

INSERT INTO pieces (nom_piece) VALUES ('Hall');
INSERT INTO pieces (nom_piece) VALUES ('Salle de Trésor');
INSERT INTO pieces (nom_piece) VALUES ('Donjon');
