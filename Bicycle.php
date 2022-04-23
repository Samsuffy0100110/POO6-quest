<?php

class Bike extends Vehicle implements LigthableInterface 
{

    
    public function switchOn(bool $light) : bool
    {
        if ($this->currentSpeed > 10) {

            return true;
        }
    }
    

    public function switchOff(bool $light) : bool
    {
        return false;
    }
   
}