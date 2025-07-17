<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

    <link rel="stylesheet" type="text/css" href="../style.css">

    <script src="../functions.js"></script>
</head>
<body>
    <ul>
        <li><a href="../menu_principal.html">Inicio</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Cadastrar</a>
            <div class="dropdown-content">
                <a href="fornecedor.html">Fornecedor</a>
                <a href="tela_funcionario.html">Funcionario</a>
                <a href="formulario_cliente_css.html">Cliente</a>
                <a href="FormularioPeca_CSS.html">Produto</a>
            </div>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Pesquisar</a>
            <div class="dropdown-content">
                <a onclick="nao_disp()">Fornecedor</a>
                <a onclick="nao_disp()">Funcionario</a>
                <a onclick="nao_disp()">Cliente</a>
                <a onclick="nao_disp()">Produto</a>
            </div>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Alterar</a>
            <div class="dropdown-content">
                <a onclick="nao_disp()">Fornecedor</a>
                <a onclick="nao_disp()">Funcionario</a>
                <a onclick="nao_disp()">Cliente</a>
                <a onclick="nao_disp()">Produto</a>
            </div>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Excluir</a>
            <div class="dropdown-content">
                <a onclick="nao_disp()">Fornecedor</a>
                <a onclick="nao_disp()">Funcionario</a>
                <a onclick="nao_disp()">Cliente</a>
                <a onclick="nao_disp()">Produto</a>
            </div>
        </li>
    </ul>

    <div class="container">
        <table>
            <tr>
                <td rowspan="2" class="logo-cell">
                    <img src="PEÇA.png" alt="Logo vortex" height="130" width="140">
                </td>
                <td class="title"><b>Cadastro</b></td>
            </tr>
            <tr>
                <td class="subtitle"><b>Cliente</b></td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td>Código Cliente</td>
                <td><input type="text" name="entry_Cod_cliente" onkeypress="mascara(this, somentenum)"></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="entry_nome_cliente" onkeypress="mascara(this, somentetexto)"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="entry_telefone_cliente" onkeypress="mascara(this, telefone)"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="entry_email_cliente"></td>
            </tr>
            <tr>
                <td>CPF</td>
                <td><input type="text" name="entry_CPF_cliente" onkeypress="mascara(this, rgecpf)"></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" name="entry_endereco_cliente"></td>
            </tr>

            <tr>
                <td colspan="2" class="buttons">
                    <input type="button" value="Cadastrar">
                    <input type="button" value="Alterar">
                    <input type="button" value="Excluir">
                    <input type="button" value="Pesquisar">
                </td>
            </tr>
        </table>

        <footer>
            <p>Ana Clara De Souza - Estudante - Técnico em Desenvolvimento de Sistemas</p>
        </footer>
    </div>
</body>
</html>