<?php

use App\Wcs\Hello;

require_once __DIR__ . "/../vendor/autoload.php";

$sayHello = new Hello;
echo $sayHello->talk();

echo '<br />' . $sayHello->speakFrench();