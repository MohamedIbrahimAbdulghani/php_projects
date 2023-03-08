<?php


// this function to store the session details or session names
function sessionStore($key, $value) {
    $_SESSION[$key] = $value;
}

// this function to get key of session
function getSessionKey($key) {
    return $_SESSION[$key] ?? [];
}
// this function to remove session
function removeSession($key) {
    if(isset($_SESSION[$key])):
        unset($_SESSION[$key]);
    endif;
}