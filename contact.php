<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - MusicDiscover</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet">
</head>
<body id="fond_cont">

<div class='cursor' id="cursor"></div>

    <?php
    require "header.php";
    ?>
    
<div class="container">
    <main class="main_page" id="contact">
<!--
        <div  class="animate-text text" id="text_co">
            <h1 >Besoin de nous contacter ?</h1>
        </div>

        <div class="d_flèche" id="d_flèche3">
            <img id="flèche" src="images/flèche.png" alt="vers le bas">
        </div>
-->
        <h1 class="text titre_ban" >CONTACT</h1>
        <form action="traitements/envoi_mail.php" method="POST">
                
                <div id="validation">
                    <?php
                        if (isset($_SESSION['information'])) {
                        echo '<p>'.$_SESSION['information'].'</p>'."\n";
                        session_unset();
                        }
                    ?>
                </div>

                <div id="nom_pre">
                    <div class="formulaire formulaire_">
                        <label for="nom">Nom<span>*</span></label>
                        <input type="text" id="nom" name="nom">
                    </div>

                    <div class="formulaire formulaire_">
                        <label for="prenom">Prénom <span>*</span></label>
                        <input type="text" id="prenom" name="prenom">
                    </div>

                </div>

                <div class="formulaire">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="nom@domaine.fr" >
                </div>

                <fieldset>
                    <legend>Objet <span>*</span></legend>

                    <div class="choix">
                    <input type="radio" id="Information" name="selection" value="Information">
                    <label for="Information">Information</label>
                    </div>

                    <div class="choix">
                    <input type="radio" id="Demande_de_devis" name="selection" value="Demande_de_devis">
                    <label for="Demande_de_devis">Demande de devis</label>
                    </div>

                    <div class="choix">
                    <input type="radio" id="Réclamation" name="selection" value="Réclamation">
                    <label for="Réclamation">Réclamation</label>
                    </div>
                </fieldset>

                <div class="formulaire">
                    <label for="message">Votre Message <span>*</span></label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>

                

                <input id="envoi" type="submit" value="Envoyer">
            
                <div id="champs">
                    <p>* champs obligatoires</p>
                </div>
                
        </form>

                
    </main>
</div>
    <?php
    require "footer.php";
    ?>

</body>
</html>

