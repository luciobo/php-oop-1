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


    /**
     * Get the value of titolo
     */ 
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set the value of titolo
     *
     * @return  self
     */ 
    public function setTitolo($_titolo)
    {
        $this->titolo = $_titolo;

        return $this;
    }

    /**
     * Get the value of genere
     */ 
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * Set the value of genere
     *
     * @return  self
     */ 
    public function setGenere($_genere)
    {
        $this->genere = $_genere;

        return $this;
    }

    /**
     * Get the value of descrizione
     */ 
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set the value of descrizione
     *
     * @return  self
     */ 
    public function setDescrizione($_descrizione)
    {
        $this->descrizione = $_descrizione;

        return $this;
    }

    /**
     * Get the value of attori
     */ 
    public function getAttori()
    {
        return $this->attori;
    }

    /**
     * Set the value of attori
     *
     * @return  self
     */ 
    public function setAttori($_attori)
    {
        $this->attori = $_attori;

        return $this;
    }
}
