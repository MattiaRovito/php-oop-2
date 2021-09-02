<?php

require_once 'user.php';





class PremiumUser extends NormalUser {

    public $premio;

    public function setPremio($_premio){
        $this->premio = $_premio;
    }

    public function getPremio(){
        return $this->premio;
    }


}

