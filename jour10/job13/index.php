<?php 

class Database{ 

private static $servername = 'localhost'; // nom du serveur
private static $username = 'root'; // nom d'utilisateur
private static $password = ''; // mot de passe
private static $BDD ='jour09'; // nom de la base de donnée
private static $conn = null; // variable de connexion qui sera retourné par la fonction connect


public static function _construct(){ // constructeur de la classe Database 
    die('Init function is not allowed'); // on empeche l'initialisation de la classe Database
}

public static function connect(){ // fonction de connexion à la base de donnée 
    if (null == self::$conn){ // si la connexion est null alors on se connecte à la base de donnée
        try{
            self::$conn = new PDO("mysql:host=".self::$servername.";"."dbname=".self::$BDD,self::$username,self::$password); // on se connecte à la base de donnée
        }catch(PDOException $e){
            die($e->getMessage()); // si il y a une erreur on affiche un message d'erreur
        }
    }
    return self::$conn; // on retourne la connexion
}

public static function disconnect(){ // fonction de déconnexion de la base de donnée
    self::$conn = null; // on met la connexion à null
}

}


$pdo = Database::connect(); // on se connecte à la base de donnée

//$sql ="SELECT e.etage AS 'etage', s.nom AS 'Nom salle' FROM etage e JOIN salles s WHERE e.id = s.id_etage";
$sql ="SELECT S.nom AS 'nomDeSalle', S.id_etage, E.nom AS 'nomEtage' FROM salles S JOIN etage E ON S.id_etage = E.id"; 

?>
    <table border ='1'>
    <thead>
    <tr>
        <th>salles</th>
        <th>etage</th>
    </tr>
    </thead>
    <tbody>
    
        <?php
    foreach ($pdo->query($sql) as $row){echo"<tr>
        <td>".$row["nomDeSalle"] ." </td>
        <td>".$row["nomEtage"] ." </td>
  
    </tr>";}
        ?>
    </tbody>
    </table>
<?php

Database::disconnect();
?>