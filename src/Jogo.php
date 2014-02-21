<?php

require "Lance.php";

class Jogo
{
    public $pontos = 0;
    public $jogadas = 0;
    public $lances = array();

    public function lancar($jogada1, $jogada2)
    {
        if ($this->jogadas == 10) {
            throw new Exception("Quantidade de jogadas excedido");
        }

        $lance = new Lance;
        $lance->adicionar($jogada1, $jogada2);
        $this->lances[] = $lance;

        $this->jogadas++;
    }

    public function getPontos()
    {
        foreach ($this->lances as $numero=>$lance) {
            
            if ($numero > 0) {
                $lanceAnterior = $this->lances[$numero-1];

                if ($lanceAnterior->isSpare) {
                    $this->pontos+= ($lance->jogada1 * 2) + $lance->jogada2;
                    continue;
                }
            }

            $this->pontos+= $lance->jogada1 + $lance->jogada2;
        }

        return $this->pontos;
    }
}