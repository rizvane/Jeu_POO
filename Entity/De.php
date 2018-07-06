<?php

namespace Entity;

class De
{

    public function __construct()
    {
        $this->random = new Random(1, 6);
    }

    public function LanceLeDe()
    {
        return $this->random->getValue();
    }
}