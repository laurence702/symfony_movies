<?php

namespace App\Tests;

use App\Entity\Actor;
use App\Entity\Movie;
use PHPUnit\Framework\TestCase;

class ActorTest extends TestCase
{
    public function testActorEntity(): void
    {
        $actor = new Actor();
        $name = 'John Doe';

        $actor->setName($name);

        $this->assertSame($name, $actor->getName());
    }

    public function testMovieActorRelationship(): void
    {
        $movie = new Movie();
        $actor = new Actor();

        $actor->addMovie($movie);

        $this->assertTrue($actor->getMovies()->contains($movie));
        $this->assertTrue($movie->getActors()->contains($actor));

        $actor->removeMovie($movie);

        $this->assertFalse($actor->getMovies()->contains($movie));
        $this->assertFalse($movie->getActors()->contains($actor));
    }
}
