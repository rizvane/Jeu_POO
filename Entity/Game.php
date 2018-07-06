<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 15:34
 */

namespace Entity;

use Entity\Random;

class Game
{

    private static $random;

    public function __construct()
    {
        self::$random = new Random(0, 2);
    }

    public function LanceJeu()
    {
        $joueur = new Joueur(1);
        $cptFacile = 0;
        $cptDifficile = 0;

        while ($joueur->EstVivant()) {
            $monstre = self::FabriqueDeMonstre();
            while ($monstre->getEstVivant() && $joueur->EstVivant()) {
                $joueur->Attaque($monstre);
                if ($monstre->getEstVivant())
                    $monstre->Attaque($joueur);
            }
            echo $joueur->EstVivant().'</br>';
            if ($joueur->EstVivant()) {
                if ($monstre instanceof MonstreDifficile)
                    $cptDifficile++;
                else
                    $cptFacile++;
            } else {
                echo "Tu est mort !!!!!";
                break;
            }
        }

        echo "</br>Bravo !! Vous avez tué " . $cptFacile. " monstres faciles et " . $cptDifficile. " monstres difficiles et vous avez " . ($cptFacile + $cptDifficile * 2). " points.";

    }

    public static function FabriqueDeMonstre()
    {
        if (self::$random->getValue() == 0)
            return new MonstreFacile();
        else
            return new MonstreDifficile();
    }
}
