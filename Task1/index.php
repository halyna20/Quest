<?php
$myArray = [2, 12, 78, 23, 65, 88, 29];

function getMax(array $arr)
{
    if (count($arr) > 0) {
        $max = 0;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $max = $arr[$i];
            } else if ($arr[$i] < $arr[$i + 1]) {
                $max = $arr[$i + 1];
            }
        }
    }

    return $max;
}

echo getMax($myArray);
