<?php

namespace JamalTest\PHP7;

use PHPUnit_Framework_TestCase;
use Jamal\PHP7\OperadorEspacoNave;

class OperadorEspacoNaveTest extends PHPUnit_Framework_TestCase
{
    protected $operadorEspacoNave;

    public function setUp()
    {
        $this->operadorEspacoNave = new OperadorEspacoNave();
    }

    public function testPassandoDoisNumerosIguaisRetornaZero()
    {
        $this->assertEquals(0, $this->operadorEspacoNave->medir(10, 10));
    }

    public function testPassandoNumeroDaEsquerdaMaiorQueDaDireitaRetornaUm()
    {
        $this->assertEquals(1, $this->operadorEspacoNave->medir(10, 5));
    }

    public function testPassandoNumeroDaEsquerdaMenorQueDaDireitaRetornaMenosUm()
    {
        $this->assertEquals(-1, $this->operadorEspacoNave->medir(5, 6));
    }
}
