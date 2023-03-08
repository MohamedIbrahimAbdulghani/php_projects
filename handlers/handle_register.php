<?php
session_start();

require_once "../functions/request.php";
require_once "../functions/validations.php";
require_once "../functions/sessions.php";


// this array variable to store the error inside
$errors = [];

if(postMethod()):
    foreach($_POST as $key => $value):
        $$key = trim(htmlentities(htmlspecialchars($value))); //variable of variable
    endforeach;
    
    // Validations

    if(requiredInput($name)):
        $errors[] = "name is required";
    elseif(minInput($name, 3)):
        $errors[] = "name must be greater than 3 chars";
    elseif(maxInput($name, 30)):
        $errors[] = "name must be smaller than 30 chars";
    endif;

    if(requiredInput($email)):
        $errors[] = "email is required";
    elseif(validEmail($email)):
        $errors[] = "please type a valid email";
    endif;

    if(requiredInput($password)):
        $errors[] = "password is required";
    elseif(minInput($password, 6)):
        $errors[] = "password must be greater than 6 chars";
    elseif(maxInput($password, 25)):
        $errors[] = "password must be smaller than 25 chars";
    endif;

    if(requiredInput($confirm_password)):
        $errors[] = "confirm password is required";
    elseif(sameInput($password, $confirm_password)):
        $errors[] = "confirm password must be equal to password";
    endif;



    if(empty($errors)):
        $user = [
            "name" => $name,
            "email" => $email
        ];
        sessionStore("user", $user);
        header("Location: ../profile.php");
    else:
        sessionStore("errors", $errors);
        header("Location: ../register.php");
    endif;

else:
    echo "Oh! sorry found error";
    header("refresh:1; url=../register.php");
endif;