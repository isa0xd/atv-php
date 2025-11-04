<?php

class Participacao extends Instrumento {
    
    public function getNotaFinal()
    {
        $notaFinal = $this->getNota();
        if($notaFinal > 10){
            return 10;
        }else{
            return $notaFinal;
            
        }
    }
}