<?php
// Exercise 1: Store prices of two products and calculate totals

$price1 = 67;
$price2 = 76;

$total = $price1 + $price2;
$difference = abs($price1 - $price2);
$product = $price1 * $price2;
$average = $total / 2;

echo "The total cost of the items is \$" . $total . ".<br>";
echo "The price difference between the items is \$" . $difference . ".<br>";
echo "The product of the two prices is \$" . $product . ".<br>";
echo "The average price of the items is \$" . number_format($average, 2) . ".<br>";
?>