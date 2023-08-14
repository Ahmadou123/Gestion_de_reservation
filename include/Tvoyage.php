












<?php
/*
class Tvoyage {
    // methode 1 charger ville depart :
    public static function chargervd(){
       $req="select distinct(ville_d) from voyages "; 
       $cur=Connect::selection($req);
       
       return $cur;
   
    }
    // methode 2 charger ville d'arrivée :
    public static function chargerva(){
       $req="select distinct(ville_a) from voyages "; 
       $cur=Connect::selection($req);
       
       return $cur;
   
    }
    //3 methode rechercher par ville:
    public static function trajetParVille($vd,$va){
       $req="select * from voyages where ville_d ='$vd' and ville_a='$va'"; 
       $cur=Connect::selection($req);
       
       return $cur;
   
    }
    //4 methode getprix :
    public static function getprix($cv){
       $req="select prixvoyage from voyages where code_v ='$cv'"; 
       $cur=Connect::selection($req);
       $prix=0;
       while ($row = $cur->fetch()) {
                    $prix=$row[0];
                }
                $cur->closeCursor();
       return $prix;
   
    }

    public static function trajetParCode($cv) {
      $req = "SELECT * FROM voyage WHERE codevoyage = '$cv'";
      $cur = Connect::selection($req);
      return $cur;
  }
}
*/
?>




<?php
/*
require_once "db_connection.php";

class Tvoyage {
     // methode 1 charger ville depart :
     public static function chargerVillesDepart(){
      $req="select distinct(ville_d) from voyages "; 
      $cur=Connect::selection($req);
      
      return $cur;
  
   }
   // methode 2 charger ville d'arrivée :
   public static function chargerVillesArrivee(){
      $req="select distinct(ville_a) from voyages "; 
      $cur=Connect::selection($req);
      
      return $cur;
  
   }
   //3 methode rechercher par ville:
   public static function rechercherTrajets($vd,$va){
      $req="select * from voyages where ville_d ='$vd' and ville_a='$va'"; 
      $cur=Connect::selection($req);
      
      return $cur;
  
   }
   //4 methode getprix :
   public static function getprix($cv){
      $req="select prixvoyage from voyages where code_v ='$cv'"; 
      $cur=Connect::selection($req);
      $prix=0;
      while ($row = $cur->fetch()) {
                   $prix=$row[0];
               }
               $cur->closeCursor();
      return $prix;
  
   }

   public static function trajetParCode($cv) {
     $req = "SELECT * FROM voyages WHERE code_v = '$cv'";
     $cur = Connect::selection($req);
     return $cur;
 }

    public static function getTrajetByCode($code) {
        $req = "SELECT * FROM voyages WHERE code = :code";
        $params = array(':code' => $code);
        $cur = Connect::selection($req, $params);
        return $cur->fetch(PDO::FETCH_ASSOC);
    }


}*/
?>

<?php
          //Tvoyage.php
require_once "db_connection.php";

class Tvoyage {


    public static function insererVoyage($code_v, $ville_d, $ville_a, $heure_d, $date_v, $prix_v) {
        $req = "INSERT INTO voyages (code_v, ville_d, ville_a, heure_d, date_v, prix_v) VALUES (?, ?, ?, ?, ?, ?)";
        $params = array($code_v, $ville_d, $ville_a, $heure_d, $date_v, $prix_v);
        $cur = Connect::miseajour($req, $params);
        return $cur;
    }

   
    public static function getVoyageByCode($code) {
      $req = "SELECT * FROM voyages WHERE code_v = :code";
      $params = array(':code' => $code);
      $cur = Connect::selection($req, $params);
      $voyage = $cur->fetch(); // Récupérer le résultat sous forme de tableau associatif
      if($voyage){ // Si le résultat n'est pas vide
          return $voyage; // Retourner le voyage
      }
      else{ // Si le résultat est vide
          return null; // Retourner null
      }
  }
  
}
?>


 

