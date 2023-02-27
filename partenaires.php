<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenaires - MusicDiscover</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet">
</head>
<body id="fond_part">
<div class='cursor' id="cursor"></div>

    <?php
    require "header.php";
    ?>

<div class="container">
    <main class="main_page" id="part">
        <h1 class="text titre_ban" >PARTENAIRES</h1>
        <section id="section_gp">
            <div id="grp">
                <div id="tom">
                    <a href="http://mmi22d07.sae105.ovh/" target=blank><img src="images/tom_c.png" alt="Tom"></a> 
                    <div class="prenom"><a class="pre_hov" href="http://mmi22d07.sae105.ovh/" target=blank>Tom</a></div>
                </div>
                <div id="elise">
                    <a href="http://mmi22c09.sae105.ovh/" target=blank><img src="images/elise_c.png" alt="Elise"></a>
                    <div class="prenom"><a class="pre_hov" href="http://mmi22c09.sae105.ovh/" target=blank>Elise</a></div>
                </div>
                <div id="clement">
                    <a href="http://mmi22d04.sae105.ovh/" target=blank><img src="images/clément_c.png" alt="Clément"></a>
                    <div class="prenom"><a class="pre_hov" href="http://mmi22d04.sae105.ovh/" target=blank>Clément</a></div>
                </div>
            </div>
            <h2>Notre groupe</h2>
            <p id="g_p">Développeurs fullstacks récemment diplômés d’un Bachelor Universitaire de Technologies des Métiers du Multimédia et de l’Internet, nous sommes trois jeunes freelances qui venons de rejoindre l’association culturelle de la ville de Troyes. Dans nos différents sites, nous vous proposons de découvrir divers arts comme le cinéma et la musique. Notre trio s’est créé lors de nos études. Passionnés et investis par les mêmes sujets, nous avons rapidement créé des liens. Notre sérieux et notre efficacité nous ont permis de travailler dans un premier temps dans le cadre scolaire, puis aujourd’hui dans un cadre professionnel pour donner de la visibilité à la culture sur internet.</p>
        </section>
       
        <div id="membres">
            
            <div data-aos="fade-up">
                <img class="photo_r" src="images/tom_r.png" alt="Tom">
                <p class="descr"><strong style="color: rgb(175 92 40);">TOM</strong> : « Community Manager à mes heures perdues, je suis passionné de multimédia, de graphisme et de cinéma. Ainsi j’ai donc choisi  de réaliser un site web sur Louis de Funès qui est un acteur comique emblématique français. Il est connu de tous en France et en Europe. Il arrivera toujours à nous faire rire avec sa manière de parler même dans les films avec des scénarios où la situation est compliquée. Il a joué dans les plus grandes comédies françaises de l'époque, tels que la Grande Vadrouille ou encore le Corniaud. »</p>
            </div>
            
            <div data-aos="fade-up">
                <img class="photo_r" src="images/elise_r.png" alt="Elise">
                <p class="descr"><strong style="color: rgb(175 92 40);">ELISE</strong> : « Parce que la musique occupe désormais une place importante dans nos vies et qu’il est parfois difficile de découvrir de nouvelles musiques et de sortir de sa zone de confort concernant ses goûts musicaux, j’ai décidé de créer un site qui propose aux utilisateurs différentes musiques par jour et de genres différents. MusicDiscover offre la possibilité de découvrir ou redécouvrir les sons les plus populaires de ces dernières années grâce à une playlist à base de rock, rap, pop, reggae et variété française. »</p>
            </div>
            
            <div data-aos="fade-up">
                <img class="photo_r" src="images/clément_r.png" alt="Clément">
                <p class="descr"><strong style="color: rgb(175 92 40);">CLEMENT</strong> : « Graphiste, développeur de 19 ans, je suis avant tout un passionné d’audiovisuel et plus particulièrement de cinéma. C’est pourquoi j’ai choisi comme sujet Hans Zimmer. Hans Zimmer est un auteur compositeur de bande son de film depuis les années 80. Il a participé à la création des plus grands blockbusters de notre époque, notamment Le Roi Lion et Dune pour lesquels il a reçu un oscar, mais aussi Interstellar, Pirates des Caraïbes ou encore Dunkirk. »</p>
            </div>
            
</div>
             
    </main>
</div>

<section id="bouton">
            <h3 id="option">EN SAVOIR PLUS +</h3>
            <div id="selection">
                <a target="blanck" class="pdf" href="traitements/charte_de_projet.pdf">CHARTE DE PROJET</a> 
                <a target="blanck" class="pdf" href="traitements/plan_de_projet.pdf">PLANNING & PLAN</a> 
            </div>
</section> 


    <?php
    require "footer.php";
    ?>

<script>
  AOS.init();
</script>

</body>
</html>

