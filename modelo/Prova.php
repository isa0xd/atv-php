<?php

class Prova extends Instrumento{

    public function getNotaFinal(){
        $notaFinal = $this->getNota() + ($this->getNota() * (30/100));
        if($notaFinal > 10){
            return 10;
        }else{
            return $notaFinal;
            
        }
    }
}
