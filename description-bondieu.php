<?php

session_start();
if ($_SESSION["connecter"] != "yes") {
header("location:login.php");
exit();
}
if (date("H") < 18)
$bienvenue = "Welcome"  .
$_SESSION["prenom_nom"];
else
$bienvenue = "Welcome "  .
$_SESSION["prenom_nom"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="description_style.css">
        <title>Description - Qu'est - ce qu'on a fait au bon dieu </title>

</head>
<body>
      <a href = "accueil_session.php"> <img class="logoposition" src="image/logo.png"> </a>
     <img class = "main_title" src="image/titrepage.png">


        <a style="text-decoration:none" href="contactus.php" class="contact-page">Contact</a>
         <a style="text-decoration:none" href="aboutus.html" class="about-page">About Us</a>
         <a class ="button" href="deconnexion.php">Sign Out</a>
              <p class = "bienvenue"><?php  echo  $bienvenue  ?></p>
         <a class="retour" href="pagefilm.php"> <p> < </p></a>
            <div class="title"><p><strong>Qu'est - ce qu'on a fait au bon dieu </strong></p></div>


<div class = "position">
        <div class = "details">
        <p>

        2009
        2h39min
        Comedy
       </p></div>

       <a class ="button_watch" href="teaser-bondieu.php">Watch Movie</a>

        <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </br>
            Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Arcu non odio euismod lacinia at quis risus sed.Vel risus commodo viverra maecenas accumsan lacus.
        </p>
</div>

        <div >
          <img class = "affiche" src =image/a1iwl0gl6mx3tm4uhpcnn29d1ka-983.jpg>
        </div>
</body>
</html>
