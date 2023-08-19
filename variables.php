<!-- Variables in PHP are used to store data values. They start with a dollar sign ($) followed by a name. Variable names are case-sensitive and can consist of letters, numbers, and underscores. -->
<?php

$firstName = "Moumita Rashid ";
$lastName = "Bushra";
$fullName = $firstName . " " . $lastName;
$age= 10;

$number1 = 100;
$number2 = 500;

$sum = $number1 + $number2;
$result = $number1 * $number2;

$language = "PHP";
$version = 7;

$message = "I am using $language version $version.";

$globalVar = "I'm a global variable";

function demoFunction() {
    $localVar = "I'm a local variable";
    echo $localVar;  // This works
    echo $globalVar; // This won't work
}

demoFunction();

echo $globalVar; // This works

echo $message;

echo "<br>Sum: $sum<br>";
echo "Result: $result <br>";

echo "Hello, $fullName!<br>";
echo "age, $age "



?>