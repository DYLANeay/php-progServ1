<?php

//#1 
function greet($name) {
    echo "hello $name<br>";
}

greet("Dylan");

//#2 
function square($number) {
    return pow($number, 2);
}

echo square(4);

//#3
function multiply($a, $b) {
    return $a * $b;
}

echo "<br>" . multiply(2, 3);

//#4 
function divide($a1, $b1) {
    return $a1 / $b1;
}

echo "<br>" . divide(6, 3);

//#5
// function absoluteValue($number) {
//     return abs($number);
// }

// echo "<br>" . absoluteValue(-15);

//#6
function maxOfTwo($a2, $b2) {
    if ($a2 > $b2) {
        return $a2;
    } else {
        return $b2;
    }
}

echo "<br>" . maxOfTwo(12, 8);

//#7
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

if (isEven(12) == true) {
    echo "<br> Even";
} else {
    echo "<br> Odd";
}

//#8 
function grade($pts, $maxPts) {
    return $avg = ($pts / $maxPts) * 5 + 1;
}

echo "<br>" . grade(47, 66);

//#9
function isPassing($grade) {
    if ($grade >= 4) {
        return true;
    } else {
        return false;
    }
}

if (isPassing(4.50009)) {
    echo "<br>Passing<br>";
} else {
    echo "<br>Failing";
}

//#10
function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0;
}

if (isLeapYear(1900)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2000)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2024)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2025)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

//#11
echo round(4.5606060606061, 1) . "<br>";

//#12
echo ceil(4.5606060606061) . "<br>";

//#13
echo floor(4.5606060606061) . "<br>";

//#14
function absoluteValue($number) {
    return abs($number);
}

echo absoluteValue(-15) . "<br>";

//#15
function power($base, $exponent) {
    return pow($base, $exponent);
}

echo  power(2, 8) . "<br>";

//#16
$hello = "Hello, World !";
echo str_replace("World", "Dylan", $hello) . "<br>";

//#17
$hi = "hi world";
echo str_word_count($hi) . "<br>";

//#18
//je reprends hello de en dessus 
echo str_starts_with($hello, "Hello") . "<br>";
//return 1 donc true, ne retourne rien = false

//#19
//je reprends hello de en dessus 
echo str_repeat($hello, 3) . "<br>";

//#20
//je reprends hello de en dessus 
echo strpos($hello, "d") . "<br>";

//#21
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

function isStringOrInteger($variable) {
    if (is_string($variable)) {
        return "String";
    } elseif (is_int($variable)) {
        return "Integer";
    } elseif (is_float($variable)) {
        return "Float";
    } else {
        return "Unknown";
    }
}

echo isStringOrInteger($variable1) . "<br>";
echo isStringOrInteger($variable2) . "<br>";
echo isStringOrInteger($variable3) . "<br>";
echo isStringOrInteger($variable4) . "<br>";

//#22 
$variable1 = "Hello, world!";
$variable2 = "";
$variable3 = 42;
$variable4 = null;

function isSetAndNotEmpty($variable) {
    if (isset($variable) && !empty($variable)) {
        return "Set and not empty";
    } elseif (isset($variable) && empty($variable)) {
        return "Set and empty";
    } else {
        return "Not set";
    }
}

echo isSetAndNotEmpty($variable1) . "<br>";
echo isSetAndNotEmpty($variable2) . "<br>";
echo isSetAndNotEmpty($variable3) . "<br>";
echo isSetAndNotEmpty($variable4) . "<br>";


//#23
$string = "Hello, world!";
$length = 5;

function truncate($string, $length) {
    if (strlen($string) > $length) {
        return substr($string, 0, $length);
    } else {
        return $string;
    }
}

echo truncate($string, $length) . "<br>";

//#24 
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

function debug($variable) {
    return var_dump($variable);
}

echo debug($variable1) . "<br>";
echo debug($variable2) . "<br>";
echo debug($variable3) . "<br>";
echo debug($variable4) . "<br>";

//#25
function isDivisibleBy($y, $z) {
    if ($y % $z == 0) {
        return true;
    } else {
        return false;
    }
}

if (isDivisibleBy(9, 3)) {
    echo "10 is divisible by 3 <br>";
} else {
    echo "10 ain't divisible by 3 <br>";
}

//#26 trop stylé pour le coup
function factorial($number) {
    if ($number == 0) {
        return 1;
    }
    return $number * factorial($number - 1);
}

echo factorial(2) . "<br>";
