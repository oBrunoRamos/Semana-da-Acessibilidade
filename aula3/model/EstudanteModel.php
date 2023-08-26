<?php

class EstudanteModel{
    public function listarModel(): array{
        return [
            [
                'nome' => 'Lucas Saraiva'
            ],
            [
                'nome' => 'Carlos Eduardo'
            ]
        ];
    }
};

class ProfessorModel{
    public function listarModel(): array{
        return[
            [
                'nome' => 'Lucas Saraiva - PHP'
            ],
            [
                'nome' => 'Andrezza - LCP'
            ]
            ];
    }
};