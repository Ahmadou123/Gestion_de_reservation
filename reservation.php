<?php
//reservation.php
require_once "include/Tvoyage.php"; // Inclure la classe Tvoyage

if(isset($_POST['Ajouterlevoyag'])){
    $ville_d = $_POST['ville_d'];
    $ville_a = $_POST['ville_a'];
    $heure_d = $_POST['heure_d'];
    $date_v = $_POST['date_v'];
    $prix_v = $_POST['prix_v'];
    $code_v = $_POST['code_v']; 
     // Génération du code du voyage
     $code_v = rand(100000, 999999);
    Tvoyage::insererVoyage($code_v, $ville_d, $ville_a, $heure_d, $date_v, $prix_v); // Appeler la fonction pour insérer le voyage
    //Affichage des informations du voyage sur la page de confirmation
    header("Location: index.php?code_v=$code_v");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Call the minified style sheet of Datepicker extension -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<body>
    <div class="">
    <h1>Faites votre réservation :</h1>
    <form action="reservation.php" method="POST">
    <table class="table">
        <thead>
            <tr>
                <th>
            <div class="mb-3">
    <select class="form-select form-select-lg" name="ville_d" id="ville_d">
        <option selected>Selection une ville de depart</option>
        <option >Dakar</option>
        <option  >Thies</option>
        <option  >Mbour</option>
        <option >Saint-louis</option>
        <option >fatick</option>
        <option >Tamba</option>
        <option >Kolda</option>
        <option  >Ziguinchor</option>
    </select>
</div>
                </th>
                <th>
                <div class="mb-3">
    <select class="form-select form-select-lg" name="ville_a" id="ville_a">
        <option  selected>Selection une ville d'arrivée</option>
        <option   >Dakar</option>
        <option   >Thies</option>
        <option   >Mbour</option>
        <option   >Saint-louis</option>
        <option   >fatick</option>
        <option   >Tamba</option>
        <option   >Kolda</option>
        <option   >Ziguinchor</option>
    </select>
</div>
                </th>
                <th>
                <div class="mb-4">
          <input type="date" id="date_v" class="form-control" value="Date" name="date_v">
        </div>
  
                </th>
                <th>
                <div class="mb-3">
    <select class="form-select form-select-lg" name="heure_d" id="heure_d">
        <option selected>Choisir un horaire</option>
        <option >7h00</option>
        <option >8h00</option>
        <option >9h00</option>
        <option >10h00</option>
        <option >11h00</option>
        <option >12h00</option>
        <option >13h00</option>
        <option >15h00</option>
        <option >16h00</option>
        <option >17h00</option>
        <option >18h00</option>
    </select>
</div>
                </th>
                <th>
                    <div class="mb-4">
                        <input type="number" step=".01" name="prix_v" class="form-control" placeholder="Prix">
                    </div>
                </th> 
                
                <th>
                    <div class="mb-4">
                        <input type="submit" name="Ajouterlevoyag" value="Reserver"> <!-- Renommé le bouton pour correspondre au nom du champ -->
                    </div>
                    </th>
                    <th>
                    <div class="mb-4">
                        <input type="reset" name="Ajouterlevoyag" value="Annuler"> <!-- Renommé le bouton pour correspondre au nom du champ -->
                    </div>
                </th> 
            </tr>
        </thead>
    </table>
    </form>
    </div>
</body>
</html>
