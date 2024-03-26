<?php
// Set the headers for Server-Sent Events (SSE) and prevent caching
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

// Define the API key (replace with your actual API key)
define('API_KEY', 'sk-YOUR-OPENAI-KEY');

// Get the input from the user via a GET parameter
$input = $_GET['input'];
$prompt = $input;

// Prepare the request data to be sent to the GPT API
$data = array(
  'model' => 'gpt-3.5-turbo',
  'stream' => true,
  'messages' => array(
    array(
      'role' => 'user',
      'content' => $prompt
    )
  )
);

// Set the curl options for the API request
$options = array(
  CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . API_KEY
  ),
  CURLOPT_WRITEFUNCTION => function($ch, $chunk) {
    echo "data: $chunk\n\n";
    flush();
    return strlen($chunk);
  }
);

// Initialize the curl request
$ch = curl_init();

// Set the curl options specified earlier
curl_setopt_array($ch, $options);

// Execute the curl request and close the connection
curl_exec($ch);
curl_close($ch);

echo "data: [DONE]\n\n"; // Signal completion
flush();
?>

