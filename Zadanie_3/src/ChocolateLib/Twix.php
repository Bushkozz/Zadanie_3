<?php

namespace ChocolateLib;

use ChocolateLib\Snack;
class Twix extends Snack
{
    public function __construct()
    {
        $this->name = 'Twix';
        $this->chocolate = 'Обычный';
        $this->toppings = ['нуга', 'карамель'];
    }
}