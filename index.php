<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 04/07/2018
 * Time: 14:07
 */
require 'vendor/autoload.php';

use Entity\Random;

$r = new Random();
echo $r->getValeur();
