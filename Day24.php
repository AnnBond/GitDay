<?php

$arr = [1, 2, 3, 4, 5, 6];

function newArray($arr, $index)
{
    return array_merge(array_slice($arr, $index), array_slice($arr, 0, $index));
}

print_r(newArray($arr, 3)); // out:  [ 4, 5, 6, 1, 2, 3 ]