<?php

class Comment {
    private ?INT $id_art;
    private ?INT $îd_util;
    private ?STRING $commentaire;
    private ?STRING $date_commentaire;

    function __construct($id_art, $id_util, $commentaire, $date_commentaire)
    {
        $this->id_art = $id_art;
        $this->id_util = $id_util;
        $this->commentaire = $commentaire;
        $this->date_commentaire = $date_commentaire;

    }

    public function get_id_art():INT{
        return $this->id_art;
    }

    public function set_id_art($value):VOID{
        $this->id_art = $value;
    }
    
    public function get_id_util():INT{
        return $this->id_util;
    }

    public function set_id_util($value):VOID{
        $this->id_util = $value;
    }

    public function get_commentaire():STRING{
        return $this->commentaire;
    }

    public function set_commentaire($value):VOID{
        $this->commentaire = $value;
    }

    public function get_date_commentaire():STRING{
        return $this->date_commentaire;
    }

    public function set_date_commentaire($value):VOID{
        $this->date_commentaire = $value;
    }
}