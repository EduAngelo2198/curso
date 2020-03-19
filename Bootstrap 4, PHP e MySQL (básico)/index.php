<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <!-- Armazenar todos os itens dentro de um container-->
        <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method="POST">
            <div class="form-group">
                <!--Atributo do bootstrap para das estilo a um item do formulário-->
                <label>Número Produto</label>
                <input type="number" class="form-control" name="numProduto" placeholder="Insira o Número do Produto"
                    required autocomplete="off">
                <!--"required" = torna o campo obrigatório, "autocomplete" = define se aparece sugestão para completar o campo-->
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o Nome do Produto"
                    required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade do Produto"
                    required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>
            <div class="botao">
                <button type="submit" class="btn btn-sm">Cadastrar</button>
                <!--"btn" = atributo bootstrap para dar estilização ao botao-->
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>