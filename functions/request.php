<?php

// this function to know what is type for request
function getRequestType() {
    return $_SERVER["REQUEST_METHOD"];
}

// this function to check the request method
function postMethod() {
    if(getRequestType() == "POST"):
        return true;
    else:
        return false;
    endif;
}