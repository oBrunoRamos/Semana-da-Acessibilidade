<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/EstudanteModel.php';

class EstudanteController{

    public function listarController(){
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel -> listarModel();

        $_REQUEST['estudantes'] = $estudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/EstudanteView.php';
    }

    // public function salvar(){
    //     echo 'Estudante salvo com sucesso';
    // }
};

class ProfessorController{
    public function listarController(){
        $professorModel = new ProfessorModel();
        $professores = $professorModel -> listarModel();

        $_REQUEST['professor'] = $professores;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/ProfessorView.php';
    }
}