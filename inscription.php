<?php

require_once "include/Tvoyageur.php";


if(isset($_POST['actioninscription'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_n = $_POST['date_n'];
    $telephone = $_POST['telephone'];
    $n = Tvoyageur::inscription($email, $password, $nom, $prenom, $date_n, $telephone);
    if($n!=0){
        echo 'Merci de votre inscription !!';
        header('Location: connexion.php');
    }  
    
    
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
<h1>inscription:</h1>
<div class="container">

<form action="" method="post"  >


  <div class="mb-3">
  <label for="prenom" class="form-label">Prénom</label>
  <input type="text"class="form-control form-control-sm" name="prenom" id="prenom" >
  </div>

  <div class="mb-3">
  <label for="nom" class="form-label">Nom</label>
  <input type="text" class="form-control form-control-sm" name="nom" id="nom" >
  </div>

  <div class="mb-3">
  <label for="eamil" class="form-label">E-mail</label>
  <input type="email" class="form-control form-control-sm" name="email" id="email" autocomplete="off">  </div>

  <div class="mb-3">
  <label for="telephone" class="form-label">Télephone</label>
  <input type="text" class="form-control form-control-sm" name="telephone" id="telephone" >
  </div>

  <div class="mb-3">
  <label for="date_n" class="form-label">Date de naissance</label>
  <input type="date" class="form-control form-control-sm" name="date_n" id="date_n" >
  </div>

  <div class="mb-3">
  <label for="" class="form-label">Mot de passe</label>
  <input type="password"class="form-control form-control-sm" name="password" id="password"  autocomplete="off">
  </div>
  <button type="submit" value="actioninscription" name ="actioninscription" id = "actioninscription" class="btn btn-primary mb-2">inscrire</button>
  <button type="reset" value="annuler"name ="annuler"id = "annuler" class="btn btn-danger mb-2">Annuler</button>

  </form>
  </div>
</body>
</html>






