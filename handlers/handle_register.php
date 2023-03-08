<?php

require_once "../functions/request.php";

if(postMethod()):
    echo getRequestType();
else:
    echo "Oh! sorry found error";
endif;