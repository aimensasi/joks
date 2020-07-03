<?php

namespace Aimensasi\Jokes;

class JokeFactory
{
    protected $jokes = [
        'randome joke A',
        'randome joke B',
        'randome joke C',
        'randome joke D',
        'randome joke E',
    ];

    public function __construct(array $jokes = null)
    {
        $this->jokes = $jokes ?? $this->jokes;
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
