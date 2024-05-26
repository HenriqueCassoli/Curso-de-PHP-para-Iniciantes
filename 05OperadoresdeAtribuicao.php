<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

        <?php 
           $preco = $_GET["p"];

            echo "O preço do produto e R$ ".number_format($preco,2);
            $preco = $preco - ($preco * 10/100);
            echo "</br> E o novo preço com 10% de aumento sera R$ ".number_format($preco,2);

         ?>
</body>
</html>