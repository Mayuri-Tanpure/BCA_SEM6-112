<?php
$num = 121;
$rev = 0;
$temp = $num;

while($temp > 0){
    $rem = $temp % 10;
    $rev = ($rev * 10) + $rem;
    $temp = (int)($temp / 10);
}

if($num == $rev)
echo "Palindrome Number";
else
echo "Not Palindrome";
?>
