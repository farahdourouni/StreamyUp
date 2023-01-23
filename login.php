<?php

session_start();
include("infos.php");
@$valider = $_POST["valider"];
$erreur = "";
if (isset($valider)) {
include("connexion.php");
$verify = $pdo->prepare("select * from standard5  where email=? and password=? limit 1");
$verify->execute(array($email, $pass_crypt));
$user = $verify->fetchAll();
if (count($user) > 0) {
$_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
" "  .  strtoupper($user[0]["nom"]);
$_SESSION["connecter"] = "yes";
header("location:accueil_session.php");
} else
$erreur = "Wrong login or password!";
}
?>
<?php

session_start();
include("infos.php");
@$valider = $_POST["valider"];
$erreur = "";
if (isset($valider)) {
include("connexion.php");
$verify = $pdo->prepare("select * from standard5pro2  where email=? and password=? limit 1");
$verify->execute(array($email, $pass_crypt));
$user = $verify->fetchAll();
if (count($user) > 0) {
$_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
" "  .  strtoupper($user[0]["nom"]);
$_SESSION["connecter"] = "yes";
header("location:accueil_sessionpro.php");
} else
$erreur = "Wrong login or password!";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title> Movie Website - Easy Tutorials </title>
                <link rel="stylesheet" href="styleauthen.css">
                <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet"  type='text/css'>
                  <title>Login</title>
        </head>

        <body onLoad="document.fo.login.focus()">
                <div class="container">
	               <img class = "logoposition" src="image/logo.png">
                       <img src="image/titrepage.png" class="main_title">
                       <a style="text-decoration:none" href="contactus.php" class="contact-page">Contact</a>
                       <a style="text-decoration:none" href="aboutus.html" class="about-page">About Us</a>
                </div>


                <div class="description">
                        <h1>Watch unlimited Movies and Series</h1>
                </div>

                 <div class="description-2">
                        <h2>Express your creativity and upload all your productions</h2>
                </div>



                 <div class="description-3">
                        <h3>Ready to discover it ? Sign in or create an account and live the best of experiences</h3>
                </div>



                <div class="login-box">
                <h5>Login</h5>
                  <div  class="erreur"><?php  echo  $erreur  ?></div>
                    <form  name="form"  method="post"  action="">

                      <div class="textbox">
                          <input  type="text"  name="email"  placeholder="Your Email">
                      </div>

                        <div class="textbox">
                          <input  type="password"  name="password"  placeholder="Mot de passe">
                        </div>

                      <input name="valider"  type="submit" class="btn" value="Sign in">
                  </form>

                <div class="flex-box">
                <p>New to Streamy'Up ?&ensp;&ensp;</p>
                <a href="page_abo.html" class ="color">Create an account</a>
                </div>


               </div>


        </body>
</html>
