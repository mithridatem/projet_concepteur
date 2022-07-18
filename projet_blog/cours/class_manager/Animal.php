<?php

class Animal{
    #Attribut
    private STRING $nom;
    private INT $nbr_pattes  = 4;
    private MIXED $taille;

    #public l'élément est accessible de partout
    #private On peut s'en servir que dans la classe
    #protected Entre les deux, dans la classe et dans ses héritier 

    /**
     * On peut soit crée un constructeur, et on l'apelle pour instancier notre objet
     * par défaut PHP crée un constructeur vide
     */

    #constructeur
    #Les parametre sont indépendant des attribut déclarer plus haut
     public function __construct($nom, $nbr_pattes, $taille){
        $this->nom = $nom;
        $this->nbr_pattes = $nbr_pattes;
        $this->taille = $taille;
     }

     #getter and setter
     public function get_nom():STRING{
        return $this->nom;
     }

     public function set_nom($value):STRING{
        return $this->nom = $value;

     }

     public function get_nbr_pattes():INT{
        return $this->nbr_pattes;
     }

     public function set_nbr_pattes($value):STRING{
        return $this->nbr_pattes = $value;

     }

     public function get_taille():MIXED{
        return $this->taille;
     }

     public function set_taille($value):MIXED{
        return $this->nom = $value;

     }
}