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

    public function printProp() {
        foreach(get_object_vars($this) as $key => $value) {
            echo "$key: $value <br>";
        }
    }
}


$movie1 = new Movie('Star wars', 'science-fiction', 'George Lucas', 775);
$movie2 = new Movie('Dune', 'science-fiction', 'David Lynch', 37.9);

$movie1->printProp();
echo '<br>';
echo $movie1->getTitle() . '<br>';
echo $movie1->director . '<br>';

echo '<br>';

echo $movie2->printProp();