<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
  </head>
  <body>
 <?php 
  

include("_nav.php");
?>
<h1 id="contact">Contactez-moi !</h1>

  <form action="cible.php" method="POST">
    <p>Pour d'autres informations ou questions , je me ferais un plaisir de vous répondre .<p>
    <p><label for="Nom">Votre Nom svp :</label><input type="text" name="Nom" id="Nom" size="15">

    <p><label for="Nom">Votre Prénom svp :</label><input type="text" name="Prénom" id="Nom" size="15">
    
    <p><label for="emailadress">Votre email svp :</label><input type="text" name="emailadress" id="emailadress" size="27" placeholder="@">
    <p>
        <label for="mail">votre message :</label> <br />
        <textarea name="sendmail" id="mail" rows="15" cols="80">
        </textarea>
    </p>
      <input type="submit" value="Envoyer" />
</form>

<?php
include("_footer.php");
?>
</body>
</html>