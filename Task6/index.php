<?php
$str = "MADAM";
function palindrome(String $str)
{
    $reverse = reverse($str);
    if ($reverse == $str) {
        echo $str . " це паліндром";
    } else {
        echo $str . " не є  паліндром";
    }
}

function reverse(String $str)
{
    $i = 0;

    $result = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];

        $result = $currentChar . $result;
        $i = $i + 1;
    }

    return $result;
}

palindrome($str);
