<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
          <?php 
              $n1 = 3;
              $n2 = 2;
              $m = ($n1 + $n2) / 2;

               $n3=$_GET["a"];
               $n4=$_GET["b"];

              echo"<h2>Valores de $n3 e $n4</h2>";
              echo "A soma vale ".($n1+$n2);
              echo "<br/> A subtração vale ".($n1-$n2);
              echo "<br/> A multiplicacão vale ".($n1*$n2);
              echo "<br/> A divisão vale ".($n1/$n2);
              echo "<br/> A modulo vale ".($n1%$n2);
              echo "<br/> a media vale  $m";

              echo "<br/>  paga get ".($n3+$n4);

           ?>
</body>
</html>
