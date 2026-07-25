<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 5 - City Form</title>
</head>
<body>

<h2>Enter a City Name</h2>

<form method="post" action="exercise5_form.php">
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = htmlspecialchars($_POST["city"]);
    echo "<p>" . $city . " is a beautiful city!</p>";
}
?>

</body>
</html>