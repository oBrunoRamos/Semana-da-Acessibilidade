<?php

class Estudante {

    private string $nome;

    private int $idade;

     /** Tipos de variaveis
      * bool - boolean
      * float - number/float
      * Datetime
      */

    public function __construct(int $idade, string $nome){

        $this->idade = $idade;
        $this->nome = $nome;

    }

    public function setNome(string $n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade(int $i){
        $this->idade = $i;
    }

    public function getIdade(){
        return $this->idade;
    }



}

echo '<pre>';
$estudante = new Estudante(nome:"Lucas", idade:20);


var_dump($estudante);