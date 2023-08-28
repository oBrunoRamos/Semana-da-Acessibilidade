<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula5/model/EstudanteModel.php';

class EstudanteController{

    public function listarController(){
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listarModel();

        $_REQUEST['estudantes'] = $estudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula5/view/EstudanteView.php';
    }

    public function salvar(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once $_SERVER['DOCUMENT_ROOT'].'/aula5/view/EstudanteForm.php';
        
        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost:8081/aula5/?controller=Estudante&acao=listarController');
            exit();
        }
    }
};
