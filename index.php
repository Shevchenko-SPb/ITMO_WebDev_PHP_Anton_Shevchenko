<?php

// Task 1

class ShopProduct {
    private $title;
    protected $price;
    public $type = "product";
    public $shelfLife = "12 month";
    function showAll () {
        echo "$this->price <br>";
        echo "$this->title <br>";
        echo "$this->type <br>";
        echo "$this->shelfLife <br>";
    }
}
$obj = new ShopProduct();


$obj->showAll();

// Task 2
class NewShopProduct extends ShopProduct {
    function showAllNew () {
        echo "$this->price <br>";
        echo "$this->title <br>";
        echo "$this->type <br>";
        echo "$this->shelfLife <br>";
    }
    static function showAllNewStatic () {
        echo "price <br>";
        echo "title <br>";
        echo "type <br>";
        echo "shelfLife <br>";
    }
}

$obj2 = new NewShopProduct();
$obj2->showAllNew();


// Task 3

$static = NewShopProduct::showAllNewStatic();

