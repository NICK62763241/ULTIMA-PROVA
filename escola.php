<?php

class Escola
{
    public $professor = "Edilson";
    public $materia = "Programação para internet";
    public $turno = " da Noite";
    public $andar = "Primeiro andar";
    public $rua = "AV. São Paulo";

    public function ensinar()
    {
        echo "O professor que está dando aula é: {$this->professor}<br>";
        echo "ele é o responsável pela matéria de: {$this->materia}<br>";
    }
    public function chorarDuranteAProva()
    {
        echo "o professor se encontra dando esta aula no turno: {$this->turno}<br>";
        echo "A aula está sendo realizada na sala que se encontra no: {$this->andar}<br>";
    }
    public function estudar()
    {
        echo "A escola está situada na avenida: {$this->rua}<br>";
    }
}
$escola = new Escola();
$escola->ensinar();
$escola->chorarDuranteAProva();
$escola->estudar();