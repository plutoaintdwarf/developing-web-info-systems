<?php
// Exercise 2: Mathematical properties of a number

$number = 67;

$square = $number ** 2;
$cube = $number ** 3;
$squareRoot = sqrt($number);
$absoluteValue = abs(-$number);

echo "The number is: " . $number . "<br>";
echo "The square of the number is: " . $square . "<br>";
echo "The cube of the number is: " . $cube . "<br>";
echo "The square root of the number is: " . number_format($squareRoot, 4) . "<br>";
echo "The absolute value of -" . $number . " is: " . $absoluteValue . "<br>";
?>