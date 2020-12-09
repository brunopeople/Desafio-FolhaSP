<?php

namespace AstronautasPerdidos;

class Navegador
{
    private $pontosCombinados = 0;

    public function addPassgeiros(int $pontos): Navegador
    {
        $this->pontosCombinados = $pontos;
        return $this;
    }

    public function calcularDestino(ContratoSystemaSolar $systemaSolar)
    {
        $proximaParada = null;
        foreach($systemaSolar->getNomeSystema() as $systema){
            $totalpontos = 1;
            foreach(str_split($systema) as $v){
                $pontos = $systemaSolar->getValueLetter($v);
                $totalpontos = $pontos > 0 ? $totalpontos * $pontos : $totalpontos;
            }

            if($this->pontosCombinados > 0 && ceil($totalpontos % $this->$pontosCombinados)== 0) {
                printf('Saudações Astronautas e Engenheiros, esta espaçonave vai ficar aqui neste sistema %s: %s', $system, PHP_EOL);
            break;
            
            }
            printf('Saudações! Senhores Engenheiros acabamos de passar pelo Sistema %s: %s', $systema, PHP_EOL);
            sleep(1);
        };

        return $proximaParada;
    }
}