<?php
$password = "sedu2754";

function checkPassword($password)
{
    $length = strlen($password);
    if ($length >= 6 && $length <= 32 && checkIsNumber($password)) {
        return true;
    }
}

function checkIsNumber($string)
{
    $flag = false;
    for ($i = 0; $i < count($string); $i++) {
        if (is_numeric($string[$i])) {
            $flag = true;
        }
    }
    return $flag;
}
var_dump(checkPassword("wsdfqtf113"));
