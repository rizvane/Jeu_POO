<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:27
 */

namespace Entity;

class Random
{
    private $valeur;

    public function __construct()
    {
        $this->valeur = rand(1,6);
    }

    /**
     * @return int
     */
    public function getValeur():int
    {
        return $this->valeur;
    }

}