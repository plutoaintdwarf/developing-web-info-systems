<?php
// Exercise 4: Switch statement for the day of the week

$day = "Wednesday"; // change this value to test other days

switch ($day) {
    case "Monday":
        echo "Start of the work week";
        break;
    case "Wednesday":
        echo "Midweek already!";
        break;
    case "Friday":
        echo "Weekend is coming";
        break;
    case "Saturday":
    case "Sunday":
        echo "Enjoy the weekend";
        break;
    default:
        echo "Regular weekday";
        break;
}
?>