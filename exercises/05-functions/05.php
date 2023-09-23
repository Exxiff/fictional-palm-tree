<?php declare (strict_types=1);
/*Exercise 5
Create a 2D associative array in 2nd dimension with fruits and their weight.
Create a function that determines if fruit has weight over 10kg.
Create a secondary array with shipping costs per weight.
Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
Using foreach loop print out the values of the fruits and how much it would cost to ship this product.*/


function createFruit(string $name, int $weight): array
{
    return array(
        "name" => $name,
        "weight" => $weight
    );
}
$fruitsArray = array(
    createFruit("Banana", 12),
    createFruit("Apple", 8),
    createFruit("Lemon", 10)
);


$priceArray = array(
    "over 10" => 2,
    "under 10" => 1,
);

function isHeavy(int $weight) : bool
{
    $weightLimit = 10;
    if ($weight > $weightLimit) {
        return true;
    } else {
        return false;
    }
}

foreach ($fruitsArray as $fruits) {
   $fruitName = $fruits["name"];
   $fruitWeight = $fruits["weight"];

   if(isHeavy($fruitWeight)) {
       $shippingCost = $priceArray["over 10"];
   }else {
       $shippingCost = $priceArray["under 10"];
   }
    echo "Fruit: $fruitName, Weight: $fruitWeight kg, Shipping cost: $shippingCost Eur".PHP_EOL;
}
