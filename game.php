<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="style_game.css" type="text/css">
  </head>
  <body>
    <div id='all_page'>
      <?php include("_nav.php"); ?>
      <h1>Testez-moi !</h1>

      <div id="game_content">
      </div>
      <div id="pacman">
      </div>
      <script src="pacman.js">
      </script>
      <script src="modernizr-1.5.min.js">
      </script>

      <script>

        var el = document.getElementById("pacman");

        if (Modernizr.canvas && Modernizr.localstorage &&
        Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
          window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
        } else {
          el.innerHTML = "Sorry, needs a decent browser<br /><small>" +
            "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
          }
      </script>

      <?php include("_footer.php"); ?>
    </div>
  </body>
</html>
