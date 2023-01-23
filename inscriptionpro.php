<?php
session_start();
include("infos2.php");
@$valider = $_POST["inscrire"];
$erreur = "";
if (isset($valider)) {
if (empty($nom)) $erreur = "The name field is required!";
elseif (empty($prenom)) $erreur = "The first name field is required!";
elseif (empty($email)) $erreur = "The Email field is required!";
elseif (empty($password)) $erreur = "The password field is required!";
elseif ($password != $passwordConf) $erreur = "Different passwords!";
elseif (empty($paiement)) $erreur = "The payment field is mandatory!";
else {
include("connexion.php");
$verify_pseudo = $pdo->prepare("select * from standard5pro2  where email=? limit 1");
$verify_pseudo->execute(array($email));
$user_pseudo = $verify_pseudo->fetchAll();
if (count($user_pseudo) > 0)
$erreur = "Email already exists!";
else{
        $ins = $pdo->prepare("insert into standard5pro2  (nom,prenom,email,password,paiement) values(?,?,?,?,?)");
        if ($ins->execute(array($nom, $prenom, $email, md5($password),$paiement))){
          if ($paiement != "paypal") {
            header("location:paiementcb.php");
            exit();
        }
      }
    }
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
                <title>Professional registration</title>
        </head>

        <body>
                <div class="container">
	               <img class="logoposition" src="image/logo.png">
                       <img src="image/titrepage.png" class="main_title">
                       <a style="text-decoration:none" href="contactus.php" class="contact-page">Contact</a>
                       <a style="text-decoration:none" href="aboutus.html" class="about-page">About Us</a>
                </div>


               <div class="login-box">
               <h5>Professional registration </h5>

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


                      <!--Formulaire Paiement-->
                       <select class ="fichierpaiement" name="paiement">
                         <option>Choose your payment ... </option>
                         <option value="cb">CB</option>
                         <option value="visa">Visa</option>
                         <option value="master">MasterCard</option>
                         <option value="paypal">Paypal</option>
                       </select>

                 <!-- Bouton confirmer-->
                   <input class="boutonformulaire" type="submit" name = "inscrire" svalue="Confirm">
             </form>
           </div>



        </body>
</html>
