
<?php

    //Si le formulaire a ete soumis
    if(isset($_POST['register'])) {
      //si tous les champs demandes ont ete remplis
      if(!empty($_POST['name']) && (!empty($_POST['pseudo']) && (!empty($_POST['email']) && (!empty($_POST['password'])
      && !empty($_POST['password_confirm]))'])) {

        $errors = []; //Tableau contenant l'ens des erreurs
        exctract($_POST);

        if(mb_strlen($pseudo) < 3) {
          $errors[] = "Taille minimale du pseudo = 3 caracteres"
        }

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = "Adresse email invalide";
        }

        if(mb_strlen($password) < 6) {
          $errors[] = "Taille minimale du mot de passe = 6 caracteres"
        }
        else {
          if($password == $password_confirm){
            $errors[] = "Les mots de passe ne concordent pas"
          }
        }

        if(is_already_in_use('pseudo', $pseudo, 'users')) {
          $errors[] = "Pseudo deja utilise"
        }

        if(is_already_in_use('email', $email, 'users')) {
          $errors[] = "Adresse deja utilise"
        }

        //si il n'y a pas d'erreurs, alors l'utilisateur peut acceder a son compte
        if(count($errors) == 0) {
          //Envoi d'un mail d'activation

          //Redirection vers sa page de profil

        }

      //si tous les champs demandes n'ont pas ete remplis
      } else {
        $errors[] = "Remplissez tous les champs";
      }
    }


  ?>

  <?php require('views/register.view.php'); ?>
