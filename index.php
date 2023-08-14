<?php
//confirmation.php
require_once "include/Tvoyage.php"; // Inclure la classe Tvoyage

if(isset($_GET['code_v'])){
    $code_v = $_GET['code_v']; // Récupérer le code du voyage passé en paramètre
    $voyage = Tvoyage::getVoyageByCode($code_v); // Appeler la fonction pour obtenir le voyage correspondant au code
    if($voyage){ // Si le voyage existe
        $ville_d = $voyage['ville_d']; // Récupérer la ville de départ
        $ville_a = $voyage['ville_a']; // Récupérer la ville d'arrivée
        $heure_d = $voyage['heure_d']; // Récupérer l'heure de départ
        $date_v = $voyage['date_v']; // Récupérer la date du voyage
        $prix_v = $voyage['prix_v']; // Récupérer le prix du voyage
    }
    else{ // Si le voyage n'existe pas
        header("Location: reservation.php"); // Rediriger vers la page de réservation
        exit;
    }
}
else{ // Si le code du voyage n'est pas passé en paramètre
    header("Location: reservation.php"); // Rediriger vers la page de réservation
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
    <h1>Confirmation de votre réservation :</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Code du voyage</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>
                <th>Date du voyage</th>
                <th>Heure de départ</th>
                <th>Prix du voyage</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $code_v; ?></td> <!-- Afficher le code du voyage -->
                <td><?php echo $ville_d; ?></td> <!-- Afficher la ville de départ -->
                <td><?php echo $ville_a; ?></td> <!-- Afficher la ville d'arrivée -->
                <td><?php echo $date_v; ?></td> <!-- Afficher la date du voyage -->
                <td><?php echo $heure_d; ?></td> <!-- Afficher l'heure de départ -->
                <td><?php echo $prix_v; ?></td> <!-- Afficher le prix du voyage -->
                <td>
                    <a href="update.php?id=<?php echo $eleve['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Edite</a>
                    <form action="delete.php" method="post" style="display:inline-block">
                        <input type="hidden" name="id" value="<?php echo $eleve['id'] ?>">
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>

                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
