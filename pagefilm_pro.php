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
            <title>Pro - Movies </title>
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
    <p class = "titrevideo" >MOVIES</p>
    <hr class="separateur">
</div>



        <div class="picture-grid">
            <div class="grid-box"><a href="description-bondieupro.php"><img src="https://sites.psu.edu/frenchmovie/wp-content/uploads/sites/37259/2015/12/pic.jpg"/></a></div>
            <div class="grid-box"><a href="description-harrypro.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0pfdFv5QBT86IGMlZuDmHSArJxuhiLBKyo0X7Chixa4e1bhJrsq7flUJzFCz9D1JTRtU&usqp=CAU"/></a></div>
            <div class="grid-box"><a href="#"><img src="https://cdn.onebauer.media/one/empire-tmdb/films/88751/images/tBMh4ig85nU6EC57pXhWfosSGlW.jpg?format=jpg&quality=80&width=440&ratio=16-9&resize=aspectfill" /></a></div>
            <div class="grid-box"><a href="description-starpro.html"><img src="https://fr.web.img6.acsta.net/r_654_368/newsv7/21/05/03/12/38/5926520.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/1917-Banniere-800x445.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/1017281.jpg-r_1280_720-f_jpg-q_x-xxyxx.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/147693426975458-kick-ass.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/B9714577081Z.1_20180130105013_000+G65AJHHS6.2-0.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/bird-box-challenge-inquiète-netfli.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/capture_decran_2019-02-22_a_21.21.22.png" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/capture_decran_2019-05-24_a_03.21.53.png" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/kill-bill-3-projet.jpeg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/mortal-kombat.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/film/Synchronic-Banniere.jpg" /></a></div>




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
