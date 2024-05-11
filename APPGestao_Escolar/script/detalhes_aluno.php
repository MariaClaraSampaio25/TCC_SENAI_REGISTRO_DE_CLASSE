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
        .conteudo_detalhes_aluno{
            padding:10px;
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
            <li><a href="http://localhost/APPGestao_Escolar/index.php"> Início</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/professor/index.php"> Professor</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/aluno/index.php"> Aluno</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/turma/index.php"> Turmas</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/script/matricalunos.php"> Matriculas</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/script/verturma.php"> Consulta de turmas</a></li>
        </ul>
    </header>
<section class="conteudo_detalhes_aluno">
 <h1>Informações do Aluno</h1>
    <?php
    include 'conecta.php';
    
    if (isset($_GET['id'])){
        $Id = $_GET['id'];
        
        
        $Id = mysqli_real_escape_string($conn, $Id);
        
       
        $sql = "SELECT * FROM aluno WHERE id='$Id'";
        $query = $conn->query($sql);
        
       
        if ($query && $query->num_rows > 0) {
            $dados = $query->fetch_assoc();
            $Nome = $dados['Nome'];
            $Email = $dados['Email'];
            $Telefone = $dados['Telefone'];
            $Endereco = $dados['Endereco'];
            $Matricula = $dados['Matricula'];
            $Turno = $dados['Turno'];
            
           
            echo "<p><strong>ID:</strong> $Id</p>";
            echo "<p><strong>Nome:</strong> $Nome</p>";
            echo "<p><strong>Email:</strong> $Email</p>";
            echo "<p><strong>Telefone:</strong> $Telefone</p>";
            echo "<p><strong>Endereço:</strong> $Endereco</p>";
            echo "<p><strong>Matrícula:</strong> $Matricula</p>";
            echo "<p><strong>Turno:</strong> $Turno</p>";
        } else {
            echo "<p>Aluno não encontrado.</p>";
        }
    } else {
        
        echo "<p>Nenhum aluno selecionado.</p>";
    }
    ?>
    <br>
    <a href="http://localhost/APPGestao_Escolar/script/verturma.php"><button type="button" class="btn btn-outline-secondary"><svg href="" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Voltar</button> </a>
</section>
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
    
