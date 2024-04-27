<?php
if (isset($_POST["submit"])) {
    echo "yes, We recevied data";
    $user = $_POST["username"];
    $pass = $_POST["password"];

    echo $user . "" . "password";


    if ($user && $pass) {
        echo $user . " " . $pass;
    } else {
        echo "user name password cant not be blanke";
    }
}
$host = "db";

$dbname = "loginapp";
$dbuser = "root";
$dbpass = "lionPass";
// check the SQL connection status
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection fald:" . $conn->connect_error);
} else {
    echo "Connection to mysSQL server successfully!";
}

$query = "INSERT INTO users(username,password)";
$query .= " VALUES ('$user', '$pass')";

// $query = "SELECT * FROM users";
// $result = mysqli_query($conn, $query);

if (!$result) {
    die('Reading db records failed');
}
?>
<?php

while ($row = mysqli_fetch_assoc($result)) {
?>
    <pre>
  <?php
    print_r($row);
    ?>
</pre>
<?php
}

$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query insertation failed');
}





?>

<form action="login.php" method="post">
    <br>
    <label for="username">Username</label>
    <br>
    <input type="text" name="username">
    <br><br>
    <label for=" password">Password</label>
    <br><br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>