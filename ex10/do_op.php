#!/usr/bin/php
<?php
function operator($a, $op, $b)
{
    if ($op == '+')
        return ($a + $b);
    if ($op == '-')
        return ($a - $b);
    if ($op == '*')
        return ($a * $b);
    if ($op == '/')
        return ($a / $b);
    if ($op == '%')
        return ($a % $b);

}
if ($argc == 4)
{
    $argv[1] = trim($argv[1]);
    $argv[2] = trim($argv[2]);
    $argv[3] = trim($argv[3]);
    $res = operator($argv[1], $argv[2], $argv[3]);
    echo "$res\n";
}
else
    echo "0\n";
?>