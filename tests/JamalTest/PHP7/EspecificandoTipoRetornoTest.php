<?php

namespace JamalTest\PHP7;

use PHPUnit_Framework_TestCase;
use Jamal\PHP7\EspecificandoTipoRetorno;

class EspecificandoTipoRetornoTest extends PHPUnit_Framework_TestCase
{
    protected $tipoRetorno;

    public function setUp()
    {
        $this->tipoRetorno = new EspecificandoTipoRetorno();
    }

    public function testChamandoMetodoComRetornoEspecificado()
    {
        $esperado = new \stdClass();

        $this->assertEquals(
            $esperado,
            $this->tipoRetorno->criarStdClass()    
        );
    }

    /**
     * @expectedException TypeError
     * @expectedExceptionMessage Return value of Jamal\PHP7\EspecificandoTipoRetorno::criarNulo() must be an instance of stdClass, null returned in /vagrant/php7/src/Jamal/PHP7/EspecificandoTipoRetorno.php on line 16
     */
    public function testChamandoMetodoComRetornoNuloPoremEsperaUmStdClass()
    {
        $esperado = new \stdClass();
        $this->tipoRetorno->criarNulo();
    }
}
