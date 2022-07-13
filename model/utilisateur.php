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

        public function __construct($name_util, $first_name_util, $mail_util, $mdp_util)
        {
            $this->name_util = $name_util;
            $this->first_name_util = $first_name_util;
            $this->mail_util = $mail_util;
            $this->mdp_util = $mdp_util;
        }
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
            return $this->img_util;
        }
        public function getStatutUtil(){
            return $this->statut_util;
        }
        public function getIdRole(){
            return $this->id_role;
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
         * Set the value of name_util
         *
         * @return  self
         */ 
        public function setName_util($name_util)
        {
                $this->name_util = $name_util;

                return $this;
        }

        /**
         * Set the value of first_name_util
         *
         * @return  self
         */ 
        public function setFirst_name_util($first_name_util)
        {
                $this->first_name_util = $first_name_util;

                return $this;
        }

        /**
         * Set the value of mail_util
         *
         * @return  self
         */ 
        public function setMail_util($mail_util)
        {
                $this->mail_util = $mail_util;

                return $this;
        }

        /**
         * Set the value of img_util
         *
         * @return  self
         */ 
        public function setImg_util($img_util)
        {
                $this->img_util = $img_util;

                return $this;
        }

        /**
         * Set the value of statut_util
         *
         * @return  self
         */ 
        public function setStatut_util($statut_util)
        {
                $this->statut_util = $statut_util;

                return $this;
        }

        /**
         * Set the value of id_role
         *
         * @return  self
         */ 
        public function setId_role($id_role)
        {
                $this->id_role = $id_role;

                return $this;
        }
    }

?>
