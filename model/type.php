<?php
    class Type{
        private $id_type;
        private $name_type;

        public function getIdType():int{
            return $this->id_type;
        }
        public function getNameType():string{
            return $this->name_type;
        }
        public function setIdType($value):void{
            $this->id_type = $value;
        }
        public function setNameType($value):void{
            $this->name_type = $value;
        }
    }
?>