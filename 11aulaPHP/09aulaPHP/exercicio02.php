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
        $nota01 = $_GET["nota01"];
        $nota02 = $_GET["nota02"];

        $mediaFinal = ($nota01 + $nota02)/2;

        echo"A média entre $nota01 e $nota02 é igual a $mediaFinal<br/>";  
        if ($mediaFinal >= 6) {
        	echo "Situação do aluno : Aprovado";
        }else{
        	echo "Situação do aluno : Reprovado";
        }       
    ?>
       <a href="exercio02.html">voltar para pagina inicial</a>
</div>
</body>
</html>
