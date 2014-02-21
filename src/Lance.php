<?php

class Lance
{
    public $jogada1 = 0;
    public $jogada2 = 0;
    public $isSpare = false;

    public function adicionar($jogada1, $jogada2)
    {
        $this->jogada1 = $jogada1;
        $this->jogada2 = $jogada2;

        if ($jogada1 + $jogada2 == 10) {
            $this->isSpare = true;
        }
    }
}