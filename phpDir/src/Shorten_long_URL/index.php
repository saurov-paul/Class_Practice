<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>URL Shortener</title>
    
</head>
<body>

<div class="container">
    <h2>URL Shortener</h2>
    <form method="post">
        <input type="text" name="long_url" placeholder="Enter your long URL">
        <input type="submit" value="Shorten URL">
    </form>
    <br>
    <!-- <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $long_url = $_POST['long_url'];
        $access_token = "12|L5gD6LERGVCHSEnhuGyVwxSG9lxQufTHQP4Bzzxre66bc227"; // Replace with your access token from unelma.io
        $url = "https://api.unelma.io/v1/";
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
    ?> -->

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// URL to the Unelma.IO API
$url = 'https://unelma.io/api/v1/link';
// Access token for the Unelma.IO API
$accessToken = '2|iwNQ7iOWtC4mgVPX8cXFuSobzOTUR2bCVARnD1cx959aa083';

// Collect the long URL from the form input
$long_url = $_POST['long_url'];

// Prepare the data to be sent in the POST request
$data = [
"type" => "direct",
"password" => null,
"active" => true,
"expires_at" => "2024-05-06",
"activates_at" => "2024-03-25",
"utm" => "utm_source=google&utm_medium=banner",
"domain_id" => null,
"long_url" => $long_url
];

// Initialize cURL session
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
'accept: application/json',
'Content-Type: application/json',
'Authorization: Bearer ' . $accessToken,
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute the POST request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
  } else {
  // Decode the response
  $responseDecoded = json_decode($response, true);
  // Check if the 'link' key and 'short_url' subkey exist before trying to access it
  if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
  // Output the shortened URL
  echo 'Shortened URL: <a href="' . $responseDecoded['link']['short_url'] . '">' . $responseDecoded['link']['short_url'] . '</a>';
  } else {
  // Handle the case where 'short_url' key doesn't exist
  echo 'The key "short_url" does not exist in the response.';
  }
  }

// Close cURL session
curl_close($ch);


  }
?>
</div>

</body>
</html>
