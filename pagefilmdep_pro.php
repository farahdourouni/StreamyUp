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
	        <link rel="stylesheet" href="stylefarah2.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <title>Pro - Movie & Serie Independant </title>
        </head>

        <body onLoad="document.fo.login.focus()">
                <div class="container">
	               <a href = "accueil_sessionpro.php"> <img class="logoposition" src="image/logo.png"> </a>
                       <img src="image/titrepage.png" class="main_title">
                       <p class = "bienvenue"><?php  echo  $bienvenue  ?></p>
                   <a class = "button" href="deconnexion.php">Sign Out</a>




    	<nav>
    		<a href="pagefilm_pro.php">MOVIES</a>
    		<a href="pageserie_pro.php">SERIES</a>
    		<a href="pagefilmdep_pro.php">MOVIES & SERIES  PRO</a>
            <a href ="pagepro.html">PRO</a>
          <div class = "positionsearch">
            <input type="search" id="site-search" name="q" aria-label="Search through site content">
            <button class ="boutonsearch">Search</button>
          </div>

    	</nav>

</div>




<div>
    <p class = "titrevideo" >MOVIES & SERIES PRO</p>
    <hr class="separateur2">
</div>



        <div class="picture-grid">
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
          <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>




            <!--footer -->
            <footer>
              <div class="box">
                  <div>
                    <a class = "colorlien" href="aboutus.html">About Us&ensp;&ensp;</a>
                  </div>
                  <div>
                    <a class = "colorlien" href="contactus.php">Contact</a>
                  </div>

              </div>
            </footer>

        </div>

</body>

</html>
