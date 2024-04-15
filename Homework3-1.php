<?php
$n = 30;
$sum = 0;
$prod = gmp_init(1); 

for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
    $sum += $i;
    $prod = gmp_mul($prod, $i); 
}

echo "<br>";
echo "1 + ... + 30 = $sum <br>";
echo "1 * ... * 30 = " . gmp_strval($prod); 
?>
