<?php
$password = "rwtyuhijkd1325";

function checkPassword($password){
    $pattern = '/^[a-zA-Z0-9_]{6,32}$/';
    if (preg_match($pattern, $password)) {
        echo "password oke";
    } else {
        echo "error";

    }
}
checkPassword($password);