<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.calculator {
    background-color: #f5f5f5;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    border: none;
    border-bottom: 2px solid #ccc;
    outline: none;
    margin-bottom: 10px;
    text-align: center;
    margin-left: -10px;

}
input[type="submit"] {
    padding: 15px;
    background-color: tomato;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    align-items: center;
    margin-right: 25px;
    font-size: 2rem;
}
input[type="submit"]:hover {
    background-color: red;
    
}
</style>
    
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
        if(isset($_POST["add"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 + $num2;
            echo "<h1>Total = $result </h1>";
        }
        if(isset($_POST["subtract"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 - $num2;
            echo "<h1>Total = $result </h1>";
        }
        if(isset($_POST["multiply"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 * $num2;
            echo "<h1>Total = $result </h1>";
        }
        if(isset($_POST["divide"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = $num1 / $num2;
            echo "<h1>Total = $result </h1>";
        }
        
        ?>
    </div>
</body>
</html>
