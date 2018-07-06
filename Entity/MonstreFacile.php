<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:14
 */

namespace Entity;

class MonstreFacile extends Monstre
{
    const DEGATS = 10;
    protected $de;
    private $EstVivant;

    public function __construct()
    {
        $this->de = new De();
        $this->EstVivant = true;
    }

    /**
     * @return mixed
     */
    public function getEstVivant()
    {
        return $this->EstVivant;
    }

    /**
     * @param mixed $EstVivant
     */
    public function setEstVivant($EstVivant)
    {
        $this->EstVivant = $EstVivant;
    }

    public function subitDegats()
    {
        $this->EstVivant = false;
    }

    public function LanceLeDe()
    {
        return $this->de->LanceLeDe();
    }

    public function Attaque(Joueur $joueur)
    {
        $lanceMonstre = $this->LanceLeDe();
        $lanceJoueur = $joueur->LanceLeDe();
        if($lanceMonstre>$lanceJoueur)
            $joueur->SubitDegats(self::DEGATS);
    }


}