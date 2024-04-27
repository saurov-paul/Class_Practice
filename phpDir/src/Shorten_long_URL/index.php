<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>URL Shortener</h2>
    <form method="post">
        <input type="text" name="long_url" placeholder="Enter your long URL">
        <input type="submit" value="Shorten URL">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $long_url = $_POST['long_url'];
        $access_token = "12|L5gD6LERGVCHSEnhuGyVwxSG9lxQufTHQP4Bzzxre66bc227"; // Replace with your access token from unelma.io
        $url = "https://api.unelma.io/v1/url/shorten";
        $data = array("url" => $long_url);
        
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n" .
                             "Authorization: Bearer $access_token\r\n",
                'method'  => 'POST',
                'content' => json_encode($data)
            )
        );
        
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
            echo "Error: Unable to shorten URL. Please try again later.";
        } else {
            $short_url = json_decode($result)->short_url;
            echo "<p>Your short URL: <a href='$short_url' target='_blank'>$short_url</a></p>";
        }
    }
    ?>
</div>

</body>
</html>
