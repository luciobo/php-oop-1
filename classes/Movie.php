<?php 

class Movie {

    private $titolo;
    private $genere;
    private $descrizione;
    private $attori;

    function __construct($_titolo, $_genere, $_descrizione, $_attori) {

    
        $this->setTitolo($_titolo);
        $this->setGenere($_genere);
        $this->setDescrizione($_descrizione);
        $this->setAttori($_attori);


}



    public function getTitolo()
    {
        return $this->titolo;
    }


    public function setTitolo($_titolo)
    {
        $this->titolo = $_titolo;

        return $this;
    }


    public function getGenere()
    {
        return $this->genere;
    }


    public function setGenere($_genere)
    {
        $this->genere = $_genere;

        return $this;
    }


    public function getDescrizione()
    {
        return $this->descrizione;
    }


    public function setDescrizione($_descrizione)
    {
        $this->descrizione = $_descrizione;

        return $this;
    }


    public function getAttori()
    {
        return $this->attori;
    }


    public function setAttori($_attori)
    {
        $this->attori = $_attori;

        return $this;
    }


}
