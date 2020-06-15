
<?php

// Recherche du dossier index.view
require('view/indexview.php');

  if(isset($_POST['envoyer'])) {
    if(isset($_POST['nom'], $_POST['prenom'], $_POST['message'])){
      // Affichage des informations
      echo $_POST['nom']." ".$_POST['prenom']." ".$_POST['message'];
    }
  }
