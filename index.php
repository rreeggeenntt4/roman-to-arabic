<?php
function roman_to_arabic($value)
{
    $table = array(
        'I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000
    );
    $length = strlen($value);
    $active = $result = 0;
    for ($i = $length - 1; $i > -1; $i--) {
        $next = $table[$value[$i]];
        if ($next < $active) $result -= $next;
        else $result += $next;
        $active = $next;
    }
    return $result;
}

echo roman_to_arabic("MCDXIX");