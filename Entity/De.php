<?php

namespace Entity;

class De
{

    public function __construct()
    {
        $this->random = new Random();
    }

    public function LanceLeDe()
    {
        return $this->random->getValeur();
    }
}