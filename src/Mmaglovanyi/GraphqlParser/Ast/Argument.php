<?php
/**
 * @author Paweł Dziok <pdziok@gmail.com>
 */

namespace Mmaglovanyi\GraphqlParser\Ast;


class Argument {

    public $name;
    public $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}