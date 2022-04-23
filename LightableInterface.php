<?php 



interface LigthableInterface 

{
    /////////méthode switchOn et switchOff/////

    public function switchOn(bool $light) : bool;
    public function switchOff(bool $light): bool;
}