<?php
$myArray = [1, 2, 3, 7, 9, 12, 22, 30, 50, 67];

function binarySearch(int $element, array $arr)
{
    $start = 0;
    $end = count($arr) - 1;
    $prev_start = $start;
    $prev_end = $end;
    while (true) {
        $position = round(($start + $end) / 2);

        if (isset($arr[$position])) {
            if ($arr[$position] == $element) {
                echo "Позиція елемента: " . $position;
                return $position;
            }
            if ($arr[$position] > $element) {
                $end = floor(($start + $end) / 2);
            } elseif ($arr[$position] < $element) {
                $start = ceil(($start + $end) / 2);
            }
        }
        if ($prev_start == $start && $prev_end == $end) {
            echo "Елемент не знайдено";
            return false;
        }
        $prev_start = $start;
        $prev_end = $end;
    }
}

binarySearch(22, $myArray);
