<?php
// Exercise 1: Student names and marks using an associative array

$students = [
    "John" => 75,
    "Sarah" => 42,
    "Alex" => 88
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Student</th><th>Mark</th><th>Result</th></tr>";

foreach ($students as $name => $mark) {
    $result = ($mark >= 50) ? "Pass" : "Fail";
    echo "<tr>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $mark . "</td>";
    echo "<td>" . $result . "</td>";
    echo "</tr>";
}

echo "</table>";
?>