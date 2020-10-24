<?php

require_once '../vendor/autoload.php';
require_once '../src/Wcs/Hello.php';

$hello = new App\Wcs\Hello();
echo $hello->talk();
