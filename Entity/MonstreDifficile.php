<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:14
 */

namespace Entity;

class MonstreDifficile extends MonstreFacile
{
    const DEGATSORT = 5;

    public function Attaque(Joueur $joueur)
    {
        parent::Attaque($joueur);
        $joueur->SubitDegats($this->SortMagique());
    }

    private function SortMagique(): int
    {
        $valeur = $this->de->LanceLeDe();
        if ($valeur == 6)
            return 0;

        return self::DEGATSORT * $valeur;
    }
}