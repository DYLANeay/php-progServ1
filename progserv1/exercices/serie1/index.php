<?php

//#1
echo "Hello, World!";

//donc simplement Hello, World!

//#2
$name = "<br>Dylan";
echo $name;

//#3
$age = 22;

if ($age > 18) {
    echo "<br>You are over 18.";
} else {
    echo "<br>You are under 18";
}

//#4
const PI = 3.14;
echo "<br>" . PI;

//#5
$number = 10;
$double = $number * 2;

//#6
// les guillemets simple ne permettent pas d'interpréter les variables 
//tandis que les guillemets double si

//#7
$text = "PHP";
echo "<br>J'apprends $text dans ce nouveau cours";

//#8
$hasABachelorDegree = false;
$hasFinishedHeigVd = false;

if ($hasABachelorDegree == true && $hasFinishedHeigVd == true) {
    echo "<br>You have finished the HEIG-VD, congratulations!";
} else if ($hasABachelorDegree == true || $hasFinishedHeigVd == true) {
    echo "<br>You have another Bachelor's degree.";
} else {
    echo "<br>You are still a student.";
}

//#9
//le nav web envoie une requête au serveur, qui envoie la requête àl'interprêteur PHP, et repars à l'inverse

//#10
$day = "Grr";

switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "<br>Weekday";
        break;
    case "Saturday":
    case "Sunday":
        echo "<br>Weekend";
        break;
    default:
        echo "<br>Unknown day";
}

//#11 
$temperature = 30;

if ($temperature >= 30) {
    echo "<br>it's hot innit";
} else if ($temperature >= 15 && $temperature <= 20) {
    echo "<br>it's cool";
} else {
    echo "<br>it's cold";
}

//#12 
$grade = 5;
switch ($grade) {
    case 1:
        echo "<br> horrible";
    case 2:
        echo "<br> bad";
    case 3:
        echo "<br> o okay";
    case 4:
        echo "<br> decent";
    case 5:
        echo "<br> great";
    case 6:
        echo "<br> fabulous";
    default:
        echo "<br> tf is this grade";
}

//#13
//une structure de contrôle conditionellle est un paramètre de filtrage qui permet d'avancer ou de s'arrêter dépendamment d'un cas 
//exemple : if else, switch,  ...

//#14
const USERNAME = "admin";
const PASSWORD = "1234";

if (USERNAME == "admin" && PASSWORD == "1234") {
    echo "<br>You are logged in";
} else {
    echo "<br>Login failed";
}

//#15
$number = 9;
if ($number % 3 == 0) {
    echo "<br>multiple of 3";
} else {
    echo "<br>not a multiplie of 3";
}

//#16
$number = 15;
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "<br>Divisible by 3 and 5";
} else if ($number % 3 == 0) {
    echo "<br>Divisible by 3";
} else if ($number % 5 == 0) {
    echo "<br>Divisible by 5";
} else {
    echo "<br>Not divisible by 3 or 5";
}

//#17
$stRochStudent = true;
$comemStudent = true;
$cheseauxStudent = true;

if ($stRochStudent && $comemStudent || $cheseauxStudent) {
    echo "<br>You are an engineering student";
} else {
    echo "<br>You are not an engineering student";
}

//#18 (en commentaire car duplication, mais même chose que le #14)
// const USERNAME = "admin";
// const PASSWORD = "1234";
// if (USERNAME == "admin" && PASSWORD == "1234") {
//     echo "<br>You are logged in";
// } else {
//     echo "<br>Login failed";
// }

//#19 (commentaire car déjà fait au #14)
// const USERNAME = "admin";
// const PASSWORD = "1234";

// if (USERNAME == "admin" && PASSWORD == "1234") {
//     echo "<br>You are logged in";
// } else {
//     echo "<br>Login failed";
// }

//#20 
//ils permettent de lancer un serveur local, ce qui a l'avantage de connecter avec un db sur un ordi local