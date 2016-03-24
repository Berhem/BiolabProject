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

    public static function getAllByVoornaam($voornaam) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Persoon WHERE Voornaam='?'", array($voornaam));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Persoon WHERE PersoonId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function insert($persoon) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Persoon(Voornaam, Achternaam) VALUES ('?','?')", array($persoon->voornaam, $persoon->achternaam));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Persoon where PersoonId=?", array($id));
    }

    public static function delete($persoon) {
        return self::deleteById($persoon->persoonId);
    }

    public static function update($persoon) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Persoon SET Voornaam='?',Achternaam='?' WHERE PersoonId=?", array($persoon->voornaam, $persoon->achternaam, $persoon->persoonId));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Persoon($databaseRij['PersoonId'], $databaseRij['Voornaam'], $databaseRij['Achternaam']);
    }

}
