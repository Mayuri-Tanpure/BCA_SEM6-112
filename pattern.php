<?php
$rows = 5;

for($i = 1; $i <= $rows; $i++){
    
    // spaces
    for($j = $rows - $i; $j >= 1; $j--){
        echo "&nbsp;&nbsp;";
    }

    // stars
    for($k = 1; $k <= $i; $k++){
        echo "* ";
    }

    echo "<br>";
}
?>
