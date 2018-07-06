<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:14
 */

namespace Entity;

class Joueur
{
    private $de;
    private $pointDeVie;

    public function __construct($pointDeVie)
    {
        $this->de = new De();
        $this->pointDeVie = $pointDeVie;
    }

    public function EstVivant()
    {
        return $this->pointDeVie > 0;
    }

    public function Attaque(MonstreFacile $monstre)
    {
        $lanceJoueur = $this->LanceLeDe();
        $lanceMonstre = $monstre->LanceLeDe();
        if($lanceJoueur >= $lanceMonstre){
            $monstre->subitDegats();
        }
    }

    public function LanceLeDe()
    {
        return $this->de->LanceLeDe();
    }

    public function SubitDegats(int $degats)
    {
      if(!$this->BouclierFonctionne())
          $this->pointDeVie -= $degats;
    }

    private function BouclierFonctionne():bool{
        return $this->de->LanceLeDe() <= 2;
    }

}