<?php
require_once __DIR__ . '/Category.php';

class Product
{
    protected $imgPath;
    protected $name;
    protected $price;
    protected $barcode;
    protected $genre;

    public function __construct(Category $_genre, string $_name, float $_price)
    {
        $this->genre = $_genre;
        $this->setName($_name);
        $this->setPrice($_price);
    }

    // Set ----------------------------

    public function setImgPath($_imgPath)
    {
        $this->imgPath = $_imgPath;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function setBarcode($_barcode)
    {
        $this->barcode = $_barcode;
    }

    // Get ----------------------------

    public function getImgPath()
    {
        return $this->imgPath;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
