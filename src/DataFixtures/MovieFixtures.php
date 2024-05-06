<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie1 = new Movie();
        $movie1->setTitle('The Dark Knight');
        $movie1->setDescription('This is a nice action movie');
        $movie1->setReleaseYear(2009);
        $movie1->setImagePath('https://www.hollywoodreporter.com/wp-content/uploa…he_dark_knight_-_h_-_2018.jpg?w=1296&h=730&crop=1');
        // Add actor to pivot table
        $movie1->addActor($this->getReference('actor_1'));
        $movie1->addActor($this->getReference('actor_2'));
        $manager->persist($movie1);


        $movie2 = new Movie();
        $movie2->setTitle('Anikulapo');
        $movie2->setDescription('The story of Saro, the cloth weaver ');
        $movie2->setReleaseYear(2023);
        $movie2->setImagePath('https://en.wikipedia.org/wiki/An%C3%ADk%C3%BAl%C3%A1p%C3%B3#/media/File:An%C3%ADk%C3%BAl%C3%A1p%C3%B3_poster.jpeg');
        // Add actor to pivot table
        $movie2->addActor($this->getReference('actor_2'));
        $movie2->addActor($this->getReference('actor_3'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
