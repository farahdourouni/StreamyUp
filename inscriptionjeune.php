<?php
session_start();
include("infos.php");
@$valider = $_POST["inscrire"];
$erreur = "";
if (isset($valider)) {
if (empty($nom)) $erreur = "The name field is required!";
elseif (empty($prenom)) $erreur = "The first name field is required!";
elseif (empty($date_naissance)) $erreur = "The date of birth field is mandatory!";
elseif (empty($email)) $erreur = "The Email field is required!";
elseif (empty($password)) $erreur = "The password field is required!";
elseif ($password != $passwordConf) $erreur = "Different passwords!";
else {
include("connexion.php");
$verify_pseudo = $pdo->prepare("select * from standard3  where email=? limit 1");
$verify_pseudo->execute(array($email));
$user_pseudo = $verify_pseudo->fetchAll();
if (count($user_pseudo) > 0)
$erreur = "Email already exists!";
else{
        $ins = $pdo->prepare("insert into standard3  (nom,prenom,date_naissance,email,password) values(?,?,?,?,?)");
        if ($ins->execute(array($nom, $prenom, $date_naissance, $email, md5($password))))
        header("location:login.php");
     }
   }
}
?>
<!DOCTYPE  html>

<html>
<head>
<meta  charset="utf-8"  />
                <title> Movie Website - Easy Tutorials </title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="stylefarah.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
                <title>Student/Unemployed registration</title>
        </head>

        <body>
                <div class="container">
  	               <img class="logoposition" src="image/logo.png">
                   <img src="image/titrepage.png" class="main_title">
                   <a style="text-decoration:none" href="contactus.php" class="contact-page">Contact</a>
                   <a style="text-decoration:none" href="aboutus.html" class="about-page">About Us</a>
                </div>


               <div class="login-box">
                 <h5>Student/Unemployed registration </h5>
                  <div  class="erreur"><?php  echo  $erreur  ?></div>
                    <form  name="fo"  method="post"  action="">

                     <div class="textbox">
                       <input  type="text"  name="nom"  placeholder="Nom"  value="<?=  $nom  ?>">
                     </div>

                     <!--Entrer le nom-->
                     <div class="textbox">
                        <input  type="text"  name="prenom"  placeholder="Prénom"  value="<?=  $prenom  ?>">
                     </div>

		     <!--Entrer la date de naissance -->
                     <div class="textbox">
                         <input type="date"  name="date_naissance"  value="<?=  $date_naissance  ?>" >
                     </div>

                     <!--Entrer la date de naissance -->
                     <div class="textbox">
                         <input  type="text"  name="email"  placeholder="Votre Email"  value="<?=  $email  ?>" >
                     </div>

                      <!--Entrer le mail-->
                     <div class="textbox">
                        <input  type="password"  name="password"  placeholder="Mot de passe" >
                     </div>

                     <!--Entrer le mot de passe-->
                     <div class="textbox">
                       <input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe" >
                     </div>

                       <!--Ajouter justificatif-->
                       <input class="fichierpaiement" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">

                     <!-- Bouton confirmer-->
                       <input class="boutonformulaire" type="submit" name="inscrire" value="Confirm">

             </form>
           </div>



        </body>
</html>
