<?php
// Language Configuration File

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Default language
$default_language = 'en';

// Get current language from session or URL parameter
$current_language = isset($_GET['lang']) ? $_GET['lang'] : (isset($_SESSION['language']) ? $_SESSION['language'] : $default_language);

// Validate language
$allowed_languages = ['en', 'ar'];
if (!in_array($current_language, $allowed_languages)) {
    $current_language = $default_language;
}

// Save language to session
$_SESSION['language'] = $current_language;

// Load language file
$language_file = "languages/{$current_language}.php";
$translations = file_exists($language_file) ? include($language_file) : [];

// Function to get translated text
function __($key, $default = '') {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : ($default ?: $key);
}

// Function to echo translated text
function _e($key, $default = '') {
    echo __($key, $default);
}

// Function to get current language
function getCurrentLanguage() {
    global $current_language;
    return $current_language;
}

// Function to check if current language is Arabic
function isArabic() {
    return getCurrentLanguage() === 'ar';
}

// Function to get language direction
function getLanguageDirection() {
    return isArabic() ? 'rtl' : 'ltr';
}

// Function to get language class for CSS
function getLanguageClass() {
    return isArabic() ? 'lang-ar' : 'lang-en';
}

// Function to create language switcher URL
function getLanguageUrl($lang) {
    $current_url = $_SERVER['REQUEST_URI'];
    $url_parts = parse_url($current_url);
    $query = [];
    
    if (isset($url_parts['query'])) {
        parse_str($url_parts['query'], $query);
    }
    
    $query['lang'] = $lang;
    
    $new_query = http_build_query($query);
    $new_url = $url_parts['path'] . ($new_query ? '?' . $new_query : '');
    
    return $new_url;
}
?>
