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
          $nub = $_GET["nub"];
           $multi = 1;
          
          do{
            $resultado = $nub * $multi;
           echo"$nub x $multi = $resultado  <br/>";
           $multi++;
          }while($multi <=10)
            // code...
          
            ?>
           
       </form>
</div>
</body>
</html>
 