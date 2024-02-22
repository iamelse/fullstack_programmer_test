<?php 

function mostCommonChars($chars)
{
    $countChars = array_count_values(str_split($chars));
    arsort($countChars);

    $mostCharacter = key($countChars);
    $totalMostCharacter = current($countChars); 

    if ($totalMostCharacter > 1) {
        return "Karakter terbanyak = " . $mostCharacter . ' ' . $totalMostCharacter . "x";
    } else {
        return "No Data";
    }
}

print_r(mostCommonChars('strawberry'));

?>