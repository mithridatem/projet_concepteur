<?php
class User{
    private ?INT $id_util;
    private ?STRING $name_util;
    private ?STRING $first_name_util;
    private ?STRING $mail_util;
    private ?STRING $mdp_util;
    private ?STRING $img_util;
    private ?INT $id_role = 2;

   public function __construct($name_util, $first_name_util, $mail_util, $mdp_util, $img_util)
    {
        $this->name_util = $name_util;
        $this->first_name_util = $first_name_util;
        $this->mail_util = $mail_util;
        $this->mdp_util = $mdp_util;
        $this->img_util = $img_util;
    }

    public function get_id_util():INT{
        return $this->id_util;
    }

    public function get_name_util():STRING{
        return $this->name_util;
    }

    public function set_name_util($value):VOID{
         $this->name_util = $value;
    }

    public function get_first_name_util():STRING{
        return $this->first_name_util;
    }

    public function set_first_name_util($value):VOID{
         $this->first_name_util = $value;
    }

    public function get_mail_util():STRING{
        return $this->mail_util;
    }

    public function set_mail_util($value):VOID{
         $this->mail_util = $value;
    }

    public function get_mdp_util():STRING{
        return $this->mdp_util;
    }

    public function set_mdp_util($value):VOID{
         $this->mdp_util = $value;
    }

    public function get_img_util():STRING{
        return $this->img_util;
    }

    public function set_img_util($value):VOID{
         $this->img_util = $value;
    }

    public function get_id_role():INT{
        return $this->id_role;
    }

    public function set_id_role($value):VOID{
         $this->id_role = $value;
    }


}
