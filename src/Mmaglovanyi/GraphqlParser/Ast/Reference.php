<?php
/**
 * @author Paweł Dziok <pdziok@gmail.com>
 */

namespace Mmaglovanyi\GraphqlParser\Ast;


class Reference {

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}