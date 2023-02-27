<?php $page = $_SERVER['PHP_SELF']; ?>

    <header>
        <div id="head">
            <a href="index.php"><img id="logo" src="images/logo.png" alt="MucicDiscover"></a>
            <nav>
                <ul>
                
                    <li <?php if(strpos($page,'index.php')) echo'class="active"'; ?>><a href="index.php">ACCUEIL</a></li>
                    <li <?php if(strpos($page,'donnees.php')) echo'class="active"'; ?>><a href="donnees.php">DONNÉES</a></li>
                    <li <?php if(strpos($page,'contact.php')) echo'class="active"'; ?>><a href="contact.php">CONTACT</a></li>
                    <li <?php if(strpos($page,'galerie.php')) echo'class="active"'; ?>><a href="galerie.php">GALERIE</a></li>
                    <li <?php if(strpos($page,'partenaires.php')) echo'class="active"'; ?>><a href="partenaires.php">PARTENAIRES</a></li>
                </ul>
            </nav>
        </div>
    </header>
