<?php
session_start();
include("infos2.php");
@$valider = $_POST["inscrire"];
$erreur = "";
if (isset($valider)) {
if (empty($numerocb)) $erreur = "Le champs numero de la carte est obligatoire!";
elseif (empty($date)) $erreur = "Le champs date est obligatoire!";
elseif (empty($code)) $erreur = "Le champs code securité est obligatoire!";
else {
include("connexion.php");
        $ins = $pdo->prepare("insert into standard5pro2  (numerocb,date,code) values(?,?,?)");
        if ($ins->execute(array($numerocb,$date,$code)))
          header("location:login.php");
     }
}
?>
<!DOCTYPE html>
<html>
        <head>
                <title> Streamy' Up Student/Unemployed registration </title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="stylefarah.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
                <title>Payment by credit card</title>
        </head>

        <body>
                <div class="container">
	               <img class="logoposition" src="image/logo.png">
                       <img src="image/titrepage.png" class="main_title">.
                       <a style="text-decoration:none" href="#" class="contact-page">Contact</a>
                       <a style="text-decoration:none" href="#" class="about-page">About Us</a>
                </div>


               <div class="login-box">
               <h5>Payment by credit card </h5>

               <div  class="erreur"><?php  echo  $erreur  ?></div>
                 <form  name="fo"  method="post"  action="">

                 <div class="textbox">
                   <input type="text"  name="numerocb" placeholder="Card Number">
                 </div>


                 <!--Entrer la date de naissance -->
                 <div class="textbox">
                     <input type="text" name="date" placeholder="mm/aa">
                 </div>


                 <!--Entrer le mot de passe-->
                 <div class="textbox">
                   <input type="text"  name="code" placeholder="Card Security Code">
                 </div>


                 <!-- Bouton confirmer-->
                   <input class="boutonformulaire" name = "inscrire" type="submit" value="Confirm">
             </form>
           </div>



        </body>
</html>
