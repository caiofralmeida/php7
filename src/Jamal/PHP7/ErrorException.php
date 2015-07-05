<?php

namespace Jamal\PHP7;

use Error;

class ErrorException
{
    public function tratarErro()
    {
        $objeto = null;

        try {
            $objeto->naoSouUmObjeto(); # vish...
        } catch (Error $e) {
            echo $e->getMessage();
        }

        echo "\nOpaa fui salvo :)\n";
    }
}

$error = new ErrorException();
$error->tratarErro();
