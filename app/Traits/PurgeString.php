<?php

namespace App\Traits;

trait PurgeSpring
{

    public function __construct() {

    }

    public function clear_string($string){
        $purge_string = preg_replace('/[0-9\@\.\;\""]+/', '', $string);
        $purge_string= strtolower($purge_string);
        return $purge_string;
    }

    public function find_space($string){
        $purge_string = str_replace(" ","|",$string);
        return $purge_string;
    }

    public function fonemas($word){
        $aux=$word;
        $i = strpos($aux, 'b');
	    $aux=$this->fonema_b($aux);
        $word=$word.'|'.$aux;
        return $word;
    }

    private function fonema_b ($aux){
        $i = strpos($aux, 'b');
	    $j=strlen($aux) -1;
        $j=$i-$j;
        $aux= (substr_replace($aux,'v', $i,$j));
        return $aux;
    }



    

}

