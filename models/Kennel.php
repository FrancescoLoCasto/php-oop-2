<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';



class Kennel extends Product
{
    protected $material;
    protected $size;

    public function __construct(Category $_genre, string $_name, float $_price, string $_material, string $_size)
    {
        parent::__construct($_genre, $_name, $_price);
        $this->setMaterial($_material);
        $this->setSize($_size);
    }



    public function setMaterial($_material)
    {
        $this->material = $_material;
    }

    public function setSize($_size)
    {
        $this->size = $_size;
    }


    public function getMaterial()
    {
        return $this->material;
    }

    public function getSize()
    {
        return $this->size;
    }
}
