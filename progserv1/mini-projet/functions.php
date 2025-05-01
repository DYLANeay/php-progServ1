<?php

require "database.php";

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On définit la requête SQL pour récupérer tous les animaux
    $sql = "SELECT * FROM pets";

    // On récupère tous les animaux
    $pets = $pdo->query($sql);

    // On transforme le résultat en tableau associatif
    $pets = $pets->fetchAll();

    // On transforme la chaîne `personalities` en tableau pour chaque animal
    foreach ($pets as &$pet) { // On utilise `&` pour modifier l'élément dans le tableau `$pets`
        if (!empty($pet['personalities'])) {
            $pet['personalities'] = explode(',', $pet['personalities']);
        }
    }

    // On retourne tous les animaux
    return $pets;
}

function getPet($id) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On définit la requête SQL pour récupérer un animal
    $sql = "SELECT * FROM pets WHERE id = '$id'";

    // On récupère l'animal spécifique
    $pet = $pdo->query($sql);

    // On transforme le résultat en tableau associatif
    $pet = $pet->fetch();

    // On transforme la chaîne `personalities` en tableau si elle existe
    if ($pet && !empty($pet['personalities'])) {
        $pet['personalities'] = explode(',', $pet['personalities']);
    }

    // On retourne l'animal
    return $pet;
}


function addPet(
    $name,
    $species,
    $nickname,
    $sex,
    $age,
    $color,
    $personalities,
    $size,
    $notes
) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On transforme le tableau `$personalities` en chaîne de caractères avec `implode`
    $personalitiesAsString = implode(',', $personalities);

    // On définit la requête SQL pour ajouter un animal
    $sql = "INSERT INTO pets (
        name,
        species,
        nickname,
        sex,
        age,
        color,
        personalities,
        size,
        notes
    ) VALUES (
        '$name',
        '$species',
        '$nickname',
        '$sex',
        $age,
        '$color',
        '$personalitiesAsString',
        $size,
        '$notes'
    )";

    // On exécute la requête SQL pour ajouter un animal
    $pdo->exec($sql);

    // On récupère l'identifiant de l'animal ajouté
    $petId = $pdo->lastInsertId();

    // On retourne l'identifiant de l'animal ajouté.
    return $petId;
}

function updatePet($name, $age) {
    global $pets;

    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le retourne.
        $pet = $pets[$name];
        $pet["age"] = $age;
        $pets[$name] = $pet;
        return $pet;
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}


function removePet($id) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On définit la requête SQL pour supprimer un animal
    $sql = "DELETE FROM pets WHERE id = '$id'";

    // On exécute la requête SQL pour supprimer un animal
    return $pdo->exec($sql);
}
