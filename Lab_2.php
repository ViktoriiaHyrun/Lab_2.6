<?php
$x = (float) readline("Please enter value for x: ");
$y = (float) readline("Please enter value for y: ");

$a = pow(2, -$x) * sqrt(pow($x, -4) + sqrt(abs($y)));

echo "Result is a: $a\n";
?>


