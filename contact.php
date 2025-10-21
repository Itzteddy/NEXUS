<?php
header('Content-Type: application/json');

// Simulate a backend process
$input = json_decode(file_get_contents('php://input'), true);
$projectName = $input['projectName'];
$projectDetails = $input['projectDetails'];

// WhatsApp number
$whatsappNumber = '6369072769'; // Replace with your actual number

// Log the project details (optional)
file_put_contents('log.txt', "Project: $projectName\nDetails: $projectDetails\n", FILE_APPEND);

// Respond with the WhatsApp link
echo json_encode([
    'success' => true,
    'whatsappNumber' => $whatsappNumber
]);
?>