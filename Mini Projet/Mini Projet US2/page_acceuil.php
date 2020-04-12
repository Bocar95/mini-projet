<?php
session_start();   
        if (isset($_POST['deconnexion'])){
    
		// Suppression des variables de session et de la session
	
			$_SESSION = array();
			session_unset();
			session_destroy();
			header('Location:Page de connexion.php');
        }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Acceuil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    if (empty($_SESSION['login'])){
        header('Location:Page de connexion.php');
    }
?>

    <div id="cadre1_page_acceuil">

        <div id="cadre2_page_acceuil">
            <img src="images/ic.jpeg">
            <P>
                <strong>Le plaisir de jouer</strong>
            </p>
        </div>

        <div id="cadre3_page_acceuil">
            <div class="cadre4_page_acceuil">
                <div class="cadre5_page_acceuil">
                    <p class="text_bienvenue_2">
                        <strong>CRÉER ET PARAMÉRTER VOS QUIZ</strong>
                    </p>
                    <div class="submit_deconnexion">
                        <form method="POST" action="">
                            <input type="submit" name="deconnexion" value="deconnexion" style="float: right; width: 13%; height: 30px; margin-top: 2.5%; margin-right: 3%; background-color: rgb(61, 191, 196);">
                        </form>
                    </div>
                </div>
                <div class="cadre6_page_acceuil">
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>