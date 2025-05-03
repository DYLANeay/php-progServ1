<?php

const DATABASE_FILE = './grades.db';

$pdo = new PDO("sqlite:" . DATABASE_FILE);

$sql = "CREATE TABLE IF NOT EXISTS courses(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    acronym TEXT,
    grade INTEGER NOT NULL,
);";

$pdo->exec($sql);

function addGrade($name, $acronym, $grade) {
    global $pdo;

    // On définit la requête SQL pour ajouter une note
    $sql = "INSERT INTO courses (
        name,
        acronym,
        grade
    ) VALUES (
        '$name',
        '$acronym',
        $grade
    )";

    $pdo->exec($sql);

    $courseId = $pdo->lastInsertId();

    return $courseId;
}

function getGrade($id) {

    global $pdo;
    $course = $pdo->query($id);
    $course = $course->fetch();

    return $course;
}



$analysMarId = addGrade('Analyse de marché', 4.5, 'AnalysMar');
$comVisuelId = addGrade('Communication visuelle et sémiologie graphique', 4.8, 'ComVisuel');
$ecrireWebId = addGrade('Ecriture pour le digital', 4.2, 'EcrireWeb');
$baseProg2Id = addGrade('Bases de la programmation 2', 4.9, 'BaseProg2');
$evolMétMédId = addGrade('Evolution et métiers des médias', 4.7, 'EvolMétMéd');
$droit1Id = addGrade('Droit des médias 1', 4.0, 'Droit1');
$introDuraId = addGrade('Introduction à la durabilité', 4.4, 'IntroDura');
$progServ1Id = addGrade('Programmation serveur 1', 5.5, 'ProgServ1');


$analysMar = getGrade($analysMarId);
$unknown = getGrade(9999);

if ($analysMar) {
    echo "<h1>Infos sur le cours</h1>";
    echo "<p>Id : " . $analysMar["id"] . "</p>";
    echo "<p>Id : " . $analysMar["name"] . "</p>";
    echo "<p>Id : " . $analysMar["acronym"] . "</p>";
    echo "<p>Id : " . $analysMar["grade"] . "</p>";
}
if ($unknown) {
    echo "<h1>Infos sur le cours</h1>";
    echo "<p>Id : " . $unknown["id"] . "</p>";
}
