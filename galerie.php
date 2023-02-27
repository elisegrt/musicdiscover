<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums - MusicDiscover</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet">
</head>
<body id="fond_gal">
    
<div class='cursor' id="cursor"></div>

    <?php
    require "header.php";
    ?>
<div class="container">
    <main class="main_page" id="main_galerie">
        
               <h1 class="text titre_ban" >ALBUMS</h1>
              
<div id="envoie_message">      
                    <?php      
                        if (isset($_SESSION['information'])){        
                            echo '<p>' . $_SESSION['information'] . '</p>' . "\n";        
                            session_unset();
                        }      
                    ?>    
                </div> 
             
        <div id="galerie"> 
            <?php
             $dossier=scandir("images/galerie");

             foreach($dossier as $image){
                if($image != '.'&& $image != '..'){
                    echo'<img src=images/galerie/'.$image.' alt=album> ';
                }
             }
            ?>    
        </div> 
         
     
        
    </main>
</div>
   
    <div id="upload_images">      
                <form id="fo_foot" action="traitements/upload_image.php" method="post" enctype="multipart/form-data"> 
                            
                    <label for="image">IMPORTER UNE POCHETTE D'ALBUM</label>        
                    <input type="file" name="image" id="image">        
                    <input type="submit" value="TÉLÉCHARGER">      
                </form>    
    </div>  


    <?php
    require "footer.php";
    ?>

</body>
</html>

