<?php

$n = readline("Enter a number: ");
$f = 1;
for ($i = 1; $i <= $n; $i++) {
    $f *= $i;
}

echo "$n! = $f";
