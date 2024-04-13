<?php

function sayHello(string $first, string $last)
{
}

function sum(int ...$value)
{
}

sayHello(
    "Chris",
    "Tian",
);

sum(
    1,
    3,
    5,
    7,
    7,
    3,
);

$array = [
    "first" => "Christian",
    "middle" => "Tian",
    "last" => "Tyn",
];
