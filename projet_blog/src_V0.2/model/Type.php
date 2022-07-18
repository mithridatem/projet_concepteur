<?php

class Type{
    private ?INT $id_type;
    private ?STRING $name_type;
    private ?STRING $img_type;

    function __construct($id_type, $name_type, $img_type)
    {
        $this->id_type = $id_type;
        $this->name_type = $name_type;
        $this->img_type = $img_type;

    }

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
    public function get_img_type():INT{
        return $this->img_type;
    }
    public function set_img_type($value):VOID{
        $this->img_type = $value;
    }
}