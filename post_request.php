<?php

function makePostRequest($url, $data) {
    // Initialize cURL session
    $ch = curl_init($url);

    // Convert data array to JSON
    $jsonData = json_encode($data);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ]);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Parse JSON response
        $responseData = json_decode($response, true);
        print_r($responseData);
    }

    // Close cURL session
    curl_close($ch);
}

    // Example usage
    $url = 'https://steelytoe.com/dev.titudev.com/api/v1/resources/event_header';
    $data = [
        'key1' => 'value1',
        'key2' => 'value2'
];

makePostRequest($url, $data);