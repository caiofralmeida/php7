<?php

namespace JamalTest\PHP7;

use PHPUnit_Framework_TestCase;

class ErrorExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Error
     * @expectedExceptionMessage Call to a member function naoExisto() on null
     */
    public function testChamandoMetodoEmUmObjetoInexistente()
    {
        $objeto = null;
        $objeto->naoExisto();
    }
}
