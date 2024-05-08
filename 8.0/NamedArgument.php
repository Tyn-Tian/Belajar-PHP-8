<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Chris", "Ti", "An");
// sayHello("Chris", "Tian"); Error

sayHello(last: "An", first: "Chris", middle: "Ti");
sayHello(first: "Chris", last: "An", middle: "");