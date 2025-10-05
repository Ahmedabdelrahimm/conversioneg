<?php
// Test JSON response endpoint
header('Content-Type: application/json; charset=utf-8');

// Clean any previous output
if (ob_get_level()) {
    ob_clean();
}

// Simulate the exact same response as the contact form
echo json_encode(['status' => 'success', 'message' => 'Email sent successfully']);
exit;
?>
