<?php


// Gère la soumission du formulaire sur cette page
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $consent = isset($_POST["consent"]) ? true : false;

    //Validation côté serveur : 
    $errors = [];

    if (empty($firstName)) {
        array_push($errors, "Le prénom est obligatoire.");
    }

    if (strlen($firstName) < 2) {
        array_push($errors, "Le prénom doit faire au minimum 2 caractères");
    }


    if (empty($lastName)) {
        array_push($errors, "Le nom est obligatoire.");
    }

    if (strlen($lastName) < 2) {
        array_push($errors, "Le nom doit faire au minimum 2 caractères");
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Adresse email invalide");
    }

    if (empty($message)) {
        array_push($errors, "Le message est obligatoire");
    }

    if (strlen($message) < 2) {
        array_push($erros, "Le message doit faire minimum 2 caractères");
    }

    if (strlen($message) > 500) {
        array_push($erros, "Le message doit faire maximum 500 caractères");
    }

    if (!$consent) {
        array_push($erros, "Vous devez accepter les conditions");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de contact</title>
</head>

<body>


    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <?php if (empty($errors)) { ?>
            <p style="color: green;">Le formulaire a été soumis avec succès !</p>
        <?php } else { ?>
            <p style="color: red;">Le formulaire contient des erreurs :</p>
            <ul>
                <?php foreach ($errors as $error) { ?>
                    <li><?php echo $error; ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    <?php } ?>

    <h1>Formulaire de contact</h1>
    <form action="exercice3.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName" value="<?php echo isset($firstName) ? $firstName : ''; ?>">

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName" value="<?php echo isset($lastName) ? $lastName : ''; ?>">

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">

        <br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message"><?php echo isset($message) ? $message : ''; ?></textarea>

        <br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent" <?php echo isset($consent) && $consent ? 'checked' : ''; ?>>
            J'accepte le traitement de mes données personnelles
        </label>

        <br>
        <br>

        <button type="submit">Envoyer</button>

        <!-- le reset ne fonctionne que si l'on a pas encore envoyé le formulaire !! sinon il revient à la valeur stockée -->
        <button type="reset">Réinitialiser</button>
    </form>
</body>

</html>