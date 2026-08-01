<!DOCTYPE html>
<html>
<head><title>Future Value Calculator</title></head>
<body>

<h2>Future Value Calculator</h2>

<form method="post" action="exercise2_futurevalue.php">
    Investment Amount ($): <input type="number" step="0.01" name="amount" required><br><br>
    Yearly Interest Rate (%): <input type="number" step="0.01" name="rate" required><br><br>
    Number of Years: <input type="number" name="years" required><br><br>
    <button type="submit">Calculate</button>
</form>

<?php
function calculateFutureValue($principal, $rate, $years) {
    $yearlyValues = [];
    $value = $principal;
    $rateDecimal = $rate / 100;

    for ($i = 1; $i <= $years; $i++) {
        $value = $value * (1 + $rateDecimal);
        $yearlyValues[$i] = $value;
    }

    return $yearlyValues;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $rate = $_POST["rate"];
    $years = $_POST["years"];

    if ($amount > 0 && $rate >= 0 && $years > 0) {
        $yearlyValues = calculateFutureValue($amount, $rate, $years);

        echo "<h3>Year-by-Year Growth</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Year</th><th>Value</th></tr>";
        foreach ($yearlyValues as $year => $value) {
            echo "<tr><td>" . $year . "</td><td>$" . number_format($value, 2) . "</td></tr>";
        }
        echo "</table>";

        $finalValue = end($yearlyValues);
        echo "<p>After " . $years . " years, an investment of $" . number_format($amount, 2) . " will be worth $" . number_format($finalValue, 2) . ".</p>";
    } else {
        echo "<p>Please enter valid positive numbers for all fields.</p>";
    }
}
?>

</body>
</html>