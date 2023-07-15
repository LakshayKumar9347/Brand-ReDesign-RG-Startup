<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $image = $_POST["image"];

    $data = array(
        "title" => $title,
        "description" => $description,
        "image" => $image
    );

    
    // Convert the data to JSON
    $jsonData = json_encode($data);

    // Set the URL of the other server's endpoint
    $url = "http://localhost:3000/blogs";

    // Create a cURL session
    $curl = curl_init($url);

    // Set cURL options for POST request
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    if ($response === false) {
        echo 'Server Not Sending Any Response';
    } else {
        // Process the response from the server if needed
        echo $response;
    }
      // Execute the cURL request
 
      curl_close($curl);

}
?>
