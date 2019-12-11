<?php
function ft_is_sort($array)
{
    $tab = $array;
    sort($array);
    $n = count($array);
    $i = 0;
    $c = 1;
    while ($i < $n)
    {
        if (strcmp($tab[$i], $array[$i]) != 0)
            $c = 0;
        $i++;
    }
}
?>