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
        for ($index = 0; $index < $resultaat['num_rows']; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    /*public static function getAllByVoornaam($voornaam) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Persoon WHERE Voornaam='?'", array($voornaam));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }*/

    public static function getById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Project WHERE ProjectId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function getByAdminId($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Project WHERE AdminId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($project) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Project(Titel, Text) VALUES ('?','?')", array($project->Titel, $project->Text));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Project where ProjectId=?", array($id));
    }

    public static function delete($project) {
        return self::deleteById($project->ProjectId);
    }

    public static function update($project) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Project SET Titel='?',Text='?' WHERE ProjectId=?", array($project->Titel, $project->Text, $project->ProjectId));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Project($databaseRij['ProjectId'], $databaseRij['Titel'], $databaseRij['Datum'], $databaseRij['AdminId'], $databaseRij['Text']);
    }

}
