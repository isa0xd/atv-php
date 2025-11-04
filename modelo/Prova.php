<?php

class Prova extends Instrumento{

    public function getNotaFinal(){
        return $this->getNota() + ($this->getNota() * (30/100));
    }
}