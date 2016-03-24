<?php

class Project {
    public $ProjectId;
    public $Titel;
    public $Datum;
    public $AdminId;
    public $Text;

    public function __construct($ProjectId, $Titel, $Datum, $AdminId, $Text) {
        $this->ProjectId = $ProjectId;
        $this->Titel = $Titel;
        $this->Datum = $Datum;
        $this->AdminId = $AdminId;
        $this->Text = $Text;
    }

    //Extra functionaliteit kan je hier schrijven
}
