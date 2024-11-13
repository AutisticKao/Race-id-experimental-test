<?php

function fetchData($url) {
    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Output the response
        echo $response;
    }

    // Close cURL session
    curl_close($ch);
}

// URL to fetch data from
$url = 'https://steelytoe.com/dev.titudev.com/api/v1/resources/event_header';

// Fetch and display data
fetchData($url);
