<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Classe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            color: #333; /* cor do texto */
        }
        .cabecalho {
            background-color:black; /* cor de fundo do cabeçalho */
            padding: 10px 0; /* espaço interno do cabeçalho */
            text-align:left; /* centraliza o texto do cabeçalho */
            
        }
        .lista-cabecalho {
            list-style: none;
            padding: 0;
        }
        .lista-cabecalho li {
            display: inline-block;
            margin-right: 20px; /* espaçamento entre os ícones */
        }
        .lista-cabecalho li:last-child {
            margin-right: 0; /* remove espaçamento direito do último ícone */
        }
        .lista-cabecalho li a {
            color:white; /* cor do ícone */
            text-decoration: none; /* remove sublinhado do ícone */
        }

        .footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #f8f9fa; /* Cor de fundo do rodapé */
    padding: 20px 0; /* Espaçamento interno */

}
    </style>
</head>

<body>
    <header class="cabecalho">
        <ul class="lista-cabecalho">
            <li><a href="http://localhost/APPGestao_Escolar/index.php#"> Início</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/professor/index.php"> Professor</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/aluno/index.php"> Aluno</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/turma/index.php"> Turmas</a></li>
        </ul>
    </header>

    <center>
        <h1>Bem vindo</h1>
    </center>
    <hr />
   
    <main>
        <!-- Aqui vai o conteúdo da sua página -->
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo date("Y"); ?> Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline text-md-end">
                        <li class="list-inline-item"><a href="politica_privacidade.php">Política de Privacidade</a></li>
                        <li class="list-inline-item"><a href="termos_servico.php">Termos de Serviço</a></li>
                        <li class="list-inline-item"><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>