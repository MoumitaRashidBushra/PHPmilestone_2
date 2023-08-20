<?php


$color = array("Red", "Black", "Orange", "White");


echo "Second fruit: " . $color[1] . "<br>"; 


$color[] = "Gray"; 

$color[0] = "Sky"; 


$numcolor = count($color);
echo "Number of color: " . $numcolor . "<br>"; 


echo "colors: ";
foreach ($colors as $color) {
    echo $color . ", ";
}





?>