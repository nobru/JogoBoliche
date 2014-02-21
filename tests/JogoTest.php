<?php

include "../src/Jogo.php";

class JogoTest extends PHPUnit_Framework_TestCase
{
    public function testDeveRetornarResultado0QuandoTodasBolasNaCanaleta()
    {
        $jogo = new Jogo;

        for($x = 0; $x < 10; $x++) {
            $jogo->lancar(0, 0);
        }

        $this->assertEquals(0, $jogo->pontos);
    }

    public function testDeveRetornarResultado40QuantoTodasJogadas2()
    {
        $jogo = new Jogo;

        for($x = 0; $x < 10; $x++) {
            $jogo->lancar(2, 2);
        }

        $this->assertEquals(40, $jogo->pontos);
    }
}