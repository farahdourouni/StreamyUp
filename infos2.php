<?php

@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$email = $_POST["email"];
@$password = $_POST["password"];
@$passwordConf = $_POST["passconf"];
@$pass_crypt = md5($_POST["password"]);
@$paiement = $_POST["paiement"];
@$numerocb = $_POST["numerocb"];
@$date = $_POST["date"];
@$code = $_POST["code"];
?>
