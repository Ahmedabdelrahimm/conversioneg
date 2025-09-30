<?php
// Hostinger SMTP Contact Form Handler
// For custom domain emails like contactus@conversion-eg.com

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

// ===========================================
// HOSTINGER EMAIL CONFIGURATION
// ===========================================

$recipient_email = 'contactus@conversion-eg.com';
$subject = !empty($conSubject) ? $conSubject : "New Contact Form Message from $firstName $lastName";

// Build the email content
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
$emailContent .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

// ===========================================
// EMAIL HEADERS FOR HOSTINGER
// ===========================================

// Use your domain email as the sender
$sender_email = 'contactus@conversion-eg.com';
$sender_name = 'Conversion EG Website';

// Build headers for better deliverability
$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $firstName $lastName <$conEmail>\r\n";
$headers .= "Return-Path: $sender_email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "X-Priority: 3\r\n";

// ===========================================
// SEND EMAIL USING HOSTINGER'S MAIL FUNCTION
// ===========================================

try {
    // Always save to file first (for local testing and backup)
    $logFile = 'contact_submissions.txt';
    $logEntry = date('Y-m-d H:i:s') . " - $firstName $lastName ($conEmail) - $subject\n";
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
    
    // Try to send email (works on production, may fail locally)
    $mailSent = mail($recipient_email, $subject, $emailContent, $headers);
    
    if ($mailSent) {
        // Email sent successfully
        echo "Y";
    } else {
        // Email failed, but we saved to file
        // For local testing, we'll still return success
        if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || 
            strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false) {
            // We're on localhost, so return success even if mail() failed
            echo "Y";
        } else {
            // We're on production, return failure
            error_log("Failed to send email to: $recipient_email");
            echo "N";
        }
    }
    
} catch (Exception $e) {
    // Log exception for debugging
    error_log("Email sending exception: " . $e->getMessage());
    
    // For local testing, still return success if we saved to file
    if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || 
        strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false) {
        echo "Y";
    } else {
        echo "N";
    }
}
?>
