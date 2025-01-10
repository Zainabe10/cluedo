<?php

// Connexion à la base de données SQLite
$bdd_fichier = 'cluedo.db';
$sqlite = new SQLite3($bdd_fichier);

// Récupération des pièces adjacentes
$piece = $_GET['piece'];

$sql = 'SELECT adj.nom_piece ';
$sql .= 'FROM pieces INNER JOIN portes ON portes.id_piece1=pieces.id_piece OR portes.id_piece2=pieces.id_piece ';
$sql .= 'INNER JOIN pieces AS adj ON (portes.id_piece1=adj.id_piece OR portes.id_piece2=adj.id_piece) ';
$sql .= 'WHERE adj.id_piece!=pieces.id_piece AND pieces.nom_piece LIKE :piece';

$requete = $sqlite->prepare($sql);
$requete->bindValue(':piece', $piece, SQLITE3_TEXT);

$result = $requete->execute();

$adjacentRooms = [];
while ($adj = $result->fetchArray(SQLITE3_ASSOC)) {
    $adjacentRooms[] = $adj['nom_piece'];
}

echo json_encode($adjacentRooms);
?>