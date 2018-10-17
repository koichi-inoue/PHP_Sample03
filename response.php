<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>FORM SAMPLE | RESPONCE</title>
  </head>

  <body>
    <p><b>Received Message</b></p>

    <?php
      date_default_timezone_set('Asia/Tokyo');
      echo '> '.$_POST['message'];
      echo '　( '.date("Y-m-d H:i:s").' ）';
    ?>

  </body>
</html>
