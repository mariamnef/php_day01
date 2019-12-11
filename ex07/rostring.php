#!/usr/bin/php
<?php
$str = preg_replace('/\s+/', ' ', $argv[1]);
$array = explode(" ", $str);
$n = count($array);
$i = 1;
while ($i < $n)
{
    echo $array[$i];
    echo " ";
    $i++;
}
echo $array[0];
echo "\n";
?>