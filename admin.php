<?php
  session_start();
    if(!isset($_POST['valider'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
           $pseudo = "admin";
           $mdp = "1234";
            

           $pseudo_saisie = htmlspecialchars($_POST['pseudo']);
           $mdp_sasie = htmlspecialchars($_POST['mdp']) ;
           
           if($pseudo_saisie == $pseudo && $mdp_sasie == $mdp){
        
              $_SESSION['mdp']= $mdp_sasie;
              header('location:index.php');
             }  else{
                echo "Veillez choisir le bon motdepasse ou pseudo";
            }

        

        }else{
            echo "Veillez remplir tous les champs...";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Accés</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded">
         <fieldset>
                  <legend>Accés  limité à la page admin</legend>
                  <table>
                        <tr>
                           <td>Pseudo :</td>
                           <td><input type="text" name="pseudo" size="40" maxlength="30"></td>
                        </tr>
                        <tr>
                           <td>Mot de passe :</td>
                           <td><input type="password" name="mdp" size="40" maxlength="30"></td>
                        </tr>
                        <tr>
                           <td><input type="reset" value="Effacer"></td>
                           <td><input type="submit" nom="valider"></td>
                        </tr>
                  </table>
         </fieldset>
    </form>
    
</body>
</html>