<?php
/**
 * Some comment
 */
class Foo{function foo(){}

    /**
     * @param Baz $baz
     */
    public function bar(Baz $baz)
    {
    }

    /**
     * @param Foobar $foobar
     */
    static public function foobar(Foobar $foobar)
    {
    }

    public function barfoo(Barfoo $barfoo)
    {
    }

    public function fooBaz($foo, $bar = null)
    {
    }

    public function bazFoo(array $somefoo, $somethingelse)
    {
    }
}

function &foobaz(Baz $somebaz)
{
}
