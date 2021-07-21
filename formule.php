<?php
   include('idcom.php');

   if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])){

    $nom = $idcom->quote(htmlspecialchars($_POST['nom']));
    $prenom = $idcom->quote($_POST['prenom']);
    $mail = $idcom->quote($_POST['email']);

    $requete = "INSERT INTO projettable
                 VALUES(DEFAULT, $nom, $prenom, $email)";
    $idcom ->exec($requete);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document formulaire</title>
</head>
<body>
<form action="" method="post" enctype="application/x-www-form-urlencoded">
     <fieldset>
              <legend>Remplissez le formulaire</legend>
     <table>
           <tr>
               <td>Nom: </td>
               <td><input type="text" name="nom" size="30" maxlenght="30"></td>
           </tr> 
           <tr>
              <td>Prenom: </td>
              <td><input type="text" name="prenom" size="30" maxlenght="30"></td>
           </tr> 
           <tr>
              <td>Mail: </td>
              <td><input type="text" name="email" size="30" maxlenght="30"></td>
           </tr> 
           <tr>
               <td><input type="reset" value="effacer"></td>
               <td><input type="submit" value="envoyer" ></td>
            </tr> 

     </table>         
     </fieldset>
</form>
    
</body>
</html>