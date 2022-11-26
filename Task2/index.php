<?php
$myArray = [12, 32, 70, 24, 68, 89, 87, 91, 90];

function bubbleSort(array $arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $finish = 0;
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            $elem1 = $arr[$j];
            $elem2 = $arr[$j + 1];

            if ($elem1 > $elem2) {
                $arr[$j] = $elem2;
                $arr[$j + 1] = $elem1;
                $finish = 1;
            }
        }

        if ($finish == 0) break;
    }

    return $arr;
}

echo "Sort Array:" . implode(',', bubbleSort($myArray));
