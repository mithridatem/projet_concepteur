<?php
    class Animal{
        //attributs
        private $nom;
        private $nbrPattes = 4;
        private $taille;
        
        //constructeur
        public function __construct($nom, $taille){
            $this->nom = $nom;
            $this->taille = $taille;
        }

        //getter and setter
        public function getNom():string{
            return $this->nom;
        }
        public function getNbrPattes():int{
            return $this->nbrPattes;
        }
        public function getTaille():float{
            return $this->taille;
        }
        public function setNom($nom):void{
            $this->nom = $nom;
        }
        public function setNbrPattes($nbrPattes):void{
            $this->nbrPattes = $nbrPattes;
        }
        public function setTaille($taille):void{
            $this->taille = $taille;
        }
    }


?>