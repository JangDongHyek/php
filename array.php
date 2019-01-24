<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $coworkers = array('Jang', 'Dong', 'Hyek', 'Hae');
      echo $coworkers[1]."<br>";
      echo $coworkers[3]."<br>";

      var_dump(count($coworkers));
      echo "<br>";
      array_push($coworkers, 'Kim');
      var_dump($coworkers);
     ?>

  </body>
</html>
