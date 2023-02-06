<?php

class Category
{
    protected $imgPath;
    protected $genre;


    public function __construct(string $_genre)
    {
        $this->setGenre($_genre);
    }

    public function setGenre($_genre)
    {
        if ($_genre == 'cani' || $_genre == 'gatti') {
            $this->genre = $_genre;
        } else {
            $this->genre = null;
        }

        if ($_genre == 'cani') {
            $this->imgPath = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN4zfroY9qlhzbK6HrS2ah7EvzmifEO2WWpg&usqp=CAU';
        } elseif ($_genre == 'gatti') {
            $this->imgPath = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTO3M6YRHZjWRPjMmL7LTOuOt0ShBkzJpiuA&usqp=CAU';
        } else {
            $this->imgPath = 'https://cdn-icons-png.flaticon.com/512/2748/2748558.png';
        }
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }
}
