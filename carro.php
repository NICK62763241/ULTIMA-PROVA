<?php

class Carro
{
    public $cor = "Vermelho";
    public $numeroDeRodas = "4 rodas";
    public $funcao = "Andar";
    public $espacoDeLocamocao = "Terrestre";
    public $estado = "Movimento";

    public function locomover()
    {
        echo "A cor deste carro é: {$this->cor}<br>";
        echo "Este carro possui: {$this->numeroDeRodas}<br>";
    }
    public function andar()
    {
        echo "Sua Função é: {$this->funcao}<br>";
        echo "Ele se movimenta pelo espaço: {$this->espacoDeLocamocao}<br>";
    }
    public function estado()
    {
        echo "Este carro se encontra em estado de: {$this->estado}<br>";
    }
}
$carro = new Carro();
$carro->locomover();
$carro->andar();
$carro->estado();