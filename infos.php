<?php

@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$date_naissance = $_POST["date_naissance"];
@$email = $_POST["email"];
@$password = $_POST["password"];
@$passwordConf = $_POST["passconf"];
@$pass_crypt = md5($_POST["password"]);

?>
