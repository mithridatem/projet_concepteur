<?php

    class Method_animal extends Animal{
        //Method
        public function vitesse(){
            return $this->get_nbr_pattes() * $this->get_taille();
        }
    } 