<?php

//for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}


// while loop
$count = 0;
while ($count < 3) {
    echo "Count: $count<br>";
    $count++;
}


//foreach loop
//The foreach loop is used specifically for iterating over arrays or other iterable objects.
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
?>

