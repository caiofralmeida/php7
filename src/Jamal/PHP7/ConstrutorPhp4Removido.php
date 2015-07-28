<?php

namespace Jamal\PHP7;

class ConstrutorPhp4Removido
{
    protected $data = 'nao passei pelo construtor';

    /**
     * os dados não serão atribuídos :(
     */
    public function ConstrutorPhp4Removido()
    {
        $this->data = 'objeto criado.';
    }

    public function __toString()
    {
        return $this->data;
    }
}

