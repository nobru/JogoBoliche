<?php

class Jogo
{
    public $pontos = 0;

    public function lancar($lance1, $lance2)
    {
        $this->pontos+= $lance1 + $lance2;
    }
}