<?php

namespace Aimensasi\Jokes\Tests;

use Aimensasi\Jokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**  @test */
    public function it_returns_random_joke()
    {
        $jokesArr = [
            'randome joke A',
            'randome joke B',
            'randome joke C',
            'randome joke D',
            'randome joke E',
        ];
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokesArr);
    }
}
