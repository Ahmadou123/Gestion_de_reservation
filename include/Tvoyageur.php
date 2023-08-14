<?php
require_once 'db_connection.php'; // Assurez-vous que le chemin d'accès est correct

class Tvoyageur 
{
    public static function inscription($email, $password, $nom, $prenom, $date_n, $telephone){
        // Utilisation des requêtes préparées pour éviter les failles d'injection SQL
        $req = "INSERT INTO voyageurs (email, password, nom, prenom, date_n, telephone) VALUES (?, ?, ?, ?, ?, ?)";
        $params = array($email, $password, $nom, $prenom, $date_n, $telephone);
        $n = Connect::miseajour($req, $params);
        return $n;
    }
    
    public static function authentification($email, $password){
        // Utilisation des requêtes préparées
        $req = "SELECT * FROM voyageurs WHERE email = ? AND password = ?";
        $params = array($email, $password);
        $cur = Connect::selection($req, $params);
        $n = $cur->rowCount();
        return $n;
    }


    public static function getVoyageurByEmail($email) {
        $req = "SELECT * FROM voyageurs WHERE email = '$email'";
        $params = array($email);
        $cur = Connect::selection($req, $params);
        if ($cur) {
            return $cur[0];
        }
        else {
            return null;
        }
    }
    
}

?>