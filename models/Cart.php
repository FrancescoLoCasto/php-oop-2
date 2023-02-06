<?php
require_once __DIR__ . '/Product.php';

class Cart
{
    protected $totalPrice;
    protected $quantity;

    public function __construct($_initialPrice, $_initialQuantity)
    {
        $this->setInitialPrice($_initialPrice);
        $this->setInitialQuantity($_initialQuantity);
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setInitialPrice($_initialPrice)
    {
        $this->totalPrice = $_initialPrice;
    }

    public function setInitialQuantity($initialQuantity)
    {
        $this->quantity = $initialQuantity;
    }

    public function addNewProduct()
    {
        $this->quantity += 1;
    }

    public function addNewPrice($priceToAdd)
    {
        $this->totalPrice += $priceToAdd;
    }
}
