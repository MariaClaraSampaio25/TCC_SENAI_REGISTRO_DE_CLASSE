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
        <h1>CADASTRO DE TURMAS</h1>
    </center>]
    <hr />
    <br />
    
    <main>
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 text-center">
                <div class="col-md-12">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>&nbsp;&nbsp;EDIÇÃO DE CADASTRO DE TURMAS</h4>
                        </div>
                        <div class="card-body">
                        <div class="cardy-body text-start">
                        <?php
                        include 'conecta.php';
                        $Id = $_GET['id'];
                        $sql = "SELECT * FROM turma WHERE id=$Id";
                        $query = $conn ->query($sql);
                        while ($dados = $query -> fetch_assoc()){
                            $Nome = $dados['Nome'];
                            $Data_de_abertura=$dados['Data_de_abertura'];
                            $Data_de_encerramento=$dados['Data_de_encerramento'];
                            $Turno=$dados['Turno'];
                            $Modalidade=$dados['Modalidade'];                        

                        }
                        ?>
                        <form action="editarturma.php?id=<?php echo $Id;?>" method = "post">
                        
                         <label>Nome</label>
                         <input type="text" class="form-control" name ="Nome" value= "<?php echo $Nome?>" required/>
                         <br/>
                         <label>Data de abertura</label>
                        <input type="date" class="form-control" name="Data_de_abertura" value="<?php echo $Data_de_abertura?>" required/>
                         <br/>
                         <label>Data de encerramento</label>
                        <input type="date" class="form-control" name="Data_de_encerramento" value="<?php echo $Data_de_encerramento?>" required/>
                         <br/>
                         <label for="Turno" class="form-label">Turno</label>
                         <select class="form-select" id="Turno" name="Turno" required>
                         <option value="" disabled selected>Selecione o turno</option>
                         <option value="Manhã" <?php if($Turno== "Manhã") echo "selected"; ?>>Manhã</option>
                         <option value="Tarde" <?php if($Turno == "Tarde") echo "selected"; ?>>Tarde</option>
                         <option value="Noite" <?php if($Turno == "Noite") echo "selected"; ?>>Noite</option>
                         <option value="Integral" <?php if($Turno == "Integral") echo "selected"; ?>>Integral</option>
                         </select>
                         <br/>
                        <label for="Modalidade" class="form-label">Modalidade</label>
                        <select class="form-select" id="Modalidade" name="Modalidade" required>
                        <option value="" disabled selected>Selecione a modalidade</option>
                        <option value="Presencial" <?php if($Modalidade == "Presencial") echo "selected"; ?>>Presencial</option>
                        <option value="EAD" <?php if($Modalidade == "EAD") echo "selected"; ?>>EAD</option>
                        <option value="Semipresencial" <?php if($Modalidade == "Semipresencial") echo "selected"; ?>>Semipresencial</option>
                        </select>
                         <br/>
                         <br/>
                          <button type="submit" class="btn btn-success">ATUALIZAR</button>

                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <br/>
        

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