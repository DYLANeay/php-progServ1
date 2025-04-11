<?php
// Gère la soumission du formulaire sur une autre page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $consent = isset($_POST["consent"]) ? true : false;

    echo "Prénom : " . $firstName . "<br>";
    echo "Nom : " . $lastName . "<br>";
    echo "Adresse e-mail : " . $email . "<br>";
    echo "Message : " . $message . "<br>";
    echo "Consentement : " . ($consent ? "Oui" : "Non") . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exercice2.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName">

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName">

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email">

        <br>

        <br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message"></textarea> <!-- attention ici à bien mettre l'élément textarea != attribut -->

        <br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent">
            J'accepte le traitement de mes données personnelles
        </label>

        <br>
        <br>

        <button type="submit">Envoyer</button>
        <button type="reset">Réinitialiser</button>

    </form>
</body>

</html>