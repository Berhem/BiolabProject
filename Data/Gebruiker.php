<?php


class Gebruiker
{

    public $Id;
    public $Naam;
    public $Voornaam;
    public $Email;
    public $Wachtwoord;
    public $Afbeelding;
    public $Functie;
    public $Bio;

    public function __construct($Id, $Naam, $Voornaam, $Email, $Wachtwoord, $Afbeelding, $Functie, $Bio) {
        $this->Id = $Id;
        $this->Naam = $Naam;
        $this->Voornaam = $Voornaam;
        $this->Email = $Email;
        $this->Wachtwoord = $Wachtwoord;
        $this->Afbeelding = $Afbeelding;
        $this->Functie = $Functie;
        $this->Bio = $Bio;
    }

    //Extra functionaliteit kan je hier schrijven
}
