<?php

// Sanitize input data
function sanitize($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Redirect to a URL
function redirect($url) {
    header('Location: ' . $url);
    exit();
}

// Check if a user is logged in
function isLoggedIn() {
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

// Display success message
function displaySuccess($message) {
    echo '<div class="alert alert-success">' . $message . '</div>';
}

// Display error message
function displayError($message) {
    echo '<div class="alert alert-danger">' . $message . '</div>';
}

// Format Date and Time
function format_timestamp($timestamp) {
    $date = date_create_from_format('Y-m-d H:i:s', $timestamp);
    return date_format($date, 'd-m-Y');
  }