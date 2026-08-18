<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de produtos</title>
    <link rel="stylesheet" href="index.css">
    <a href="formulario.php">Voltar</a>
</head>
<body>
    <header> <h1>Tec-informática</h1> <header></header>
    <div class="resultado">

    <?php
     /*Variaveis*/  
        $produtos = $_GET["produto"];
        $preco = $_GET["preco"];
        $total = 0;
        $maiorpreco = $preco[0];
        $menorpreco = $preco[0];
        $media = 0;
        

    foreach($produtos as $indice => $produto){
        print "PRODUTO - $produto <br><br>";
        print "Preços R$: " . number_format($preco[$indice], 2,',','.') . "<br><br>";
        $total = $total + $preco[$indice];
    
         
    /*Maior preço e menor preço*/
        if($preco[$indice] > $maiorpreco){
            $maiorpreco = $preco[$indice];
        }
        else if ($preco[$indice] < $menorpreco){
        $menorpreco = $preco[$indice];
        }
    }
    /*Total, maior valor e menor valor*/
        print "Maior preço: $maiorpreco <br><br>";   
        print "Menor preço: $menorpreco <br><br>";
        print "O preço total dos produtos: R$ ". number_format($total,2,",",".");
        print "<br><br>";

    /*Mensagem de validação*/
        if ($total > 500){
        print "Atenção! O valor total da compra ultrapassou R$ 500,00.";
        }else{
        print "O valor total da compra não ultrapassou R$ 500,00.";
        }
    ?>

    </div>
   <footer> <br> <h3>desenvolvedor: Alice</h3> <br> <h4>2026</h4> </footer>
</body>
</html>