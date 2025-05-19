<?php

namespace ChocolateLib;


use ChocolateLib\Snack;
use ChocolateLib\ChocolateFabric;

class NewChocolateFabric extends ChocolateFabric
{
    public function createSnack(string $type): null|Snack
    {
        switch ($type) {
            case "Сникерс":
                return new Snickers();
            case "Твикс":
                return new Twix();
            case "Шоколадка":
                return new ChocolateBar();
            default:
                echo 'не существует такого снека';
                return null;
        }
    }
}
