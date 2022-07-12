<?php
class utilisateur{
    //attributs
    private $id_util;
    private $name_util;
    private $first_name_util;
    private $mail_util;
    private $mdp_util;
    private $img_util;
    private $statut_util;
    private $id_role;
    //constructeur
    public function __construct(){
    }

    //getter and setter
    public function getIdUtil():int{
        return $this->id_util;
    }
    public function getNameUtil()
    {
        return $this->name_util;
    }
    public function getFirstNameUtil()
    {
        return $this->first_name_util;
    }
    public function getMailUtil()
    {
        return $this->mail_util;
    }
    public function setIdUtil($id):int{
        return $this->id_util;
    }
    public function setNameUtil($name_util): void
    {
        $this->name_util = $name_util;
    }
    public function setFirstNameUtil($first_name_util): void
    {
        $this->first_name_util = $first_name_util;
    }
    public function setMailUtil($mail_util): void
    {
        $this->mail_util = $mail_util;
    }
    public function getMdpUtil()
    {
        return $this->mdp_util;
    }
    public function setMdpUtil($mdp_util): void
    {
        $this->mdp_util = $mdp_util;
    }
    public function getImgUtil()
    {
        return $this->img_util;
    }
    public function setImgUtil($img_util): void
    {
        $this->img_util = $img_util;
    }
    public function getStatutUtil()
    {
        return $this->statut_util;
    }
    public function setStatutUtil($statut_util): void
    {
        $this->statut_util = $statut_util;
    }
    public function setIdRole($id){
        $this->id_role = $id;
    }
}
?>