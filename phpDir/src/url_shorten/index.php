<?php
$servername = "dbc";
$username = "root";
$password = "lionPass";
$dbname = "Url_shorten"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>URL Shortener</title>

</head>

<body>
    <h1 id="main_title">URL Shortener</h1>
    <div class="container">
        <h2>URL Shortener</h2>
        <form method="post">
            <input type="text" name="long_url" placeholder="Enter your long URL">
            <input type="submit" value="Shorten URL">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $url = 'https://unelma.io/api/v1/link';
            $accessToken = '12|L5gD6LERGVCHSEnhuGyVwxSG9lxQufTHQP4Bzzxre66bc227';
            $long_url = $_POST['long_url'];

            $data = [
                "type" => "direct",
                "expires_at" => "2024-05-06",
                "utm" => "utm_source=google&utm_medium=banner",
                "long_url" => $long_url
            ];

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_HTTPHEADER => [
                    'accept: application/json',
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $accessToken,
                ],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($data)
            ]);

            $response = curl_exec($ch);

            if ($response === false) {
                echo 'Error:' . curl_error($ch);
            } else {
                $responseDecoded = json_decode($response, true);
                if (isset($responseDecoded['link']['short_url'])) {
                    $short_url = $responseDecoded['link']['short_url'];
                    echo 'Shortened URL: <a href="' . $short_url . '">' . $short_url . '</a>';
                } else {
                    echo 'Short URL not found in response.';
                }
            }

            curl_close($ch);
        }
        ?>





    </div>


    <footer>
        <p> &copy; 2024 Mr Paul. All Rights Reserved.</p>
    </footer>

</body>

</html>