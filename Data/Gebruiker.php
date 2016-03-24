<?php


class Gebruiker
{

    public $AdminId;
    public $Naam;
    public $Voornaam;
    public $Email;
    public $Wachtwoord;

    public function __construct($AdminId, $Naam, $Voornaam, $Email, $Wachtwoord) {
        $this->AdminId = $AdminId;
        $this->Naam = $Naam;
        $this->Voornaam = $Voornaam;
        $this->Email = $Email;
        $this->Wachtwoord = $Wachtwoord;
    }

    //Extra functionaliteit kan je hier schrijven
}
