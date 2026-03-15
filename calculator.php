<?php
$a = 10;
$b = 5;
$operator = "+"; 

switch($operator){
    case "+":
        $result = $a + $b;
        echo "Addition = " . $result;
        break;

    case "-":
        $result = $a - $b;
        echo "Subtraction = " . $result;
        break;

    case "*":
        $result = $a * $b;
        echo "Multiplication = " . $result;
        break;

    case "/":
        $result = $a / $b;
        echo "Division = " . $result;
        break;

    default:
        echo "Invalid Operator";
}
?>
