<?php

// Recherche du dossier index.view


  if(isset($_POST['envoyer'])) {
    if(isset($_POST['nom'], $_POST['prenom'], $_POST['message'])){
      // Affichage des informations
      
      echo $_POST['nom']." ".$_POST['prenom']." ".$_POST['message'];
    }
  }
  require_once __DIR__ . '/../view/index.view.php';