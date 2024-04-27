<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>
</head>

<body>

<h1 id="main_title">Calculator</h1>


<div class="calculator">
        <h1>Simple Calculator</h1>
        <form method="post">
            <input type="text" name="num1" placeholder="Enter number 1" required><br>
            <input type="text" name="num2" placeholder="Enter number 2" required><br>
            <input type="submit" name="add" value="+">
            <input type="submit" name="subtract" value="-">
            <input type="submit" name="multiply" value="*">
            <input type="submit" name="divide" value="/">
        </form>
        <?php
        if (isset($_POST["add"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 + $num2;
            echo "<h2>Total = $result </h2>";
        }
        if (isset($_POST["subtract"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 - $num2;
            echo "<h2>Total = $result </h2>";
        }
        if (isset($_POST["multiply"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 * $num2;
            echo "<h2>Total = $result </h2>";
        }
        if (isset($_POST["divide"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 / $num2;
            echo "<h2>Total = $result </h2>";
        }

        ?>
    </div>


<footer id="footer">
    <p>&copy; 2024 Mr Paul. All Rights Reserved.</p>
</footer>
</body>

</html>