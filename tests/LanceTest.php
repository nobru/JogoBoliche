<?php

include "../src/Lance.php";

class LanceTest extends PHPUnit_Framework_TestCase
{
    public $lance;

    public function setUp()
    {
        $this->lance = new Lance;
    }

    public function testDeveAdicionarDuasJogadasDerrubando2Pinos()
    {
        $this->lance->adicionar(2, 2);

        $this->assertEquals(2, $this->lance->jogada1);
        $this->assertEquals(2, $this->lance->jogada2);
    }

    public function testDeveTornarLanceSpareQuandoDuasJogadasDerrubam10Pinos()
    {
        $this->lance->adicionar(2, 8);

        $this->assertTrue($this->lance->isSpare);
    }
}