<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'menu-dropdown.php' ?>

    
        <h2 class="text-center mt-3">Cadastro de Cliente</h2>

    <div class="d-flex justify-content-center">
        <form class="form-group mt-3 w-50" action="processarInsercao.php" method="POST">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control form-control-lg " type="text" name="nome" id="nome" required>

            <label class="form-label" for="endereco">Endereco:</label>
            <input class="form-control form-control-lg" type="text" name="endereco" id="endereco" required>

            <label class="form-label" for="telefone">Telefone:</label>
            <input class="form-control form-control-lg" type="text" name="telefone" id="telefone" required>

            <label class="form-label" for="email">E-mail:</label>
            <input class="form-control form-control-lg" type="email" name="email" id="email" required>

            <button class="btn btn-success mt-4" type="submit">Cadastrar Cliente</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>