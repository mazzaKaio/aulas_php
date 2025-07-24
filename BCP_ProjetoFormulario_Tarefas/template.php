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
                    <input type="radio" name="prioridade" value="Baixa" checked>
                        Baixa
                    <input type="radio" name="prioridade" value="Media">
                        Média
                    <input type="radio" name="prioridade" value="Alta">
                        Alta
                </label>
            </fieldset>

            <label>
                Tarefa concluida:
                <input type="checkbox" name="concluida" value="Sim">
            </label>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <table border>
        <tr>
            <th>Tarefas</th>
            <!-- ADICIONE APÓS A TAG ACIMA -->
             <th>Descrição</th>
             <th>Prazo</th>
             <th>Prioridade</th>
             <th>Concluida</th>
        </tr>

        <?php foreach ($lista_tarefas as $tarefa) : ?>

        <tr>
            <td><?php echo $tarefa['nome']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td>
            <td><?php echo $tarefa['prazo']; ?></td>
            <td><?php echo $tarefa['prioridade']; ?></td>
            <td><?php echo $tarefa['concluida']; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</body>
</html>