<?php 

class Indirizzo {
    private $citta;
    private $indirizzo;
    private $codicePostale;
    private $stato;
    private $regione;

    function __construct($citta, $indirizzo, $codicePostale, $stato, $regione ){
        
        $this->setCitta($citta);
        $this->setIndirizzo($indirizzo);
        $this->setCodicePostale($codicePostale);
        $this->setStato($stato);
        $this->setRegione($regione);


    }





    public function getCitta()
    {
        return $this->citta;
    }


    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }


    public function getIndirizzo()
    {
        return $this->indirizzo;
    }


    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }


    public function getCodicePostale()
    {
        return $this->codicePostale;
    }


    public function setCodicePostale($codicePostale)
    {
        $this->codicePostale = $codicePostale;

        return $this;
    }


    public function getStato()
    {
        return $this->stato;
    }


    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }


    public function getRegione()
    {
        return $this->regione;
    }


    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    public function IndirizzoCompleto() {
    return "Titolo: " . $this->citta . ", Indirizzo: " . $this->indirizzo ;
    }

}