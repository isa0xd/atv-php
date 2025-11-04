<?php

require_once("modelo/Instrumento.php");
require_once("modelo/Participacao.php");
require_once("modelo/Prova.php");
require_once("modelo/Trabalho.php");


$instrumentos = array();

$inst = null;

for($i=1; $i<=3; $i++) {
    $tipo = readline("Informe o tipo de instrumento: \n 1- Prova, 2-Trabalho, 3-Participação \n");

    if($tipo == 1) {
        $inst = new Prova();
    } else if($tipo == 2) {
        $inst = new Trabalho();
    } elseif($tipo == 3) {
        $inst = new Participacao();
    }

    $inst->setNota(readline("Informe a nota: "));
    array_push($instrumentos, $inst);
}

//print_r($instrumentos);

//Foreach

foreach ($instrumentos as $int) {
    echo "O instrumento teve nota final de " . $int->getNotaFinal() . ".\n";
}
