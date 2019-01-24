<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>

    <?php
      function basic() {
        print("My name is<br>");
        print("Jang<br>");
        print("Dong<br>");
        print("Hyek<br>");
      }
      basic();
     ?>

     <h2>parameter &amp; argument</h2>

     <?php
      function sum($left,$right) {
        print($left + $right);
        print("<br>");
      }

      sum(3,5);
      sum(12,5);
      ?>

      <h2>return</h2>
      <?php
      function sum2($left,$right) {
        return $left + $right;
      }

      print(sum2(7,9));
      file_put_contents('result.txt',sum2(92,12));
       ?>

  </body>
</html>
