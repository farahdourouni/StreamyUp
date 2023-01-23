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
	        <link rel="stylesheet" href="style2.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <title>Home </title>
        </head>

        <body onLoad="document.fo.login.focus()">

                <div class="container">
	               <img src="image/logo.png" style="position:absolute;top:15px;left:-35px;">
                       <img src="image/titrepage.png" class="main_title">
			                    <p class = "bienvenue"><?php  echo  $bienvenue  ?></p>
                   <a class = "button" href="deconnexion.php">Sign Out</a>




    	<nav>
    		<a href="pagefilm.php">MOVIES</a>
    		<a href="pageserie.php">SERIES</a>
    		<a href="pagefilmdep.php">MOVIES & SERIES  PRO</a>

        <a onclick="myFunction()">PRO</a>
          <script>
          function myFunction() {
            var conf = confirm("You do not have a PRO account to access this page. If you are interested click on OK to subscribe to a PRO subscription !");
            var no;
            if (conf == true){
              document.location.href="page_abo.html";
            }


          }
          </script>


    		<p class="carousel_title">Recently Uploaded</p>
    	</nav>

</div>


    <div class="container2">

    <div class="carousel">

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>


    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>

    <div class="carousel__face">
    <a style="text-decoration:none" href="#" class="link">link</a></div>
	</div>

</div>

</div>


<div class="sections">
    <h3>MOVIES</h3>
    <h3 style="top: 510px;">SERIES</h3>
    <h3 style="top: 790px;">MOVIES & SERIES PRO</h3>
</div>



        <div class="picture-grid">
            <div class="grid-box"><a href="description-bondieu.php"><img src="https://sites.psu.edu/frenchmovie/wp-content/uploads/sites/37259/2015/12/pic.jpg"/></a></div>
            <div class="grid-box"><a href="description-harry.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0pfdFv5QBT86IGMlZuDmHSArJxuhiLBKyo0X7Chixa4e1bhJrsq7flUJzFCz9D1JTRtU&usqp=CAU"/></a></div>
            <div class="grid-box"><a href="#"><img src="https://cdn.onebauer.media/one/empire-tmdb/films/88751/images/tBMh4ig85nU6EC57pXhWfosSGlW.jpg?format=jpg&quality=80&width=440&ratio=16-9&resize=aspectfill" /></a></div>
            <div class="grid-box"><a href="description-star.php"><img src="https://fr.web.img6.acsta.net/r_654_368/newsv7/21/05/03/12/38/5926520.jpg" /></a></div>
            <div class="grid-box"><a href="description-prison.php"><img src="https://is5-ssl.mzstatic.com/image/thumb/fOjEbW7StA5fOaZFubiYHw/1200x675.jpg" /></a></div>
            <div class="grid-box"><a href="description-vampire.php"><img src="https://www.betanews.fr/wp-content/uploads/2020/05/Vampire-Diaries-Season-9-veryt-detail.jpg" /></a></div>
            <div class="grid-box"><a href="description-friends.php"><img src="https://blog.comic-con-paris.com/wp-content/uploads/2019/11/friends-series-compressor.jpg" /></a></div>
            <div class="grid-box"><a href="description-murder.php"><img src="https://remeng.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2019/09/27/node_96809/11319962/public/2019/09/27/B9721056333Z.1_20190927170713_000%2BG64EIFAQ6.1-0.jpg?itok=JWDaXe2c1569596839" /></a></div>
            <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>
            <div class="grid-box"><a href="#"><img src="http://www.apclick.it/wp-content/uploads/2016/03/Come-utilizzare-i-video-nella-content-strategy-e-cosa-non-fare.jpg" /></a></div>


            <!--footer -->
            <footer>
              <div class = "pub">
                <div >
                  <img class = "imgpub" src="image/pub/bannie13.jpg"/>
               </div>
              </div>

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
