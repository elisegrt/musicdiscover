<?php
session_start();
$_SESSION['information']='';

if (!empty($_FILES)) {
    $image_nom = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_taille = $_FILES['image']['size'];
    $image_temporaire = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];
} else {
    echo 'Vous devez sélectionner un fichier';
}



$affichage_erreurs = '';
$erreurs = 0;

if ($image_error == 0) {
    if ($image_type != 'image/jpeg') {
        $erreurs++;
    }

    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
        $affichage_erreurs .= '<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Ce fichier n\'est pas une image jpeg <br></h4>';
        $erreurs++;
    }

    if ($image_taille > 500000) {
        $affichage_erreurs .= '<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Veuillez choisir un fichier inferieur à 500ko</h4>';
        $erreurs++;
    }
} else {
    $affichage_erreurs = '<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Impossible de télécharger le fichier, erreur de sélection</h4>';
}



if ($erreurs == 0) {
    $nbFichiers = -2;
    $dossier = opendir("../images/galerie");
    while ($fichier = readdir($dossier)) {
        $nbFichiers++;
    }

    $image_num = $nbFichiers + 1;
    $image_nom = 'image' . $image_num . '.jpg';

    $destination = "../images/galerie/" . $image_nom;

    if (move_uploaded_file($image_temporaire, $destination)) {
        $affichage_erreurs='<h4 style="color: #fca44f; margin: 0; font-size: 20px; font-weight: 300;">Téléchargement terminé avec succès<br></h4>';
    } else {
        $affichage_erreurs = '<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Erreur de téléchargement<br></h4>';
        $erreurs++;
    }
}


$_SESSION['information']=$affichage_erreurs;
header('location: ../galerie.php');

?>