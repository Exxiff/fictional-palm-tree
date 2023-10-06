<?php

declare(strict_types=1);

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getMovieInfo(): string
    {
        return "Title: $this->title, Studio: $this->studio,Rating $this->rating\n";
    }
}

class MovieCollection
{
    private array $movies;

    public function __construct(array $movies)
    {
        $this->movies = $movies;
    }

    public function getPG(): array
    {
        $moviesPg = [];

        foreach ($this->movies as $movie) {
            if ($movie->getRating() === 'PG') {
                $moviesPg[] = $movie;
            }
        }
        return $moviesPg;
    }
}

$movies = [
    new Movie('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'),
    new Movie('The Shawshank Redemption', 'Castle Rock Entertainment', 'R'),
    new Movie('The Godfather', 'Paramount Pictures', 'R'),
    new Movie('Shrek', 'DreamWorks Animation', 'PG'),
    new Movie('Harry Potter and the Sorcerer\'s Stone', 'Warner Bros.', 'PG'),
    new Movie('Frozen', 'Walt Disney Animation Studios', 'PG'),
    new Movie('The Lion King', 'Walt Disney Pictures', 'G'),
    new Movie('Despicable Me', 'Illumination Entertainment', 'PG'),
    new Movie('Zootopia', 'Walt Disney Pictures', 'PG'),
    new Movie('Moana', 'Walt Disney Pictures', 'PG')
];

echo "Movie list\n";

foreach ($movies as $movie) {
    echo "* " . $movie->getMovieInfo();
}

$movieCollection = new MovieCollection($movies);
$moviesPg = $movieCollection->getPG();

echo "PG movie list\n";

foreach ($moviesPg as $movie) {
    echo "* " . $movie->getMovieInfo();
}