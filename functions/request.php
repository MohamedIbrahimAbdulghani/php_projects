<?php

// this function to know what the type of request
function getRequestType() {
    return $_SERVER["REQUEST_METHOD"];
}

// this function to check if the request post or get
function postMethod() {
    if(getRequestType() == "POST"):
        return true;
    else:
        return false;
    endif;
}