<?php
// Connexion à la base de données SQLite
$bdd_fichier = 'cluedo.db';
$sqlite = new SQLite3($bdd_fichier);

// Récupération des personnages
$characters = [];
$result = $sqlite->query('SELECT nom_personnage FROM personnages');
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $characters[] = $row['nom_personnage'];
}

// Récupération des armes
$weapons = [];
$result = $sqlite->query('SELECT nom_arme FROM armes');
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $weapons[] = $row['nom_arme'];
}

// Récupération des pièces
$rooms = [];
$result = $sqlite->query('SELECT nom_piece FROM pieces');
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $rooms[] = $row['nom_piece'];
}

// Fermeture de la connexion
$sqlite->close();

// Retourner les données en JSON
echo json_encode(['characters' => $characters, 'weapons' => $weapons, 'rooms' => $rooms]);
?>