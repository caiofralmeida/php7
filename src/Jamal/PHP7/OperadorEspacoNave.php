<?php

namespace Jamal\PHP7;

/**
 * Com esse operador (<=>) é possivel verificar qual valor é maior.
 * retornando:
 * 1  - quando o valor da esquerda é maior
 * 0  - quando são iguais
 * -1 - quando o valor da direita é maior
 */
class OperadorEspacoNave
{
    public function medir($numero1, $numero2)
    {
        return ($numero1 <=> $numero2);
    }
}
