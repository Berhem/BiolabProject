<?php
//Kopieer deze template en pas deze aan naargelang de benodigde functionaliteit
include_once 'Data/Gebruiker.php';
include_once 'Database/Verbinding/DatabaseFactory.php';

class GebruikerDb {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Gebruiker");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getAllByVoornaam($voornaam) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Gebruiker WHERE Voornaam='?'", array($voornaam));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Gebruiker WHERE AdminId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }


    public static function insert($gebruiker) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Gebruiker(Naam, Voornaam, Email, Wachtwoord) VALUES ('?','?', '?', '?')", array($gebruiker->Naam, $gebruiker->Voornaam, $gebruiker->Email, $gebruiker->Wachtwoord));
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Gebruiker where AdminId=?", array($id));
    }

    public static function delete($gebruiker) {
        return self::deleteById($gebruiker->AdminId);
    }

    public static function update($gebruiker) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Gebruiker SET Email='?',Wachtwoord='?' WHERE AdminId=?", array($gebruiker->Email, $gebruiker->Email, $gebruiker->Wachtwoord, $gebruiker->AdminId));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Gebruiker($databaseRij['AdminId'], $databaseRij['Naam'], $databaseRij['Voornaam'], $databaseRij['Email'], $databaseRij['Wachtwoord']);
    }

}