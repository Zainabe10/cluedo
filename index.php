<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cluedo - Page d'accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
      <div class="image-container">
          <img src="images/accueil.JPG" alt="Maison hantée" height="100%" width="100%">
          <div class="text">
              <h1>Bienvenue dans Cluedo</h1>
              <p>Résolvez le mystère : Qui ? Où ? Avec quoi ?<br>
              <?php

              echo" Cluedo est un jeu où les joueurs enquêtent pour découvrir qui a commis un meurtre, avec quelle arme, et dans quelle pièce du manoir."
             ?>
              </p>
          </div>
          <div class="buttons">
              <button id="new-game" onclick="startNewGame()">Nouvelle Partie</button>
              <button id="rules" onclick="showRules()">Règles du Jeu</button>
          </div>
      </div>
      <script src="script.js"></script>
  </body>
<script>
function startNewGame() {
  alert("Nouvelle partie commencée !");
  // Ici, redirigez vers la page de jeu ou réinitialisez l'état du jeu
  window.location.href = "game.html"; // Exemple de redirection
}

// Fonction pour afficher les règles du jeu
function showRules() {
  alert("Le but du jeu est de découvrir qui a commis le meurtre, dans quelle pièce et avec quelle arme."),
        ("Explorez les pièces, formulez des hypothèses, et trouvez la bonne combinaison pour gagner !"),
  document.getElementById("rules-section").classList.remove("hidden");
}

// Fonction pour cacher les règles du jeu
function hideRules() {
  document.getElementById("rules-section").classList.add("hidden");

};
</script>

    <h1>Début de la Partie</h1>
    <form action="jeu.php" method="post">
        <label for="personnage">Sélectionnez un personnage:</label>
        <select name="personnage" id="personnage">
            <option value="Chevalier">Chevalier</option>
            <option value="Mage">Mage</option>
            <option value="Archer">Archer</option>
        </select>
    </form>
</body>
</html>

</body>
</body>
</html>




<?php
$servername = "localhost:8000"; // ex: localhost
$username = "root"; // ex: root
$password = "1234"; 
$dbname = "cluedo_db"; // ex: jeu_db

// Connexion à la base de données
$conn = SQLite("$localhost:8000", "$root", "$1234", "$cluedo_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Le joueur sélectionne un personnage
$joueur_personnage = $_POST['personnage'];

// Le jeu sélectionne aléatoirement
$jeu_personnage = $conn->query("SELECT nom_personnage FROM personnages ORDER BY RAND() LIMIT 1")->fetch_assoc()['nom_personnage'];
$jeu_arme = $conn->query("SELECT nom_arme FROM armes ORDER BY RAND() LIMIT 1")->fetch_assoc()['nom_arme'];
$jeu_piece = $conn->query("SELECT nom_piece FROM pieces ORDER BY RAND() LIMIT 1")->fetch_assoc()['nom_piece'];

echo "<h1>Résultats du Jeu</h1>";
echo "<p>Vous commencez dans le Hall avec votre personnage $joueur_personnage.</p>";
echo "<p>Les sélections du jeu sont secrètes!</p>";

// Affichage des sélections aléatoires (Debug)
echo "<p>(Debug Info - Jeu a sélectionné: $jeu_personnage, $jeu_arme, $jeu_piece)</p>";

$conn->close();
?>
