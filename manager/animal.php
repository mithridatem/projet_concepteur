<?php
   
    class FonctionAnimal extends Animal{

        //Méthode 
        public function vitesse(){
            return $this->getNbrPattes()*$this->getTaille();
        }
    }
?>