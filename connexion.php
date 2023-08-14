<?php
        include_once 'include/Tvoyageur.php';
        if(isset($_POST['actionauth'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $n=Tvoyageur::authentification($email, $password);
            if($n!=0){
                session_start();
                $_SESSION['slog']=$email;
                ?>
                <script>
                window.location='reservation.php';
                </script>
                <?php
            }else{
                echo "<h1 style='color: red'>login ou pass incorrect !!</h1>";
            }
            }
        ?>

<!DOCTYPE html>
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
    </head>
    <body>
      
        <h1>Authentification :</h1>
        
        <form action="connexion.php" method="POST">
            Email : <input type="email" name="email" value="" />
            <br><br>
             
            Password :<input type="password" name="password" value="" />
            <br><br>
           <input type="submit" value="Connecter" name="actionauth" />
           <input type="reset" value="Annuler" />
        </form>
        <a href="inscription.php">Creer un compte</a>
    </body>
</html>
