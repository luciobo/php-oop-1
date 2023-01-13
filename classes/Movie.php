<?php 

class Movie {

    private $titolo;
    private $genere;
    private $descxrizione;
    private $attori;



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
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

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
    public function setGenere($genere)
    {
        $this->genere = $genere;

        return $this;
    }

    /**
     * Get the value of descxrizione
     */ 
    public function getDescxrizione()
    {
        return $this->descxrizione;
    }

    /**
     * Set the value of descxrizione
     *
     * @return  self
     */ 
    public function setDescxrizione($descxrizione)
    {
        $this->descxrizione = $descxrizione;

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
    public function setAttori($attori)
    {
        $this->attori = $attori;

        return $this;
    }
}

?>