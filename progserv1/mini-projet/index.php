<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);


// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère l'animal nommé Rex
$rex = getPet("Rex");

// Affiche les propriétés de Rex
print_r($rex);
echo "<br>";

// Met à jour l'âge de Rex à 9 ans
$rex = updatePet("Rex", 9);

// Affiche les propriétés de Rex
print_r($rex);
echo "<br>";

// Supprime Tweety... :(
$success = removePet("Tweety");

// Affiche si la suppression a réussi
var_dump($success);
echo "<br>";

// On essaie de récupérer Tweety
$tweety = getPet("Tweety");

// Affiche si Tweety a été trouvé
var_dump($tweety);
echo "<br>";

// Récupère tous les animaux
$pets = getPets();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?php echo $pet['name'] ?></td>
                    <td><?php echo $pet['age'] . " " . ($pet["age"] > 1 ? "ans" : "an"); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>



</html>