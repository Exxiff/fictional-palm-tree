<?php

declare(strict_types=1);

class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->price = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return "$this->name, price $this->price, amount $this->amount\n";
    }

    public function setPrice(float $newPrice): void
    {
        $this->price = $newPrice;
    }

    public function setAmount(int $newAmount): void
    {
        $this->amount = $newAmount;
    }
}

$products = [
    new Product('Logitech mouse', 70.00, 14),
    new Product('iPhone 5s', 999.99, 3),
    new Product('Epson EB-U05', 440.46, 1)
];

echo "///Product information\n";

foreach ($products as $product) {
    echo "* " . $product->printProduct();
}

$products[0]->setPrice(12.99);
$products[1]->setAmount(14);

echo "///Updated product information\n";

foreach ($products as $product) {
    echo "* " . $product->printProduct();
}

