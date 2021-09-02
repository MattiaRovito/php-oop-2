<?php





class NormalUser {
    protected $name;
    protected $surname;
    protected $card = 3; 
    protected $sconto = 0;
    // protected $card = 'Basic';
    // protected $cart = 0;


    function __construct($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setCard($card){
        if($card == 1){
            $this->sconto = 10;
        } elseif($card == 2){
            $this->sconto = 20;
        } else{
            $this->sconto = 30;
        }
    }

    public function getCard(){
        // return $this-> card;
        return $this-> sconto;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }


    // public function addToCart($_cart){
    //     $this->cart += $_cart;
    // }

    // public function getTotal(){
    //     if($this->card == 'Basic'){
    //         return $this->cart;
    //     }
        
    // }


}