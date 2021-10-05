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
    public $box_office;

    // costruttore dell'istanza
    public function __construct($_title, $_genre, $_year, $_country, $_vote, $_box_office, $_director = "anonimo")
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->country = $_country;
        $this->vote = $_vote;
        $this->box_office = $_box_office;
        $this->director = $_director;
    }

    //metodi della classe
    public function get_review()
    {
        return $this->title . " ha ricevuto una valutazione di " . $this->vote . "/5";
    }

    public function get_takings()
    {
        return $this->title . " ha incassato un totale di " . $this->box_office . " di dollari";
    }
}
