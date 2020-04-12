<?php
session_start();
    $msg_erreur= "";

    if (empty($_POST['login'])){
        $msg_erreur= "Veullez saisir votre login svp.";
    }else
        if (empty($_POST['password'])){
        $msg_erreur= "Veullez saisir un mot de passe.";
        }else
            if(preg_match("/\s+/", $_POST['password'])){
                $msg_erreur= "Veullez saisir un mot de passe ne contenant pas de caractéres vide.";
            }else
           

                if (isset($_POST['connexion'])){
                
                    $_SESSION['login']=$_POST['login'];
                    $_SESSION['password']=$_POST['password'];
                
                $file= 'initialisation.json';
                
                $js= file_get_contents($file);

                $js= json_decode($js);

                if ($_SESSION['login'] == $js [0]->login){
                    if ($_SESSION['password'] == $js [0]->password){
                        header("Refresh: 0.5;URL=interface_joueur.php");
                    }
                }else
                    if ($_SESSION['login'] == $js [1]->login){
                        if ($_SESSION['password'] == $js [1]->password){                   
                            header("Refresh: 0.5;URL=page_acceuil.php");
                        }
                    }
                }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page de connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="cadre1_connexion">

        <div id="cadre2_connexion">
            <img src="images/ic.jpeg">
            <P>
                <strong>Le plaisir de jouer</strong>
            </p>
        </div>

        <center>
        <div id="cadre3_connexion">

                <div class="login_form">
                    <h1>Login Form</h1>
                </div>
            
                <form method="POST" action="">

                    <div class="label_login">
                        <label for="login" name="login">
                            <input type="text" name="login" id="login" placeholder="   Login" value="<?php if(isset($_POST['login'])) { echo $_POST['login']; } ?>">
                            <img src="images/ic-login.png">
                        </label>
                    </div>
                    <br>
                        <br>
                    
                    <div class="label_password">
                        <label for="password" name="password">
                            <input type="password" name="password" id="password" placeholder="   Password">
                            <img src="images/icone-password.png">
                        </label>
                    </div>
                    <br>
                        <br>

                    <div class="submit_connexion">
                        <input type="submit" name="connexion" value="connexion" style="float: left; width: 33%; height: 25px; background-color: rgb(61, 191, 196);">
                        <a href="inscription.php">S'inscrire pour jouer?</a>
                    </div>

                    <br>
                    <span class="erreur" style="text-align: center; color: red;"><strong> <?= $msg_erreur ?> </strong></span>
                    <br>

                </form>
            </center>
            
        </div>
    </div>

</body>
</html>