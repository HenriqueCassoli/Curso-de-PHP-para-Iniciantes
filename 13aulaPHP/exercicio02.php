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
          
          $mult=0;
          $num=$_GET['num'];
          echo "Analisando o número <span class='foco'>$num</span> <br/>";
          echo "Valores múltiplos: ";
           //Aqui começo a estrutura de repetição para calcular os números primos, usei o retorno do resto "%", e contar quantos múltiplos ele tem. 
          for($i=1; $i <=$num ; $i++){ 
              $mod=$num%$i;

              if  ($mod == 0 && $i >=1) {
            $mult++;
            echo " <span class='foco'>$i,</span>";
            }
          }
         //Aqui verifico se é primo ou não 
       echo "<br/>  Total de múltiplos: <span class='foco'>$mult</span>";
        if ($mult == 2) {
            echo "<br/>" . "Resultado: $num " . "<span class ='foco'>" . "É PRIMO" . "</span>";
        }
        else {
            echo "<br/>" . "Resultado: $num " . "<span class ='foco'>" . "NÃO É PRIMO" . "</span>";
        }
    ?>
    <br/>
          }
           <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>

        ?>
           
       
</div>
</body>
</html>
 