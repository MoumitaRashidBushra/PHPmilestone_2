<?php
//Constants are identifiers for values that cannot be changed once they are defined. They are defined using the define() function and are case-sensitive by default.
define("PI", 3.14159);
define("MAX_USERS", 100);

class MathOperations {
    const PI = 3.14159;
    
    public static function calculateCircleArea($radius) {
        return self::PI * $radius * $radius;
    }
}

$radius = 5;
$area = MathOperations::calculateCircleArea($radius);

echo "Area of the circle with radius $radius: $area";


?>