<?php

class Type{
    private $id_type;
    private $name_type;


    public function get_id_type():INT{
        return $this->id_type;
    }
    public function set_id_type($value):VOID{
        $this->id_type = $value;
    }
    public function get_name_type():INT{
        return $this->name_type;
    }
    public function set_name_type($value):VOID{
        $this->name_type = $value;
    }
}