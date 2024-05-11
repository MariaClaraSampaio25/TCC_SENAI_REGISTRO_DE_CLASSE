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
        <li><a href="http://localhost/APPGestao_Escolar/index.php"> Início</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/professor/index.php"> Professor</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/aluno/index.php"> Aluno</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/turma/index.php"> Turmas</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/script/matricalunos.php"> Matriculas</a></li>
            <li><a href="http://localhost/APPGestao_Escolar/script/verturma.php"> Consulta de turmas</a></li>
        </ul>
    </header>   
       
      <br>
      <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
            </svg>&nbsp;&nbsp;Visualizar Turmas</b></h4>
          </div>
          <div class="card-body" style="text-align: left;">
          <form name="ver_turma" action="verturma.php" method="POST">
    <?php
    include 'conecta.php';
    $pesquisa = mysqli_query($conn, "SELECT * FROM turma GROUP BY Nome");
    $row = mysqli_num_rows($pesquisa);
    if ($row > 0) {
        echo '<label for="turmas"><b>Clique em uma Turma:</b></label>';
        while ($registro = $pesquisa->fetch_array()) {
            echo '&nbsp;&nbsp;<button type="submit" name="aluno_turma" value="' . $registro['Nome'] . '" class=" btn btn-sm btn-outline-secondary">' . $registro['Nome'] . '</button>&nbsp;&nbsp;';
        }
    } else {
        echo "<b>Não há turmas formadas!</b>";
    }
    echo'<br></br>';
    if (isset($_POST['aluno_turma'])) {
        $aluno_turma = $_POST['aluno_turma'];
        ?>
        <center>
            <h3><b><?php echo $aluno_turma; ?></b></h3>
        </center>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="letra" scope="col">Alunos</th>
                </tr>

            </thead>
            <tbody>
                <?php
                include 'conecta.php';
                $pesquisa2 = mysqli_query($conn, "SELECT aluno.* FROM aluno INNER JOIN aluno_turma ON aluno.Id= aluno_turma.Id_aluno INNER JOIN turma ON aluno_turma.Id_turma = turma.Id WHERE turma.Nome = '$aluno_turma' ORDER BY aluno.Nome ASC");
            
                $row2 = mysqli_num_rows($pesquisa2);
                if ($row2 > 0) {
                    while ($registro2 = $pesquisa2->fetch_array()) {
                        echo '<tr>';
                        //echo '<td class="letra">' . $registro2['Nome'] . '</td>';
                        echo '<td class="letra"><a href="detalhes_aluno.php?id=' . $registro2['Id'] . '" style="text-decoration: none; color: black;">' . $registro2['Nome'] . '</a></td>';
                        echo '</tr>';
                        
                    }
 
                } else {
                    echo "<tr><td colspan='1'><b>Não há alunos matriculados nesta turma!</b></td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    mysqli_close($conn);
    ?>
</form>
              
            <a href="http://localhost/APPGestao_Escolar/index.php"><button type="button" class="w-100 btn btn-lg btn-outline-secondary" onclick="location.href=''"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
            <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
            <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"/>
            </svg><b>Voltar</b></button></a>
          </div>
        </div>
      </div>
    </div>
    </div>
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