<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname   = htmlspecialchars(trim($_POST['confname'] ?? ''));
    $lname   = htmlspecialchars(trim($_POST['conlname'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['conPhone'] ?? ''));
    $email   = filter_var(trim($_POST['conEmail'] ?? ''), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['conMessage'] ?? ''));
    $subject = "Contact Form Submission";

    if (!$fname || !$lname || !$phone || !$email || !$message) {
        echo json_encode(["status" => "error", "message" => "Missing required fields."]);
        exit;
    }

    $to = "contact@conversion-eg.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body  = "New contact form submission:\n\n";
    $body .= "Name: $fname $lname\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send email."]);
    }
}
