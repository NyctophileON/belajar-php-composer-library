<?php

namespace TestComposer\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->name";
    }
}