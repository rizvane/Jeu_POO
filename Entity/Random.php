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


    public function __construct(int $valeur_min, int $valeur_max)
    {
        $this->valeur = rand($valeur_min,$valeur_max);
    }

    /**
     * @return int
     */
    public function getValue():int
    {
        return $this->valeur;
    }


}