<?php

class Movie {
    private $title;
    public $genre;
    public $director;
    public $boxOffice; // million of dollars

    public function __construct($title, $genre, $director, $boxOffice) {
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->boxOffice = $boxOffice;
    }

    public function getTitle() {
        return $this->title;
    }
}


$movie1 = new Movie('Star wars', 'science-fiction', 'George Lucas', 775);
$movie2 = new Movie('Dune', 'science-fiction', 'David Lynch', 37.9);

var_dump(get_object_vars($movie1));
echo $movie1->getTitle();
echo '<br>';
echo $movie1->director;

var_dump($movie2);