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
         $valor = $_GET["v"];
         $rq = sqrt($valor);

         echo" o valor da raiz quadrada é $rq";
    ?>
</div>
</body>
</html>