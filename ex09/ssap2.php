#!/usr/bin/php
<?php
function ft_split($str)
	{
		$arr = array_filter(explode(" ", $str));
		return $arr;
    }
function ft_sort($str1, $str2)
{
    $str1 = strtolower($str1);
    $str2 = strtolower($str2);
    $i = 0;
    $tab = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    while (($i < strlen($str1)))
    {
        if  ($i >= strlen($str2))
             return 1;
        $p_str1 = strpos($tab, ord($str1[$i]));
        $p_str2 = strpos($tab, ord($str2[$i]));
        if ($p_str1 < $p_str2)
            return (-1);
        else if ($p_str1 > $p_str2)
            return (1);
        else
            $i++;
    }
    return -1;
}
if ($argc > 1)
{
    $i = 2;
    $str = $argv[1];
    while ($i < $argc)
    {
        $str = $str . " " . $argv[$i];   
        $i++;
    }
    $tab = ft_split($str);
    usort($tab, "ft_sort");
    foreach ($tab as $val)
    {
        echo "$val\n";
    }
}