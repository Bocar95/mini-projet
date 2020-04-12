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
    <title>Interface joueur</title>
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
    <div id="cadre1_interface_joueur">

        <div id="cadre2_interface_joueur">
            <img src="images/ic.jpeg">
            <P>
                <strong>Le plaisir de jouer</strong>
            </p>
        </div>

        <div id="cadre3_interface_joueur">
            <div class="cadre4_interface_joueur">
                <div class="cadre5_interface_joueur">
                    <img src="images/ic.jpeg" class="image-ronde">
                    <div class="nom_prenom">
                    <?php
                    $file= 'initialisation.json';
                
                    $js= file_get_contents($file);
    
                    $js= json_decode($js);
                        if ($_SESSION['login'] == $js [0]->login){
                            if ($_SESSION['password'] == $js [0]->password){
                                echo '<p>' .$js [0]->prenom. ' ';
                                echo  $js [0]->nom.'</p>';
                            }
                        }
                    ?>
                    </div>
                    <p class="text_bienvenue">
                        <strong>BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRAL</strong>
                    </p>
                    <div class="submit_deconnexion">
                        <form method="POST" action="">
                            <input type="submit" name="deconnexion" value="deconnexion" style="float: right; width: 13%; height: 30px; margin-top: 2.5%; margin-right: 3%; background-color: rgb(61, 191, 196);">
</form>
                    </div>
                </div>
                <div class="cadre6_interface_joueur">
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>