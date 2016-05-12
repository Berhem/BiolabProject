<?php

class Afwezigheid
{

    public $Id;
    public $Afwezige;
    public $StartDatum;
    public $EindDatum;

    public function __construct( $Id, $Afwezige, $StartDatum, $EindDatum) {
        $this->Id = $Id;
        $this->Afwezige = $Afwezige;
        $this->StartDatum =$StartDatum;
        $this->EindDatum = $EindDatum;
    }
}