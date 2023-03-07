<?php

require_once "../functions/request.php";
require_once "../functions/validation.php";

if(postMethod()):
    foreach($_POST as $key => $value):
        // echo $key . " : " . $value . "<br>";
        $$key = $value;
    endforeach;
    echo $name;
else:
    echo "oh! sorry found error in your code";
endif;