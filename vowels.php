<?php
$str = "Hello World";
$count = 0;

$vowels = ['a','e','i','o','u','A','E','I','O','U'];

for($i = 0; $i < strlen($str); $i++){
    if(in_array($str[$i], $vowels)){
        $count++;
    }
}

echo "Number of vowels = $count";
?>
