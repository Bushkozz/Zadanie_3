<?php

require "vendor/autoload.php";

use ChocolateLib\ChocolateFabric;
use ChocolateLib\NewChocolateFabric;


$test = new NewChocolateFabric();
$test->orderSnack("Сникерс");
$test->orderSnack("Шоколадка");
$test->orderSnack("Твикс");