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
    // dichiaro un metodo
    public function yearsExit($currentYear){
        $currentYear = $currentYear - $this->year;
        return $currentYear;
    }
    public function print(){
        echo "Titolo: {$this->title} <br>";
        echo "Genere: {$this->genre} <br>";
        echo "Regista{$this->director} <br>";
        echo "Box-Office {$this->boxOffice} <br>";
        echo "Anno di Uscita {$this->year} <br>";
    }

}
$movie1 = new movie('Alien' , 'Horror', 'Ridley Scott', '78.900.000' ,'1979' );
$movie2 = new movie('Top Gun ', 'Azione' , 'Tony Scott' , '357.000.000', '1986' );
$movie3 = new movie('Avengers' , 'Azione' , 'Joss Whedon' , '2.798.000.000', '2012' );
