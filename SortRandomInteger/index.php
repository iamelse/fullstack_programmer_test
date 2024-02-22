<?php

function sortSecondRandomIntegerDesc()
{
    $numbers = [4, 6, 2, 22, 11];
    rsort($numbers);

    return $numbers[1];
}


echo sortSecondRandomIntegerDesc();

?>