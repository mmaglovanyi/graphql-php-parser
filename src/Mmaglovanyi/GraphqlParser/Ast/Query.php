<?php
/**
 * @author Paweł Dziok <pdziok@gmail.com>
 */

namespace Mmaglovanyi\GraphqlParser\Ast;


class Query {

    public $fieldList;

    public function __construct($fieldList = [])
    {
        $this->fieldList = $fieldList;
    }
}
