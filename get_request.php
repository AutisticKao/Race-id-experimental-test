<?php

// Initialize a cURL session
$ch = curl_init();

// Set the URL for the GET request
curl_setopt($ch, CURLOPT_URL, "https://steelytoe.com/dev.titudev.com/api/v1/resources/event_header");

// Set options to return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the cURL session
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $data = json_decode($response, true);

    // Check if decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {
        // Process the data
        print_r($data);
    } else {
        echo "Failed to decode JSON: " . json_last_error_msg();
    }
}

// Close the cURL session
curl_close($ch);

?>
