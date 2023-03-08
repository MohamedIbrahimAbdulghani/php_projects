<?php

require_once "../functions/request.php";

if(postMethod()):
    foreach($_POST as $key => $value):
        $$key = trim(htmlentities(htmlspecialchars($value))); //variable of variable
    endforeach;
    echo $email;
else:
    echo "Oh! sorry found error";
endif;