<?php

class Foo
{
    final const XX = "Foo";
}

class Bar extends Foo
{
    // const XX = "Bar"; // Error
}

var_dump(Bar::XX);