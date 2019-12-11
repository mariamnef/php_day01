#!/usr/bin/php
<?php

echo "Entrez un nombre: ";
$a = fgets(STDIN);
$value = trim($a);
if ($a)
{
    if (is_numeric($value))
    {
        if ($value % 2 == 0)
            echo "The number " .$value. " is even\n";
        else    
            echo "The number " .$value. " is odd\n";
    }
    else
        echo "'" .$value. "' is not a number\n";
}
else
    echo"\n";
?>