<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de produtos</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">

    <h1>Cadastro de produtos</h1>

    <form method="get">

    <div class="color01">
    <label> Produto 1</label>
    <br>
    <input type="text" name="nome[]" required placeholder="Produto 1">
    <br><br>
    <label> Preço 1</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 1">
    <br><br>
    </div>

    <div class="color02">
    <label> Produto 2</label>
    <br>
    <input type="text" name="nome[]" required placeholder="Produto 2">
    <br><br>
    <label> Preço 2</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 2">
    <br><br>
    </div>

    <div class="color03">
    <label> Produto 3</label>
    <br>
    <input type="text" name="nome[]" required placeholder="Produto 3">
    <br><br>
    <label> Preço 3</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 3">
    <br><br>
    </div>

    <div class="color04">
    <label> Produto 4</label>
    <br>
    <input type="text" name="nome[]" required placeholder="Produto 4">
    <br><br>

    <label> Preço 4</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 4">
    <br><br>
    </div>
    <input type="submit" value="Enviar">
    </form>
</div>

</body>

    <?php 
        $produtos = $_GET["nome"];
        $preco = $_GET["preco"];
        $total = 0;
        $maiorpreco =$preco [0];
        $menorpreco =$preco[0];
        $media =0;
        

     foreach($produtos as $indice => $produto){
         print "PRODUTO - $produto <br>";
         print "PrecosR$" . number_format($preco[$indice], 2,',','.') . "<br><br>";
         $total = $total +$preco[$indice];

         if($preco[$indice] > $maiorpreco){
            $maiorpreco =$preco[$indice];
            print "Maior preço: $maiorpreco";
         }
         if ($preco[$indice] < $menorpreco){
        $menorpreco = $preco[$indice];
        print "Menor preço: $menorpreco";
     }
     print "O preço total dos produtos R$". number_format($total,2,",",".");
    }
   ?>
</html>