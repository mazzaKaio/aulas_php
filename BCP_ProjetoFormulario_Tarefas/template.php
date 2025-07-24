<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>   
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <!-- Aqui irá o restante dos códigos... -->
    <form action="" method="">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome">
            </label>

            <label>
                Descrição (opcional):
                <textarea type="text" name="descricao"></textarea>
            </label>

            <label>
                Prazo (opcional):
                <input type="text" name="prazo">
            </label>

            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="baixa" checked>
                        Baixa
                    <input type="radio" name="prioridade" value="media">
                        Média
                    <input type="radio" name="prioridade" value="alta">
                        Alta
                </label>
            </fieldset>

            <label>
                Tarefa concluida:
                <input type="checkbox" name="concluida" value="sim">
            </label>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>

        <?php foreach ($lista_tarefas as $tarefa) : ?>

        <tr>
            <td><?php echo $tarefa; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>