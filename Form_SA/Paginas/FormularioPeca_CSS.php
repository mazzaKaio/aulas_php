<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" type="text/css" href="../style.css" media="all">

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

    <table>
        <tr>
            <td rowspan="2">
                <img src="Image/Logo.jpeg" alt="LogoAutoPeças" height="100" width="150">
            </td>
            <td> <b>Cadastro</b> </td>
        </tr>


        <tr>
            <td> <b>Peça</b> </td>
        </tr>


        <tr>
            <br>
            <br>
        </tr>


        <tr>
            <td> Codigo Peça: </td>
            <td> <input type="text" name="Entry_CodPeca" onkeypress="mascara(this, somentenum)"> </td>
        </tr>



        <tr>
            <td> Tipo de Peça: </td>

            <td>
                <select name="CB_TipoPeca">
                    <option> Tipo de Peça</option>
                </select>
            </td>
        </tr>



        <tr>
            <td> Descrição: </td>
            <td> <input type="text" name="Entry_Descricaco"> </td>
        </tr>


        <tr>
            <td> Quantidade: </td>
            <td> <input type="text" name="Entry_Quantidade" onkeypress="mascara(this, somentenum)" maxlength="5"></td>
        </tr>


        <tr>
            <td> Lote: </td>
            <td> <input type="text" name="Entry_Lote" maxlength="6"></td>
        </tr>


        <tr>
            <td> Valor: </td>
            <td> <input type="float" name="Valor" onkeypress="mascara(this, somentenum)"></td>
        </tr>


        <tr>
            <td> Fornecedor: </td>
            <td>
                <select name="CB_Fornecedor">
                    <option> Fornecedor </option>
                </select>
            </td>
        </tr>


        <tr>
            <td> Codigo Fornecedor: </td>
            <td> <input type="text" name="Entry_Fornecedor" onkeypress="mascara(this, somentenum)"></td>
        </tr>


        <tr>
            <td> <input type="button" class="button" name="Cadastrar" value="CADASTRAR"></td>

        </tr>

    </table>

    <br><br>

    <address>
        Rafael de Almeida de Magalhães / Estudante / Técnico Desenvolvimento de Sistemas
    </address>


</body>

</html>