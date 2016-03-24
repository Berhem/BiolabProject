<?php

class Project {
    public $projectId;
    public $titel;
    public $datum;
    public $adminId;
    public $text;

    public function __construct($projectId, $titel, $datum, $adminId, $text) {
        $this->projectId = $projectId;
        $this->titel = $titel;
        $this->datum = $datum;
        $this->adminId = $adminId;
        $this->text = $text;
    }

    //Extra functionaliteit kan je hier schrijven
}
?>