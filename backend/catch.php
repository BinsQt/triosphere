<?php 
    // include("connection.php");

    $carbon_monoxide = $_GET["co"];
    $lpg = $_GET["c02"];
    $methane = $_GET["methane"];

    $data = [
        'carbon_monoxide' => $carbon_monoxide,
        'lpg' => $lpg,
        'methane' => $methane
    ];

    // Encode the array into a JSON string
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Specify the file path where you want to save the JSON data
    $file = 'data.json';

    // Save the JSON string to a file
    file_put_contents($file, $jsonData);

    echo "Data saved to $file";




?>