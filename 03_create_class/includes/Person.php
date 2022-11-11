<?php


class Person
{
    protected $first = "Daniel";
    private $last = "Ouattara";
    private $age = 38;

    public function personFirst()
    {
        return $this->first;
    }
}

# ---------------------------------------------------------


class Pets extends Person
{
    public function owner()
    {
        return $this->first;
    }
}
