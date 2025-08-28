<?php
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

/**
 * Set the recipient email address.
 * 
 * Contact form emails will be sent to this address.
 */
$recipient = "contactus@conversion-eg.com";

// Set the email subject with fallback
$subject = !empty($conSubject) ? $conSubject : "New Contact Form Message from $firstName $lastName";

// Email Header
$head = "You have a new message from your website Contact Form\n=============================";

// Build the email content.
$form_content = "$head\n\n";
$form_content .= "Full Name: $firstName $lastName\n";
$form_content .= "Email: $conEmail\n";
$form_content .= "Phone: $conPhone\n";
$form_content .= "Subject: $subject\n";
$form_content .= "Website: $conWebsite\n";
$form_content .= "Message: \n$conMessage\n";

// Build the email headers with proper formatting
$headers = "From: $firstName $lastName <$conEmail>\r\n" .
    "Reply-To: $conEmail\r\n" .
    "Content-Type: text/plain; charset=UTF-8\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Try to send the email
try {
    $mailSent = mail($recipient, $subject, $form_content, $headers);
    
    if ($mailSent) {
        echo "Y";
    } else {
        // Log error for debugging
        error_log("Failed to send email to: $recipient");
        echo "N";
    }
} catch (Exception $e) {
    // Log exception for debugging
    error_log("Email sending exception: " . $e->getMessage());
    echo "N";
}
?>
