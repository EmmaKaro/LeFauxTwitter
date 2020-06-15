

<?php

define('DB_HOST','localhost');
define('DB_NAME','Utilisateur');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

try{
	$db=new PDO("mysql::host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $e){
	die('Erreur: '.$e->getMessage());
}
	
	


/*
class Database {

    private $dbh;

    public function __construct(String $host, String $name, String $user, String $pass, String $port = "3306")
    {
        try {
            $this->dbh = new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $pass);
        } catch(PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br>"; // Affichage du message d'erreur
            die(); // Arrêt du script
        }
    }

    public function getConnection() {
        return $this->dbh;
    }
}*/