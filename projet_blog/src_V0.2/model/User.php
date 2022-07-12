<?php
class User{
    private STRING $name_util;
    private STRING $first_name_util;
    private STRING $mail_util;
    private STRING $mdp_util;
    private STRING $img_util;

    function __construct($name_util, $first_name_util, $mail_util, $mdp_util, $img_util)
    {
        $this->name_util = $name_util;
        $this->first_name_util = $first_name_util;
        $this->mail_util = $mail_util;
        $this->mdp_util = $mdp_util;
        $this->img_util = $img_util;
    }

    function get_name_util():STRING{
        return $this->name_util;
    }
    function set_name_util($value):STRING{
        return $this->name_util = $value;
    }

    function get_first_name_util():STRING{
        return $this->first_name_util;
    }
    function set_first_name_util($value):STRING{
        return $this->first_name_util = $value;
    }

    function get_mail_util():STRING{
        return $this->mail_util;
    }
    function set_mail_util($value):STRING{
        return $this->mail_util = $value;
    }

    function get_mdp_util():STRING{
        return $this->mdp_util;
    }
    function set_mdp_util($value):STRING{
        return $this->mdp_util = $value;
    }
    function get_img_util():STRING{
        return $this->img_util;
    }
    function set_img_util($value):STRING{
        return $this->img_util = $value;
    }
}
