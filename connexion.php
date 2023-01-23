<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=streamy","streamy","root");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>
