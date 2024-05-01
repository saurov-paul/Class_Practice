<?php
// Temperature conversion functions
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}

// Speed conversion functions
function kmPerHourToMetersPerSecond($kmPerHour) {
    return $kmPerHour * 1000 / 3600;
}

function kmPerHourToKnots($kmPerHour) {
    return $kmPerHour * 0.53996;
}

// Mass conversion functions
function kilogramsToGrams($kilograms) {
    return $kilograms * 1000;
}

function gramsToKilograms($grams) {
    return $grams / 1000;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['temperature'])) {
        // Temperature conversions
        $celsius = $_POST['celsius'];
        $fahrenheit = celsiusToFahrenheit($celsius);
        $kelvin = celsiusToKelvin($celsius);
    } elseif (isset($_POST['speed'])) {
        // Speed conversions
        $kmph = $_POST['kmph'];
        $metersPerSecond = kmPerHourToMetersPerSecond($kmph);
        $knots = kmPerHourToKnots($kmph);
    } elseif (isset($_POST['mass'])) {
        // Mass conversions
        $kilograms = $_POST['kg'];
        $grams = kilogramsToGrams($kilograms);
        $kilogramsFromGrams = gramsToKilograms($grams);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Measurement Conversion</title>
    
</head>
<body>

<div class="container">
    <h2>Measurement Conversion</h2>
    <form method="post">
        <h3>Temperature</h3>
        <input type="text" id="celsius" name="celsius" placeholder="Enter temperature in Celsius">
        <input type="submit" name="temperature" value="Convert Temperature">

        <h3>Speed</h3>
        <input type="text" id="kmph" name="kmph" placeholder="Enter speed in kilometers per hour">
        <input type="submit" name="speed" value="Convert Speed">

        <h3>Mass</h3>
        <input type="text" id="kg" name="kg" placeholder="Enter mass in kilograms">
        <input type="submit" name="mass" value="Convert Mass">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="result">
        <h3>Conversion Result</h3>
        <?php if (isset($fahrenheit)): ?>
            <p><strong>Temperature:</strong></p>
            <p>Fahrenheit: <?php echo $fahrenheit; ?>°F</p>
            <p>Kelvin: <?php echo $kelvin; ?>K</p>
        <?php elseif (isset($metersPerSecond)): ?>
            <p><strong>Speed:</strong></p>
            <p>Meters per second: <?php echo $metersPerSecond; ?> m/s</p>
            <p>Knots: <?php echo $knots; ?> knots</p>
        <?php elseif (isset($grams)): ?>
            <p><strong>Mass:</strong></p>
            <p>Grams: <?php echo $grams; ?> g</p>
            <p>Kilograms from grams: <?php echo $kilogramsFromGrams; ?> kg</p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>


<footer>
        <p> &copy; 2024 Mr Paul. All Rights Reserved.</p>
    </footer>
</body>
</html>
