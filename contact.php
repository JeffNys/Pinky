<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="style_contact.css" type="text/css">
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
  </head>
  <body>
  <div class="ecran">
 <?php 
  include("_nav.php");
 ?>
 
 <h1 id="contact">Contactez-moi !</h1>

 <form action="cible.php" method="POST">

  <DIV ALIGN="CENTER">

    <h2> Plus d'informations ou questions ? </h2>

    <h3> Laissez-moi vos impressions ou interrogations , je vous répondrais entre 2 crocs de Pac-Man ! </h3>

    <h2> MERCI ! </h2>

    <p><label for="Nom"> Ton Nom : </label><input type="text" name="Nom" id="Nom" size="15"></p>

    <p><label for="Prenom"> Ton Prénom : </label><input type="text" name="Prenom" id="Prenom" size="15"></p>
    
    <p><label for="emailadress"> E-Mail ! </label><input type="text" name="emailadress" id="emailadress" size="27" placeholder="@"></p>

    <p>
        <label for="mail"> <h2> Your Message :</h2> </label> <br/>
        <textarea name="sendmail" id="mail" rows="15" cols="80">
        </textarea>
    </p>
    
      <input type="submit" value="Envoyer" />

  </DIV>

 </form>
</div>
<?php
include("_footer.php");
?>
</body>
</html>