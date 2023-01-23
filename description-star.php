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
        <title>Description - Star Wars</title>

</head>
<body>
      <a href = "accueil_session.php"> <img class="logoposition" src="image/logo.png"> </a>
     <img class = "main_title" src="image/titrepage.png">


        <a style="text-decoration:none" href="contactus.php" class="contact-page">Contact</a>
         <a style="text-decoration:none" href="aboutus.html" class="about-page">About Us</a>
         <a class ="button" href="deconnexion.php">Sign Out</a>
              <p class = "bienvenue"><?php  echo  $bienvenue  ?></p>
         <a class="retour" href="description-star.php"> <p> < </p></a>
            <div class="title"><p><strong>Star Wars</strong></p></div>


<div class = "position">
        <div class = "details">
        <p>

        2001
        2h39min
        Fantastic
       </p></div>

       <a class ="button_watch" href="teaser-star.php">Watch Movie</a>

        <p class="text">
            Orphaned, the young Harry Potter can finally leave his tyrannical uncle and aunt Dursley when a curious messenger reveals to him that he is a sorcerer.
        </br>
            At the age of 11, Harry was finally able to join the legendary Hogwarts School of Witchcraft, find a worthy family and friends, develop his gifts, and prepare for his glorious future.
        </p>
</div>

        <div >
          <img class = "affiche" src =image/052074.jpg>
        </div>
