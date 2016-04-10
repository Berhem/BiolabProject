<?php


class Gebruiker
{

    public $Id;
    public $Naam;
    public $Voornaam;
    public $Email;
    public $Wachtwoord;
    public $Afbeelding;

    public function __construct($Id, $Naam, $Voornaam, $Email, $Wachtwoord, $Afbeelding) {
        $this->Id = $Id;
        $this->Naam = $Naam;
        $this->Voornaam = $Voornaam;
        $this->Email = $Email;
        $this->Wachtwoord = $Wachtwoord;
        $this->Afbeelding = $Afbeelding;
    }

    //Extra functionaliteit kan je hier schrijven
}
