<?php
//Kopieer deze template en pas deze aan naargelang de benodigde functionaliteit
include_once 'Data/Afwezigheid.php';
include_once 'Database/Verbinding/DatabaseFactory.php';

class AfwezigheidDb {

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Afwezigheid");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getAllByAfwezige($naam) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Afwezigheid WHERE Afwezige='?'", array($naam));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }
    
    public static function getAllByStartDatum($SDatum) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Afwezigheid WHERE StartDatum='?'", array($SDatum));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }
    public static function getAllByEindDatum($EDatum) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Afwezigheid WHERE EindDatum='?'", array($EDatum));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getById($id) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Afwezigheid WHERE Id=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }


    public static function insert($afwezigheid) {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO Afwezigheid(Afwezige, StartDatum, EindDatum) VALUES ('?','?', '?')", array($afwezigheid->Afwezige, $afwezigheid->StartDatum, $afwezigheid->EindDatum) );
    }

    public static function deleteById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM Afwezigheid where Id=?", array($id));
    }

    public static function delete($afwezigheid) {
        return self::deleteById($afwezigheid->Id);
    }

    public static function update($startDatum, $eindDatum, $id) {
        return self::getVerbinding()->voerSqlQueryUit("UPDATE Afwezigheid SET StartDatum='?',EindDatum='?' WHERE Id=?", array($startDatum, $eindDatum, $id));
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Afwezigheid($databaseRij['Id'], $databaseRij['Afwezige'], $databaseRij['StartDatum'], $databaseRij['EindDatum'] );
    }

}