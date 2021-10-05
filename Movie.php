<?php

class Movie
{
    // proprietà della classe
    public $title;
    public $director;
    public $genre;
    public $year;
    public $country;
    public $vote;

    // costruttore dell'istanza
    public function __construct($_title, $_genre, $_year, $_country, $_vote, $_director = "anonimo")
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->country = $_country;
        $this->vote = $_vote;
        $this->director = $_director;
    }

    //metodo della classe
    public function getReview()
    {
        return "Il film " . $this->title . " ha ricevuto una valutazione di " . $this->vote . "/5";
    }
}
