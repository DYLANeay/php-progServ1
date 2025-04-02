<?php


//#1
$fruits = ["Pomme", "Poire", "Cerise", "Banane", "Fraise"];
print_r($fruits);

//#2
$person = [
    "firstName" => "John",
    "secondName" => "Doe",
    "age" => 30,
    "city" => "New York",
];

echo "<br>";
print_r($person);
echo "<br>";
print($person["age"] . "<br>");

//#3
$ticTacToe = [
    ["X", "O", "X"],
    ["O", "X", "O"],
    ["X", "O", "X"],
];
print_r($ticTacToe);
echo "<br>";
echo $ticTacToe[1][2];


//#4
$peoples = [
    ["name" => "John Doe", "age" => 30, "city" => "New York"],
    ["name" => "Jane Doe", "age" => 25, "city" => "Los Angeles"],
    ["name" => "Alice Smith", "age" => 35, "city" => "Chicago"],
];

echo "<br>";
print_r($peoples);
echo "<br>";
print($peoples[count($peoples) - 1]["name"]);


//#5
$fruitsAndVegetables = [
    "fruits" => ["Pomme", "Poire"],
    "vegetables" => ["Carotte", "Tomate"],
];
echo "<br>";
print_r($fruitsAndVegetables);
echo "<br>";
print_r($fruitsAndVegetables["vegetables"]);

//#6
$people = [
    "johnDoe" => [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ],
    "janeDoe" => [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    "aliceSmith" => [
        "name" => "Alice Smith",
        "age" => 35,
        "city" => "Chicago"
    ]
];
echo "<br>";
print_r($people);
echo "<br>";
echo $people["janeDoe"]["name"];

//#7
echo "<br>";

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

//#8
for ($i = 0; $i < count($ticTacToe); $i++) {
    for ($j = 0; $j < count($ticTacToe[$i]); $j++) {
        print($ticTacToe[$i][$j]);
    }
    echo "<br>";
}

//#9
foreach ($peoples as $people) {
    echo $people["name"] . ", " . $people["age"] . ", " . $people["city"] . "<br>";
}


//#10
//rien de très compliqué !

//#11
$start = 1;
$end = 10;

function shuffleRange($start, $end) {
    //créer un tableau à l'aide de range (qui renvoie un tableau)
    $tab = range($start, $end); // crée un tableau de 1 à 10 

    //shuffle
    shuffle($tab);

    return $tab;
}

print_r(shuffleRange($start, $end));

echo "<br>";

//#12
//ici attention aux valeurs de retour des fonctions !
sort($fruits, SORT_STRING);
$sortedFruits = $fruits;
print_r($sortedFruits);


//#13
$people = [
    [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ],
    [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    [
        "name" => "Alice Smith",
        "age" => 35,
        "city" => "Chicago"
    ]
];

function compareAge($a, $b) {
    if ($a["age"] > $b["age"]) { //$a correspond à une personne, $b correspond à une autre personne 
        return 1;
    } else if ($a["age"] < $b["age"]) {
        return -1;
    } else {
        return 0;
    }
}
//usort s'attend à DEUX et seulement DEUX arguments, ce qui fait que ça marche ! 
usort($people, "compareAge");

print_r($people);

//#14
