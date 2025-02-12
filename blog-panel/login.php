<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = array(
        "username" => $username,
        "password" => $password
    );

    // Convert the data to JSON
    $jsonData = json_encode($data);

    // Set the URL of the other server's endpoint
    $url = "http://localhost:3000/login";

    // Create a cURL session
    $curl = curl_init($url);

    // Set cURL options for POST request
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($curl);
    if ($response === false) {
        echo 'Connection Refused';
    } else {        
        if ($response === 'Login! Successful') {
            $_SESSION["loginStatus"] = $response;
            echo '<script>
            alert("'. $response .'");
            sessionStorage.setItem("loginStatus", ' . json_encode($response) . ');
            window.location.href = "dashboard.php";
            </script>';
        } else {
            echo '<script>
            alert("'. $response .'"); 
            window.location.href = "index.html";
            </script>';
        }
    }
    curl_close($curl);
}
?>
