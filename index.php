<?php
//one more example late static bindings
abstract class DomainObject
{
    private $group;
    public function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function getGroup(): string
    {
        return 'default';
    }

    public static function create()
    {
        return new static(); //example PHP-late-static-bindings
    }
}


class User extends DomainObject
{

}

class Document extends DomainObject
{
    public static function getGroup(): string
    {
        return 'Documents';
    }
}

class SpreadSheet extends Document
{

}

var_dump(User::create());
var_dump(SpreadSheet::create());