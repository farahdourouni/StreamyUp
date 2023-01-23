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
        <link rel="stylesheet" href="description_stylevideo.css">
        <title>Qu'est - ce qu'on a fait au bon dieu</title>

</head>
<body>
      <a href = "accueil_session.php"> <img class="logoposition" src="image/logo.png"> </a>
     <img class = "main_title" src="image/titrepage.png">


        <a style="text-decoration:none" href="contactus.php" class="contact-page">Contact</a>
         <a style="text-decoration:none" href="aboutus.html" class="about-page">About Us</a>
         <a class ="button" href="deconnexion.php">Sign Out</a>
         <p class = "bienvenue"><?php  echo  $bienvenue  ?></p>
         <a class="retour" href="description-bondieu.php"> <p> < </p></a>
            <div class="title"><p><strong>Qu'est - ce qu'on a fait au bon dieu </strong></p></div>


        <div>
              <video title="Wildlife" controls width="1000" class="positionvideo" >
                <source src="image/teaser/quest-ce-quon-a-fait-au-bon-dieu-bande-annonce.mp4" type="video/mp4">
              <p>Wildlife</p>
              </video>
        </div>
</body>
</html>
