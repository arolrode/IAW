<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          for ($x=0; $x <= 10; $x++) {
            if($x < 10){
                    echo $x, ' ';
            }
            elseif($x == 10){
                echo $x;
            }
          }
          echo '<br>';
          for ($a=50; $a <=80; $a+=2){
              echo $a, ' ';
          }
          echo '<br>';
          for ($b=17; $b >=-17; $b--){
              echo $b, ' ';
          }
          echo '<br>';
          for ($c=0; $c <=10; $c++) {
              echo $c * 6, ' ';
          }
        ?>
    </body>
</html>
