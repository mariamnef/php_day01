#!/usr/bin/php
<?php
$i = 2;
$tab = $argv[1];
if ($argc > 1)
{
    while ($i < $argc)
    {
        $tab = $tab . " " . $argv[$i];
        $i++;
    }
    $array = preg_split("/ +/", $tab);
    sort($array);
    foreach ($array as $value)
    {
        echo "$value\n";
    }
}
?>