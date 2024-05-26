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
       
       $n = $_GET["num"];
       $o = $_GET["oper"];

       switch ($o) {
         case 1:
             $r = $n * 2;
           break;
         case 2:
             $r = $n ^ 3;
           break;
         case 3:
             $r = sqrt($n);
           break;
           
       }

       echo"O resultado da opeção solicitada foi $r"
    ?>
</div>
</body>
</html>
 