<?php
// PHP Mail Configuration Check and Update Script
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h2>PHP Mail Configuration Check</h2>";

// Current settings
echo "<h3>Current PHP Mail Settings:</h3>";
echo "<p><strong>sendmail_path:</strong> " . ini_get('sendmail_path') . "</p>";
echo "<p><strong>SMTP:</strong> " . ini_get('SMTP') . "</p>";
echo "<p><strong>smtp_port:</strong> " . ini_get('smtp_port') . "</p>";

// Check if sendmail_path is set correctly
$currentSendmailPath = ini_get('sendmail_path');
$expectedSendmailPath = '"C:\xampp\sendmail\sendmail.exe" -t';

if ($currentSendmailPath == $expectedSendmailPath) {
    echo "<p>✅ sendmail_path is correctly configured</p>";
} else {
    echo "<p>❌ sendmail_path needs to be updated</p>";
    echo "<p><strong>Current:</strong> $currentSendmailPath</p>";
    echo "<p><strong>Should be:</strong> $expectedSendmailPath</p>";
    
    echo "<h3>To fix this:</h3>";
    echo "<ol>";
    echo "<li>Open XAMPP Control Panel</li>";
    echo "<li>Click 'Config' button for Apache</li>";
    echo "<li>Select 'php.ini'</li>";
    echo "<li>Find the [mail function] section</li>";
    echo "<li>Update these lines:</li>";
    echo "<pre>";
    echo "[mail function]\n";
    echo "SMTP = localhost\n";
    echo "smtp_port = 25\n";
    echo "sendmail_path = \"C:\\xampp\\sendmail\\sendmail.exe\" -t\n";
    echo "sendmail_from = ahmedabdelrahim0810@gmail.com\n";
    echo "</pre>";
    echo "<li>Save php.ini and restart Apache</li>";
    echo "</ol>";
}

// Check if sendmail.exe exists
$sendmailExePath = 'C:/xampp/sendmail/sendmail.exe';
if (file_exists($sendmailExePath)) {
    echo "<p>✅ sendmail.exe found</p>";
} else {
    echo "<p>❌ sendmail.exe not found at: $sendmailExePath</p>";
}

// Check if sendmail.ini exists
$sendmailIniPath = 'C:/xampp/sendmail/sendmail.ini';
if (file_exists($sendmailIniPath)) {
    echo "<p>✅ sendmail.ini found</p>";
    
    // Read sendmail.ini content
    $sendmailConfig = file_get_contents($sendmailIniPath);
    echo "<h3>Current sendmail.ini content:</h3>";
    echo "<pre>" . htmlspecialchars($sendmailConfig) . "</pre>";
} else {
    echo "<p>❌ sendmail.ini not found at: $sendmailIniPath</p>";
}

echo "<h3>Next Steps:</h3>";
echo "<ol>";
echo "<li>Update php.ini as shown above</li>";
echo "<li>Make sure sendmail.ini has correct Gmail settings</li>";
echo "<li>Get Gmail app password and update sendmail.ini</li>";
echo "<li>Restart Apache in XAMPP</li>";
echo "<li>Test email functionality</li>";
echo "</ol>";
?>
