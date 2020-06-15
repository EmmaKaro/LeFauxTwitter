
<!doctype html>
<html>
  <head>
    <title>Formulaire</title>
    <meta charsert="UTF-8"/>
  </head>
  <body>
  <form method="post">
    <p>
      <!-- information nom de l'utilisateur -->
      <label for="nom">Nom:</label>
      <input type="text" name="nom" id="nom" required="required"/> <br/>

      <!-- information prenom de l'utilisateur -->
      <label for="prenom">Prenom:</label>
      <input type="text" name="prenom" id="prenom" required="required"/> <br/>

      <!-- information message -->
      <label for="message">Message:</label>
      <textarea name="message" id="message" rows="10" required="required"/></textarea> <br/>

      <!-- bouton envoyer -->
      <input type="submit" name="envoyer" value="Envoyer" />
    </p>
  </form>
  </body>
</html>
