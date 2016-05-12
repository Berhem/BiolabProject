<?php


class Project {
    public $Id;
    public $Titel;
    public $Omschrijving;
    public $Verantwoordelijke;
    public $Doelgroep;
    public $Technieken;
    public $Links;
    public $TitelEng;
    public $OmschrijvingEng;
    public $DoelgroepEng;
    public $TechniekenEng;

    public function __construct($Id, $Titel, $Omschrijving, $Verantwoordelijke, $Doelgroep, $Technieken, $Links,
                                $TitelEng, $OmschrijvingEng, $DoelgroepEng, $TechniekenEng) {
        $this->Id = $Id;
        $this->Titel = $Titel;
        $this->Omschrijving = $Omschrijving;
        $this->Verantwoordelijke = $Verantwoordelijke;
        $this->Doelgroep = $Doelgroep;
        $this->Technieken = $Technieken;
        $this->Links = $Links;
        $this->TitelEng = $TitelEng;
        $this->OmschrijvingEng = $OmschrijvingEng;
        $this->DoelgroepEng = $DoelgroepEng;
        $this->TechniekenEng = $TechniekenEng;
    }

    //Extra functionaliteit kan je hier schrijven
}
