<?php
// Exercise 3: Check the temperature and print a message

$temperature = 25; // change this value to test other conditions

if ($temperature > 30) {
    echo "It is a hot day.";
} elseif ($temperature >= 20 && $temperature <= 30) {
    echo "The weather is pleasant.";
} elseif ($temperature >= 10 && $temperature <= 19) {
    echo "It is a cool day.";
} else {
    echo "It is cold outside.";
}
?>