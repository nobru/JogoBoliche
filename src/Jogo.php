<?php

class Jogo
{
    public $pontos = 0;
    public $jogadas = 0;

    public function lancar($jogada1, $jogada2)
    {
        if ($this->jogadas == 10) {
            throw new Exception("Quantidade de jogadas excedido");
        }

        $this->pontos+= $jogada1 + $jogada2;
        $this->jogadas++;
    }
}