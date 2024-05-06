<?php

namespace App\Tests;

use App\Entity\Movie;
use PHPUnit\Framework\TestCase;

class MovieTest extends TestCase
{
    public function testMovieEntity(): void
    {
        $movie = new Movie();
        $title = 'Test Movie';
        $releaseYear = 2022;
        $description = 'This is a test movie';
        $imagePath = '/path/to/image.jpg';

        $movie->setTitle($title);
        $movie->setReleaseYear($releaseYear);
        $movie->setDescription($description);
        $movie->setImagePath($imagePath);

        $this->assertSame($title, $movie->getTitle());
        $this->assertSame($releaseYear, $movie->getReleaseYear());
        $this->assertSame($description, $movie->getDescription());
        $this->assertSame($imagePath, $movie->getImagePath());
    }
}
