<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données - MusicDiscover</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="http://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet">
</head>
<body id="fond_don">

<div class='cursor' id="cursor"></div>

    <?php
    require "header.php";
    ?>  
    
<div class="container">
    <main class="main_page" id="données">

      

        <h1 class="text titre_ban" >PLAYLIST</h1>
<!--
        <div  class="animate-text text " id="text_do">
            <h1 id="playlist">Parce que c'est plus simple avec une playlist...</h1>  
        </div>

        <div  class="animate-text text" id="text2">
            <h1 id="playlist">Voici la nôtre !</h1>
        </div>

        <div class="d_flèche" id="d_flèche2">
            <img id="flèche" src="images/flèche.png" alt="vers le bas">
        </div>
-->
        
        <table id="tableau">
            <thead>
                <tr id="cate">
                    <th>GENRE</th>
                    <th>TITRE</th>
                    <th>ALBUM</th>
                    <th>ARTISTE</th>
                    <th>DUREE</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $fichier = 'datas/musique.json';
                $tabMusiqueJSON = file_get_contents($fichier);
                $tabMusiquePHP = json_decode($tabMusiqueJSON, true);

                
                
                foreach ($tabMusiquePHP as $musique) {
                    echo '<tr>';
                    echo '<td>';
                    echo $musique['GENRE'];
                    echo '</td>';
                    echo '<td>';
                    echo $musique['TITRE'];
                    echo '</td>';
                    echo '<td>';
                    echo $musique['ALBUM'];
                    echo '</td>';
                    echo '<td>';
                    echo $musique['ARTISTE'];
                    echo '</td>';
                    echo '<td>';
                    echo $musique['DUREE'];
                    echo '</td>';
                    }
                    echo '</tr>'; 
                ?>
            </tbody>
        </table>
                
    </main>
</div>
    <?php
    require "footer.php";
    ?>

    <script>
        $(document).ready( function () {
        $('#tableau').DataTable();
        } );
    </script>

    <script>
        $('#tableau').DataTable( {language: {url: 'http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json '}});
    </script>
</body>
</html>

