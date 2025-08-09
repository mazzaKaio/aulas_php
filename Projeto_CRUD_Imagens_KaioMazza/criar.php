<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionário - SESI|SENAI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'includes/cabecalho.php' ?>

    <div class="">
        <h1>Cadastrar Novo Funcionário</h1>

        <!-- FORMULARIO PARA CADASTRAR FUNCIONARIO -->
         <form action="processo_criar.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nome: </label>
            <input type="text" name="nome" id="nome" required>
            <br><br>

            <label for="cargo">Cargo: </label>
            <input type="text" name="cargo" id="cargo" required>
            <br><br>

            <label for="foto">Foto: </label>
            <input type="file" name="foto" id="foto" required>
            <br><br>

            <button type="submit">Cadastrar</button>
         </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>