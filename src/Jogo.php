<?php

class Jogo
{
    public $pontos = 0;

    public function lancar($jogada1, $jogada2)
    {
        $this->pontos+= $jogada1 + $jogada2;
    }
}