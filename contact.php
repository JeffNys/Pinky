<?php
include("_nav.php");
?>
<form action="cible.php" method="POST">
<h2 id="contact">Contactez-moi !</h2>
        <p>Pour d'autres informations ou questions , je me ferais un plaisir de vous répondre .<p>
        
        <p><label for="emailadress">Votre email svp :</label><input type="text" name="emailadress" id="emailadress" size="27" placeholder="@">
        <p>
            <label for="mail">votre message :</label> <br />
            <textarea name="sendmail" id="mail" rows="15" cols="100">
            </textarea>
        </p>
      <input type="submit" value="Envoyer" />
</form>

<?php
include("_footer.php");
?>