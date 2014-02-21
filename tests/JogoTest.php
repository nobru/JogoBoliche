<?php

include "../src/Jogo.php";

class JogoTest extends PHPUnit_Framework_TestCase
{
    public $jogo;

    public function setUp()
    {
        $this->jogo = new Jogo;
    }

    public function lancar($jogada1, $jogada2, $lances)
    {
        for ($x=0; $x < $lances; $x++) {
            $this->jogo->lancar($jogada1, $jogada2);
        }
    }

    public function testDeveRetornarResultado0QuandoTodasBolasNaCanaleta()
    {
        $this->lancar(0, 0, 10);
        $this->assertEquals(0, $this->jogo->pontos);
    }

    public function testDeveRetornarResultado40QuantoTodasJogadas2()
    {
        $this->lancar(2, 2, 10);
        $this->assertEquals(40, $this->jogo->pontos);
    }

    /**
     * @expectedException Exception
     */
    public function testDeveRetornarErroQuandoJogadasMaiorQue10()
    {
        $this->jogo->lancar(0, 0, 11);
    }
}