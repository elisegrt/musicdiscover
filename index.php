<?php /*http://localhost:8080/index.php*/ ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Accueil - MusicDiscover</title>
<meta name="viewport" content="width=device-width, initial-scale=1080px, maximum-scale=1080px, minimum-scale=1080px">
<meta charset="UTF-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
<script src="js/script.js" defer></script> 
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet">
</head>

<body id="fond_acc">

<div>
    <div class='cursor' id="cursor"></div>
    
    <?php
    require "header.php";
    ?>

            
            
            <div class="Conteneur">
                <div class="messagedefilant">
                    <b>- <i>RAP</i> - REGGAE - <i>POP</i> - ROCK - <i>VARIETE FR</i></b>&nbsp;
                    <b>- RAP - <i>REGGAE</i> - POP - <i>ROCK</i> - VARIETE FR</b>&nbsp;
                    <b>- <i>RAP</i> - REGGAE - <i>POP</i> - ROCK - <i>VARIETE FR</i></b>&nbsp;
                    <b>- RAP - <i>REGGAE</i> - POP - <i>ROCK</i> - VARIETE FR</b>&nbsp;
	            </div>
            </div>
            
    <main>
        <section>
            <div class="container">
        
                <div id="accueil">
                    
                    <div id="titre">
                        <h1 id="text">100% <br> BEST <br>SOUNDS</h1>
                    </div>
                    
                </div>
            
            </div>
        </section>

        <section id="section1_acc" data-aos="fade-up">
            <div class="container" id="presentation">
                    <div id="titre_p">
                        <img id="logo_p" src="images/logo.png" alt="MusicDiscover">
                        <h2 id="titre2">qu'est-ce que c'est ? </h2>
                    </div>
                    <h3>Pas toujours facile de sortir de sa zone de confort et de découvrir de nouvelles choses.
                        C'est pourquoi, <strong>MusicDiscover</strong> vous offre la possibilité de découvrir une à plusieurs musiques par jour, de genres ou artistes différents.
                        De la <strong>Pop</strong> vers le <strong>Rock</strong>, en passant par le <strong>Rap</strong> ou encore le <strong>Reggae</strong> jusqu'à la <strong>Variété Française</strong>, vous pourrez chambouler vos habitudes et peut-être même en savoir plus sur vos goûts musicaux.
                    </h3>
            </div>
            <img id="josman" src="images/josman.png" alt="josman">
        </section>
        
    </main>
</div>
    <?php
    require "footer.php";
    ?>


<script>
  AOS.init();
</script>

</body>
</html>