<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <center>
        <h1>Painel de Alunos</h1>
    </center>
  
    <br/>
    <center><button type="button" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Voltar</button>  <button type="button" class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal"><b>CADASTRAR</b></button></center>
    
    
    <br/>
    <main>
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 text-center">
                <div class="col-md-12">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                </svg>&nbsp;&nbsp;ALUNOS</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            include 'aluno.php'
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de alunos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="cadcli.php" method = "post">
            <label>Nome</label>
            <input type="text" class="form-control" name ="Nome" required/>
            <br/>
            <label>E-mail</label>
            <input type="email" class="form-control" name ="Email" required/>
            <br/>
            <label>Telefone</label>
            <input type="text" class="form-control" name ="Telefone" required/>
            <br/>
            <label>Endereço</label>
            <input type="text" class="form-control" name ="Endereco" required/>
            <br/>
            <label>Matrícula</label>
            <input type="date" class="form-control" name ="Matricula" required/>
            <br/>
            <label for ="Turno" class="form-label">Turno</label>
            <select class="form-select" id="Turno" name="Turno" required>
                    <option value="" disabled selected>Selecione o turno</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            <br/>
            <button type="submit" class="btn btn-success">CADASTRAR</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

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