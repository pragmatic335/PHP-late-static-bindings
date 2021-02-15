<?php

abstract class DomainObject
{
    public static function create()
    {
        return new static(); //example PHP-late-static-bindings
    }
}

class Document extends DomainObject
{

}

class Dir extends DomainObject
{

}

var_dump(Dir::create());