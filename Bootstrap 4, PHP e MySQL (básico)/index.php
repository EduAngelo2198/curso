<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/style.css">
</head>

<body>

    <div class="container"><!-- Armazenar todos os itens dentro de um container-->
        <form action="">
            <div class="form-group"> <!--Atributo do bootstrap para das estilo a um item do formulário-->
                <label>Número Produto</label>
                <input type="number" class="form-control" placeholder="Insira o Número do Produto">
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" placeholder="Insira o Nome do Produto">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" placeholder="Insira a Quantidade do Produto">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success btn-sm">Cadastrar</button> <!--"btn" = atributo bootstrap para dar estilização ao botao-->

        </form>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>