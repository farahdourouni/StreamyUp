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
            <title>Pro - Series </title>
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
    <p class = "titrevideo" >SERIES</p>
    <hr class="separateur">
</div>



        <div class="picture-grid">
            <div class="grid-box"><a href="#"><img src="image/serie/650b334d2f6b33313d75a13284af1f34.jpg"/></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/Game-of-Thrones.jpg"/></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/images.jfif" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/imawanokuninoalice_202010_1-696x470.jpg" /></a></div>
            <div class="grid-box"><a href="description-prisonpro.php"><img src="https://is5-ssl.mzstatic.com/image/thumb/fOjEbW7StA5fOaZFubiYHw/1200x675.jpg" /></a></div>
            <div class="grid-box"><a href="description-vampirepro.php"><img src="https://www.betanews.fr/wp-content/uploads/2020/05/Vampire-Diaries-Season-9-veryt-detail.jpg" /></a></div>
            <div class="grid-box"><a href="description-friendspro.php"><img src="https://blog.comic-con-paris.com/wp-content/uploads/2019/11/friends-series-compressor.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/LUCIFER-HOME.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/lupinnetflix.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/orphan-black-saison1.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/sggk+[[xwm5_muocrnt_mvg[rnztvh[6205[6546205.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/wandavision-15-janvier-2021.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/the-society-la-serie-netflix-renouvelee-pour-une-saison-2.webp" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/hannah-montana-lettre.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="image/serie/53e863391c903704_5fcfd31b8e05ee233c6fd7c6.jpg" /></a></div>



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
