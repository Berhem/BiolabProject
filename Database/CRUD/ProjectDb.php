<?php
//Kopieer deze template en pas deze aan naargelang de benodigde functionaliteit
include_once 'Data/Project.php';
include_once 'Database/Verbinding/DatabaseFactory.php';

class ProjectDb {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Project");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Project WHERE Id=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($project) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Project(Titel, Omschrijving, Verantwoordelijke, Doelgroep, Technieken, Links, TitelEng, OmschrijvingEng, DoelgroepEng, TechniekenEng) VALUES ('?','?','?','?','?','?','?','?','?','?')",
            array($project->Titel, $project->Omschrijving, $project->Verantwoordelijke, $project->Doelgroep, $project->Technieken, $project->Links, $project->TitelEng, $project->OmschrijvingEng, $project->DoelgroepEng, $project->TechniekenEng));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Project where Id=?", array($id));
    }

    public static function delete($project) {
        return self::deleteById($project->Id);
    }

    public static function update($project) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Project SET Titel='?',Omschrijving='?',Verantwoordelijke='?',Doelgroep='?',Technieken='?',Links='?',TitelEng='?',OmschrijvingEng='?',DoelgroepEng='?',TechniekenEng='?' WHERE Id=?", 
            array($project->Titel, $project->Omschrijving, $project->Verantwoordelijke, $project->Doelgroep, $project->Technieken, $project->Links,$project->TitelEng, $project->OmschrijvingEng, $project->DoelgroepEng, $project->TechniekenEng, $project->Id));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Project($databaseRij['Id'], $databaseRij['Titel'], $databaseRij['Omschrijving'], $databaseRij['Verantwoordelijke'], $databaseRij['Doelgroep'], $databaseRij['Technieken'], $databaseRij['Links'], $databaseRij['TitelEng'], $databaseRij['OmschrijvingEng'], $databaseRij['DoelgroepEng'], $databaseRij['TechniekenEng']);
    }

}
