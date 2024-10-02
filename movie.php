<?php

class movie {
    // dichiaro le proprietà del film
     public $title;
     public $genre;
     public $director;
     public $boxOffice;
     public $year;

    // dichiaro il costruttore
    public function __construct($_title, $_genre, $_directors, $_boxOffice, $_year){
        $this ->title = $_title;
        $this ->genre = $_genre;
        $this ->director = $_directors;
        $this ->boxOffice = $_boxOffice;
        $this ->year = $_year;
     }
    // dichiaro un metodo per stampare le informazioni del film
    public function getDescription(){
        return "{$this->title} ({$this->year}), diretto da {$this->director}, è un film di genere {$this->genre}.";
    }

}
// istanze di tre oggetti della classe movie.pphp
$movie1 = new movie('Alien' , 'Horror', 'Ridley Scott', '78.900.000' ,'1979' );
$movie2 = new movie('Top Gun ', 'Azione' , 'Tony Scott' , '357.000.000', '1986' );
$movie3 = new movie('Avengers' , 'Azione' , 'Joss Whedon' , '2.798.000.000', '2012' );

//stampa dettagli dei film
echo $movie1 ->getDescription();
echo $movie2 ->getDescription();
echo $movie3 ->getDescription();



