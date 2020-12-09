<?php

namespace  AstronautasPerdidos;

/**
 * @ Class do $SystemaSola
 * @package AstrounautasPerdidos
 */

 class SystemaSolar implements ContratoSystemaSolar{
     private $arrayLetras = [
         'A' => 1,
         'E' => 2,
         'I' => 3,
         'O' => 5,
         'U' => 8
     ];

     private $nomes = [];

     /**
      * método contructor
      * @param array $nomesSystemas
      */

      public function __contruct(array $nomesSystemas = [])
      {
          $this->$nomes = $nomesSystemas;
      }

     /**
      * Método getNomeSystema 
      * retorno todos os nomes dos systemas solares em um array
      * @return array
      */

      public function getNomeSystema(): array
      {
          return $this->nomes;
      }

      public function getLetras($letras): int
      {
          $letras = strtoupper($letras);
          return isset($this->arrayLetras[$letras]) ? $this->arrayLetras[$letras] : 0;
      }
    }
 