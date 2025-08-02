<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'menu-dropdown.php' ?>

    <h2 class="text-center mt-3">Excluir Cliente</h2>

    <div class="d-flex justify-content-center">
        <form class="form-group mt-3" action="processarDelecao.php" method="POST">
            <label class="form-label" for="id">ID do Cliente:</label><br>
            <input class="form-control" type="number" name="id" id="id" required><br>

            <button class="btn btn-danger mt-2" type="submit">Excluir Cliente</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>