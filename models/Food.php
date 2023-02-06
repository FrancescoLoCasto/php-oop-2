<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';



class Food extends Product
{
    protected $ingredients;
    protected $expireDate;

    public function __construct(Category $_genre, string $_name, float $_price, string $_ingredients, string $_expireDate)
    {
        parent::__construct($_genre, $_name, $_price);
        $this->setIngredients($_ingredients);
        $this->setExpireDate($_expireDate);
    }


    public function setIngredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }

    public function setExpireDate($_expireDate)
    {
        $this->expireDate = $_expireDate;
    }


    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function getExpireDate()
    {
        return $this->expireDate;
    }
}
