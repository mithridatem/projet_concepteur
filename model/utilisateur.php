<?php
    class Utilisateur{
        /*--------------------------------------------------
                            Attributs
        --------------------------------------------------*/
        private $id_util;
        private $name_util;
        private $first_name_util;
        private $mail_util;
        private $mdp_util;
        private $img_util;
        private $statut_util;
        private $id_role;
        /*--------------------------------------------------
                        Getters And Setters
        --------------------------------------------------*/
        //GETTERS
        public function getIdUtil(){
            return $this->id_util;
        }
        public function getNameUtil(){
            return $this->name_util;
        }
        public function getFirstNameUtil(){
            return $this->first_name_util;
        }
        public function getMailUtil(){
            return $this->mail_util;
        }
        public function getMdpUtil(){
            return $this->mdp_util;
        }
        public function getImgUtil(){
            return $this->id_util;
        }
        public function getStatutUtil(){
            return $this->statut_util;
        }
        public function getIdRole(){
            return $this->id_role;
        }
        
        
    }

?>
