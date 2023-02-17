<?php
$num = 3;
$factorial = 1;

for ($x=1; $x<=$num; $x++)
{
    $factorial = $factorial * $x;
}

echo "The factorial of $num is $factorial";
?>
