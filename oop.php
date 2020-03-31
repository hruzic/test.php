<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Martin_{

    protected $napeti_Martin_;
    //nastavení napeti
    public function setNapeti_Martin_($napeti_Martin_){
        $this->napeti_Martin = $napeti_Martin;
    }
    //precteni napeti
    public function getNapeti_Martin() {
        return $this-> napeti_Martin;
    }
}
// class ustredna se dedi do abs. class 
class  ustredna_Martin extends ustredny_Martin{
   public $Napeti_Martin= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class 
interface iustredna_Martin extends ustredny_Martin{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Martin);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Martin::TYPE);
 var_dump ($Napeti_Martin);
?>
