# Cluedo

## Description
Cluedo est un jeu où les joueurs enquêtent pour découvrir qui a commis un meurtre, avec quelle arme, et dans quelle pièce du manoir. Ce projet est une version web du jeu Cluedo.

## Installation
1. Clonez le dépôt sur votre machine locale :
    ```bash
    git clone https://github.com/Zainabe10/cluedo.git
    ```
2. Ouvrez le dossier du projet :
    ```bash
    cd cluedo
    ```
3. Lancez le serveur PHP :
    ```bash
    php -S 127.0.0.1:8080
    ```
4. Ouvrez votre navigateur et accédez à l'adresse suivante pour commencer à jouer :
    ```
    http://127.0.0.1:8080
    ```

## Manuel d'utilisation

### Démarrage d'une nouvelle partie
1. Ouvrez le fichier `index.html` dans votre navigateur.
2. Cliquez sur le bouton "Nouvelle Partie" pour commencer une nouvelle partie.
3. Vous serez redirigé vers la page de sélection du personnage.

### Sélection du personnage
1. Sur la page de sélection du personnage, choisissez un personnage dans la liste déroulante.
2. Cliquez sur le bouton "Commencer la partie" pour démarrer le jeu.
3. Vous serez redirigé vers le Hall.

### Navigation dans le manoir
1. Dans chaque pièce, vous verrez des boutons de navigation pour les pièces adjacentes.
2. Cliquez sur un bouton pour vous déplacer vers une autre pièce.
3. Les pièces visitées seront enregistrées.

### Formulation d'une hypothèse
1. Dans n'importe quelle pièce, vous pouvez formuler une hypothèse en sélectionnant :
    - Un personnage suspect
    - Une arme possible
    - La pièce dans laquelle vous pensez que le crime a eu lieu
2. Cliquez sur le bouton "Formuler l'hypothèse" pour soumettre votre hypothèse.
3. Le jeu vérifiera si l'hypothèse est correcte :
    - Si l'hypothèse est correcte, vous gagnez la partie et serez redirigé vers la page de fin.
    - Si l'hypothèse est incorrecte, un message vous indiquera aléatoirement l’un des éléments proposés et incorrect.

### Fin de la partie
1. Si vous gagnez la partie, une page de fin s'affichera avec le récapitulatif de la partie :
    - Combinaison correcte
    - Nombre de pièces visitées
    - Nombre d’hypothèses réalisées
2. Cliquez sur le bouton "Nouvelle Partie" pour recommencer une nouvelle partie.

## Auteur
Zaïnabe MESSAOUDI