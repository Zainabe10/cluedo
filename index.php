




<?php
$servername = "localhost:8000"; // ex: localhost
$username = "root"; // ex: root
$password = "1234"; 
$dbname = "cluedo_db"; // ex: jeu_db

// Connexion à la base de données
$conn = SQLite3_connect($mysql, $servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

echo "Connexion réussie à la base de données !";
?>


	



