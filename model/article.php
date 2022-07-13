<?php
    class Article{
        //attributs
        private $id_art;
        private $name_art;
        private $content_art;
        private $date_art;
        private $id_type;
        //constructeur
        public function __construct(){  
        }
        //getter and setter
        public function getIdArt():int{
            return $this->id_art;
        }
        public function getNameArt():string{
            return $this->name_art;
        }
        public function getContentArt():string{
            return $this->content_art;
        }
        public function getDateArt():string{
            return $this->date_art;
        }
        public function getIdType():int{
            return $this->id_type;
        }
        public function setIdArt($id):int{
            $this->id_art;
        }
        public function setNameArt($name){
            $this->name_art = $name;
        }
        public function setContentArt($content){
            $this->content_art = $content;
        }
        public function setDateArt($date){
            $this->date_art = $date;
        }
        public function setIdType($id){
            $this->id_type = $id;
        }
    }
?>