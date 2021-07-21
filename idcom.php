<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  try{
  $idcom = new PDO("mysql:host=$servername;dbname=projetencours", $username, $password);
  $idcom ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
//   echo "Connexion reussie avec succés";
  }
  catch(PDOException $e){
      echo " Erreur de connexion" . $e->getMessage();
  }
?>