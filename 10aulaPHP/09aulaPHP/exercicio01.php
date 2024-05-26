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
         $a = $_GET["ano"];
         $i = date("Y") - $a;
         echo "Você nasceu em $a e sua idade é $i <br/>";
         if ($i < 16) {
            
           $tipoVoto = "não vota";
         }else{
          
             if($i >= 16 && $i < 18 || $i > 65){
                $tipoVoto = "Voto opcional" ;
             } else {
                $tipoVoto = "voto obrigadorio";
             }

         }

         echo "Para a sua idade,$tipoVoto "
    ?>
</div>
</body>
</html>
 