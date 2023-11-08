<?php

class character
{
    public $name;
    protected $life = 100;
    public $strength = 10;
    protected $mana = 10;



    public function __construct($name)
    {
        $this->name = $name;

    }

}