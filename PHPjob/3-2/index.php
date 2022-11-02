<?php
$fruites = ["りんご" => 300, "みかん" => 50, "もも" => 300];
$quantities = [1, 3, 10];
$i = 0;

function getSam($price, $quantity)
{
    $sam = $price * $quantity;
    print $sam;
}

foreach ($fruites as $key => $value) {
    
        echo $key . "は";
        getSam($value, $quantities[$i]);
        echo "円です。", '<br>';
        $i++;
}
