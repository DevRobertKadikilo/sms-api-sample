<?php


$phone = "Enter the recipient phone number";
$msg = "Enter your message here";
$apiKey = "Enter your API Key";


// API URL
$url = 'https://portal.fullstackteamsix.com/api/v1/send/';

// Create a new cURL resource
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "phone=" . $phone . "&message=" . $msg . "&key=" . $apiKey . "");

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$server_output = curl_exec($ch);

// Close cURL resource
curl_close($ch);

echo $server_output;

