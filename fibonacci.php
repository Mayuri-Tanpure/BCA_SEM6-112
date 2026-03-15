<?php
$a = 0;
$b = 1;

echo "Fibonacci Series: ";

for($i = 1; $i <= 10; $i++){
    echo $a." ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
?>
