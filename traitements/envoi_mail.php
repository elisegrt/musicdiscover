<?php

session_start();
$_SESSION['information']='';


if (count($_POST)==0) {
	header('location: ../contact.php');
}

// Récupération des données du formulaire




$affichage_retour = '';
$erreurs=0;

if (!empty($_POST['nom'])) {
	$nom=$_POST['nom'];
} else {
    $affichage_retour='<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Le champ NOM est obligatoire<br></h4>';
    $erreurs++;
    echo $affichage_retour;
}

if (!empty($_POST['prenom'])) {
	$prenom=$_POST['prenom'];
} else {
    $affichage_retour='<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Le champ PRENOM est obligatoire<br></h4>';
    $erreurs++;
    echo $affichage_retour;
}

if (!empty($_POST['selection'])) {
	$selection=$_POST['selection'];
} else {
    $affichage_retour='<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Veuillez choisir l\'OBJET de votre message.<br></h4>';
    $erreurs++;
    echo $affichage_retour;
}




    if (!empty($_POST['email'])) {
    // Si le champ email contient des données

        // Verification du format de l'email
        if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $email=$_POST['email'];
      } else {
      // Si l'email est incorrect on retourne au formulaire  
        $affichage_retour='<h4 style="color:red; margin: 0; font-size: 20px; font-weight: 300;">Adresse mail incorrecte<br></h4>';
        $erreurs++;
        echo $affichage_retour;
      }
  // Si le champ email est vide, on retourne au formulaire     
  } else {
    $affichage_retour='<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">Le champ EMAIL est obligatoire<br></h4>';
    $erreurs++;
    echo $affichage_retour;
  }





if ($erreurs == 0) {

    // Préparation des données 
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $selection=$_POST['selection'];
    $message=$_POST['message'];
    $email_dest="mmi22c09@mmi-troyes.fr";

    $prenom=ucfirst($prenom);
    $nom=ucfirst($nom);

    $subject='Nouveau message MusicDiscover de : '.$prenom.' '.$nom.'. Objet : '.$selection;
    $headers['From']=$email;
    $headers['Reply-to']=$email;
    $headers['X-Mailer']='PHP/'.phpversion();	

    //Envoi du mail de contact)
    if (mail($email_dest,$subject,$message,$headers)) {
    $erreurs=0;
    } else {
    $erreurs++;
    }
    
    // Préparation des données pour la confirmation
    
    if ($selection == 'Information'){
      $choix= 'demande d\'information';
    }
    elseif ($selection == 'Demande_de_devis'){
      $choix= 'demande de devis';
    }
    elseif ($selection == 'Réclamation'){
      $choix= 'réclamation';
    }

    $no_reply="no-reply@mmi-troyes.fr";
    $confirm='<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    </head>
    <body style="width:100%;">
      <div style="margin: 0 auto; font-weight:400; font-family:poppins; background-color: rgb(18, 18, 18); color: white;  width: 70%; padding: 40px 40px; border-radius:15px;">
        <img src="http://mmi22c09.sae105.ovh/images/logo.png" alt="MusicDiscover" style="height: 20px;">
        <div style="text-align: center; ">
          <p style="padding: 0 100px;">Bonjour <span style="color:rgb(205, 122, 70); font-size:17px;">'.$prenom.'</span> <span style="color:rgb(205, 122, 70); font-size:17px;">'.$nom.'</span>,<br><br> nous avons l\'honneur de vous annoncer que votre <br><span style="color:rgb(205, 122, 70);">'.$choix.'</span><br> a bien été prise en compte par nos équipes ! <br><br>Surveillez vos mails !<br>Nous vous répondrons bientôt.<br><br> N\'hésitez pas à nous recontacter si vous avez d\'autres questions ! <br><br> Nos équipes <strong>MusicDiscover</strong><br><br> </p>
          <p style="font-size:9px;">Découvrez dès maintenant les nouveautés du site en cliquant <a href="http://mmi22c09.sae105.ovh/" style="color:rgb(205, 122, 70);">ICI</a>.</p>
        </div>
      </div>
    </body>
    </html>';
              
            

             

    $subject_conf='MusicDiscover - confirmation de votre'.$choix;
    $headers_conf['From']=$no_reply;
    $headers_conf['Reply-to']=$no_reply;
    $headers_conf['X-Mailer']='PHP/'.phpversion();
    $headers_conf['MIME-Version'] = '1.0';
    $headers_conf['content-type'] = 'text/html; charset=utf-8';

    //Envoi du mail de confirmation
    if (mail($email,$subject_conf,$confirm,$headers_conf)) {
    $erreurs=0;
    } else {
    $erreurs++;
    }
    
    // Détermination du message à affichée après les tentatives d'envoi
        $affichage_retour='<h4 style="color: #fca44f; margin: 0; font-size: 20px; font-weight: 300;">MESSAGE ENVOYÉ !</h4>';
      

        

if ($erreurs !=0) {
      $affichage_retour='<h4 style="color: red; margin: 0; font-size: 20px; font-weight: 300;">ÉCHEC DE L\'ENVOI !</h4>';
      }

    }

      $_SESSION['information']=$affichage_retour;
      header('location: ../contact.php');

  ?>