<?php

namespace ChocolateLib;

use ChocolateLib\Snack;
class Snickers extends Snack
{
    public function __construct()
    {
        $this->name = 'Сникерс';
        $this->chocolate = 'Молочный';
        $this->toppings = ['нуга', 'карамель', 'арахис'];
    }
}