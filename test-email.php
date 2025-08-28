<?php
// Simple email test to check if mail() function is working
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h2>Email Function Test</h2>";

// Check if mail function exists
if (function_exists('mail')) {
    echo "<p>✅ mail() function is available</p>";
} else {
    echo "<p>❌ mail() function is NOT available</p>";
    exit;
}

// Check sendmail configuration
echo "<h3>Sendmail Configuration Check:</h3>";
$sendmailPath = ini_get('sendmail_path');
echo "<p>sendmail_path: " . ($sendmailPath ? $sendmailPath : 'Not set') . "</p>";

// Check if sendmail.ini exists
$sendmailIniPath = 'C:/xampp/sendmail/sendmail.ini';
if (file_exists($sendmailIniPath)) {
    echo "<p>✅ sendmail.ini found at: $sendmailIniPath</p>";
    
    // Read and display sendmail.ini content
    $sendmailConfig = file_get_contents($sendmailIniPath);
    echo "<h4>Sendmail.ini Content:</h4>";
    echo "<pre>" . htmlspecialchars($sendmailConfig) . "</pre>";
} else {
    echo "<p>❌ sendmail.ini NOT found at: $sendmailIniPath</p>";
}

// Test basic email sending with proper headers
$to = "contactus@conversion-eg.com";
$subject = "Test Email from Website - " . date('Y-m-d H:i:s');
$message = "This is a test email to verify the mail() function is working.\n\nSent at: " . date('Y-m-d H:i:s');
$headers = "From: ahmedabdelrahim0810@gmail.com\r\n" .
           "Reply-To: ahmedabdelrahim0810@gmail.com\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n" .
           'X-Mailer: PHP/' . phpversion();

echo "<h3>Attempting to send test email:</h3>";
echo "<p><strong>To:</strong> $to</p>";
echo "<p><strong>From:</strong> ahmedabdelrahim0810@gmail.com</p>";
echo "<p><strong>Subject:</strong> $subject</p>";

try {
    $result = mail($to, $subject, $message, $headers);
    
    if ($result) {
        echo "<p>✅ Test email sent successfully!</p>";
        echo "<p>Note: Check your email inbox and spam folder for the test email.</p>";
    } else {
        echo "<p>❌ Test email failed to send</p>";
        
        // Check for common issues
        echo "<h3>Common Issues:</h3>";
        echo "<ul>";
        echo "<li>Gmail app password not set correctly in sendmail.ini</li>";
        echo "<li>2-Factor Authentication not enabled on Gmail account</li>";
        echo "<li>Incorrect Gmail credentials in sendmail.ini</li>";
        echo "<li>Firewall blocking outgoing emails</li>";
        echo "<li>XAMPP sendmail service not properly configured</li>";
        echo "</ul>";
        
        echo "<h3>Next Steps:</h3>";
        echo "<ol>";
        echo "<li>Make sure 2-Factor Authentication is enabled on your Gmail account</li>";
        echo "<li>Generate an App Password for 'Mail' in your Google Account settings</li>";
        echo "<li>Update the auth_password in sendmail.ini with the 16-character app password</li>";
        echo "<li>Restart Apache in XAMPP Control Panel</li>";
        echo "<li>Try this test again</li>";
        echo "</ol>";
    }
} catch (Exception $e) {
    echo "<p>❌ Exception occurred: " . $e->getMessage() . "</p>";
}

// Display PHP mail configuration
echo "<h3>PHP Mail Configuration:</h3>";
echo "<p>sendmail_path: " . ini_get('sendmail_path') . "</p>";
echo "<p>SMTP: " . ini_get('SMTP') . "</p>";
echo "<p>smtp_port: " . ini_get('smtp_port') . "</p>";

// Check if sendmail.exe exists
$sendmailExePath = 'C:/xampp/sendmail/sendmail.exe';
if (file_exists($sendmailExePath)) {
    echo "<p>✅ sendmail.exe found at: $sendmailExePath</p>";
} else {
    echo "<p>❌ sendmail.exe NOT found at: $sendmailExePath</p>";
}
?>
