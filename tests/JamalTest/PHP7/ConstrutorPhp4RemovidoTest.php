<?php

namespace JamalTest\PHP7;

use PHPUnit_Framework_TestCase;
use Jamal\PHP7\ConstrutorPhp4Removido;

class ConstrutorPhp4RemovidoTest extends PHPUnit_Framework_TestCase
{
    public function testUsandoConstrutorPhp4NaoFunciona()
    {
        $objeto = new ConstrutorPhp4Removido();

        $this->assertEquals(
            'nao passei pelo construtor',
            $objeto
        );
    }
}
