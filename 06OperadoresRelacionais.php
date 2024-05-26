<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php  

  /*comentario

     $n1 = $_GET["a"];
     $n2 = $_GET["b"];
     $tipo = $_GET["op"];

     echo"Os valores passados foram $n1 e $n2 <br>";
     $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
     echo "o resuldado sera $r";
*/
      $nota1 = $_GET["n1"];
      $nota2 = $_GET["n2"];

      $m = ($nota1+$nota2)/2;

      echo "A media entre $nota1 e $nota2 e $m <br/>";
      $sit = ($m<6)? "reprovado":"aprovado";
      echo "a situação do aluno $sit";


?>


</body>
</html>