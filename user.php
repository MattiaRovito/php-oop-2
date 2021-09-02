<?php





class NormalUser {
    protected $name;
    protected $surname; 
    protected $card;


    function __construct ($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setCard($_card){
        $this->card = $_card;
    }

    public function getCard(){
        return $this-> card;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }




}