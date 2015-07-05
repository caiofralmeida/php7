<?php

namespace Jamal\PHP7;

use StdClass;

class EspecificandoTipoRetorno
{
    public function criarStdClass(): StdClass
    {
        return new StdClass();
    }

    /**
     * Esse metodo ira lançar um TypeError Exception, pois retorna 
     * um null sendo que espera um StdClass :)
     */
    public function criarNulo(): StdClass
    {
        return null;
    }
}
