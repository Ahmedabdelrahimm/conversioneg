<?php
// Alternative contact form processor using PHPMailer
// This requires PHPMailer to be installed via Composer

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "N";
    exit;
}

// Get form data with proper validation
$firstName = isset($_POST['confname']) ? trim($_POST['confname']) : '';
$lastName = isset($_POST['conlname']) ? trim($_POST['conlname']) : '';
$conEmail = isset($_POST['conEmail']) ? trim($_POST['conEmail']) : '';
$conPhone = isset($_POST['conPhone']) ? trim($_POST['conPhone']) : '';
$conSubject = isset($_POST['conSubject']) ? trim($_POST['conSubject']) : 'Contact Form Submission';
$conWebsite = isset($_POST['conWebsite']) ? trim($_POST['conWebsite']) : '';
$conMessage = isset($_POST['conMessage']) ? trim($_POST['conMessage']) : '';

// Basic validation
if (empty($firstName) || empty($conEmail) || empty($conMessage)) {
    echo "N";
    exit;
}

// Validate email
if (!filter_var($conEmail, FILTER_VALIDATE_EMAIL)) {
    echo "N";
    exit;
}

// For now, let's use a simple file-based approach as a workaround
// This will save the contact form data to a file instead of sending email

$recipient = "contactus@conversion-eg.com";
$subject = !empty($conSubject) ? $conSubject : "New Contact Form Message from $firstName $lastName";

// Create email content
$emailContent = "You have a new message from your website Contact Form\n";
$emailContent .= "==================================================\n\n";
$emailContent .= "Full Name: $firstName $lastName\n";
$emailContent .= "Email: $conEmail\n";
$emailContent .= "Phone: $conPhone\n";
$emailContent .= "Subject: $subject\n";
$emailContent .= "Website: $conWebsite\n";
$emailContent .= "Message: \n$conMessage\n";
$emailContent .= "\n==================================================\n";
$emailContent .= "Sent on: " . date('Y-m-d H:i:s') . "\n";

// Save to a file (temporary solution)
$filename = 'contact_submissions_' . date('Y-m-d') . '.txt';
$filepath = __DIR__ . '/' . $filename;

try {
    // Append the email content to the file
    file_put_contents($filepath, $emailContent . "\n\n", FILE_APPEND | LOCK_EX);
    
    // Also log to error log for debugging
    error_log("Contact form submission saved to: $filepath");
    
    echo "Y";
} catch (Exception $e) {
    error_log("Contact form error: " . $e->getMessage());
    echo "N";
}
?>
