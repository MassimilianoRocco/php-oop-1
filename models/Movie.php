<?php

class Movie{
    public $titolo;
    public $genere;
    public $piattaformaStreaming;

    public function __construct($titolo, $genere, $piattaformaStreaming){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->piattaformaStreaming = $piattaformaStreaming;
    }

    public function setPiattaformaStreaming($valore){
        $this->piattaformaStreaming = $valore;
    }
    public function getMovie(){
        return "Titolo: $this->titolo, Genere: $this->genere, Piattaforma: $this->piattaformaStreaming";
    }
}