<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de produtos</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header> <h1>Tec-informática</h1> <header>

    <div class="formulario">

    <h2>Cadastro de produtos</h2>

    <form action="resultado.php" method="get">

    <div class="color01">
    <label> Produto 1</label>
    <br>
    <input type="text" name="produto[]" required placeholder="Produto 1">
    <br><br>
    <label> Preço 1</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 1">
    <br><br>
    </div>

    <div class="color02">
    <label> Produto 2</label>
    <br>
    <input type="text" name="produto[]" required placeholder="Produto 2">
    <br><br>
    <label> Preço 2</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 2">
    <br><br>
    </div>

    <div class="color03">
    <label> Produto 3</label>
    <br>
    <input type="text" name="produto[]" required placeholder="Produto 3">
    <br><br>
    <label> Preço 3</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 3">
    <br><br>
    </div>

    <div class="color04">
    <label> Produto 4</label>
    <br>
    <input type="text" name="produto[]" required placeholder="Produto 4">
    <br><br>

    <label> Preço 4</label>
    <br>
    <input type="text" name="preco[]" required placeholder="Preço 4">
    <br><br>
    </div>
    <input type="submit" value="Enviar">
    </form>
    </div>

    <footer> <br> <h3>desenvolvedor: Alice</h3> <br> <h4>2026</h4> </footer>
</body>
</html>