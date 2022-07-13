<?php

  class Comment{

    private $id_art;
    private $id_util;
    private $date_commentaire;
    private $commentaire;
    
    public function __construct($id_art, $id_util, $commentaire){
      $this->id_art = $id_art;
      $this->id_util = $id_util;
      $this->commentaire = $commentaire;
    }


    /**
     * Get the value of id_art
     */ 
    public function getId_art()
    {
      return $this->id_art;
    }

    /**
     * Set the value of id_art
     *
     * @return  self
     */ 
    public function setId_art($id_art)
    {
      $this->id_art = $id_art;

      return $this;
    }

    /**
     * Get the value of id_util
     */ 
    public function getId_util()
    {
      return $this->id_util;
    }

    /**
     * Set the value of id_util
     *
     * @return  self
     */ 
    public function setId_util($id_util)
    {
      $this->id_util = $id_util;

      return $this;
    }

    /**
     * Get the value of date_commentaire
     */ 
    public function getDate_commentaire()
    {
      return $this->date_commentaire;
    }

    /**
     * Set the value of date_commentaire
     *
     * @return  self
     */ 
    public function setDate_commentaire($date_commentaire)
    {
      $this->date_commentaire = $date_commentaire;

      return $this;
    }

    /**
     * Get the value of commentaire
     */ 
    public function getCommentaire()
    {
      return $this->commentaire;
    }

    /**
     * Set the value of commentaire
     *
     * @return  self
     */ 
    public function setCommentaire($commentaire)
    {
      $this->commentaire = $commentaire;

      return $this;
    }
  }

?>