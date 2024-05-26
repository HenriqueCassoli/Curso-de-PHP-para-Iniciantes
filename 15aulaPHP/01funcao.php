<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
      
            <?php 
            
            function teste(&$x){
              $x = $x + 2;
              echo "<p>O valor  de X e $x</p>";
            }

            $a = 3;
            teste($a);

            echo "<p> O o valor de A é $a </p>";


             include"funcoes.php";

            echo "<h1>testando funcoes</h1>";
            olaMundo();
            mostraValor(9);
        ?>
        
</div>
</body>
</html>
 