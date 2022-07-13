<?php
    class Commenter{
        private $id_art;
        private $id_util;
        private $commentaire;
        private $date_commentaire ;
        
        public function getIdUtil():int{
            return $this->id_util;
        }
        public function getIdArt():int{
            return $this->id_art;
        }
        public function getCom():string{
            return $this->commentaire;
        }
        public function getDateCom(){
            return $this->date_commentaire;
        }
        public function setIdArt($value){
            $this->id_art = $value;
        }
        public function setIdUtil($value){
            $this->id_util = $value;
        }
        public function setCom($value){
            $this->commentaire = $value;
        }
        public function setDateCom($value){
            $this->date_commentaire = $value;
        }
    }

?>