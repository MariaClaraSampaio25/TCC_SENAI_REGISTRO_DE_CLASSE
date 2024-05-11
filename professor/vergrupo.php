<?php
  session_start();
  if(!isset($_SESSION["user"]))
  {
    echo "<script language='javascript' type='text/javascript'> 
    window.location.href='http://senaisgr.com.br/suporte/index.php';
    </script>";
    exit;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagens/senai_png.png" type="image/png">
    <title>SENAI - Serviços</title>
    <link href="scripts/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
          background-color: #08546c;
         }
    .header {
      float: right;
    }
    .letra {
      font-size: small;
    }
</style>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap5/js/bootstrap.min.js"></script>
    <div class="container-fluid">
      <img src="imagens/senainegativo.png" width="20%" height="20%">
      <?php
      echo "<div class='header'>";
      if (empty($_SESSION["user"])){
        echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' class='bi bi-person-square' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
        <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z'/>
      </svg> <a href='log.php' style='color: white; text-decoration: none; font-weight: bold;'>Login | </a>";
        echo "<a href='sair.php' style='color: white; text-decoration: none; font-weight: bold;'> Sair</a>";
      }
      else {
        $usuario = $_SESSION["user"];
        echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' class='bi bi-person-square' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
        <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z'/>
      </svg><b><font color='white'> ".$usuario." | </font></b>";
        echo "<a href='sair.php' style='color: white; text-decoration: none; font-weight: bold;'> Sair</a>";
      }
      echo "</div>";
      ?>
      <hr>
      <nav>
        <?php
          include 'menu.php';
        ?>
      </nav>
      <br>
      <center>
      <h1><p class="text-white">Inventário</p></h1>
      </center>
      <br>
      <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
            </svg>&nbsp;&nbsp;Visualizar Grupos</b></h4>
          </div>
          <div class="card-body" style="text-align: left;">
              <form name="ver_grupo" action="vergrupo.php" method="POST">
                        <?php
                            include 'conecta.php';
                            $pesquisa = mysqli_query($conn, "SELECT * FROM grupo GROUP BY nome_grupo");
                            $row = mysqli_num_rows($pesquisa);
                            if($row > 0){
                                echo '<label for="grupos"><b>Clique em um grupo:</b></label>';
                                 while($registro = $pesquisa-> fetch_array()){
                                    echo '&nbsp;&nbsp;<input type="submit" name="grupos" class="btn btn-outline-primary btn-sm" value="'.$registro['nome_grupo'].'"/>&nbsp;&nbsp;';
                                 }
                                }
                                else {
                                    echo "<b>Não há grupos formados!</b>";
                                }
                                echo '<br><br>';
                                mysqli_close($conn);
                        ?>
              </form>
              <?php
                if(isset($_POST['grupos'])){
                    $grupo = $_POST['grupos'];
                    ?>
                    <center>
                      <h3><b><?php echo $grupo; ?></b></h3>
                    </center>
                    <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="letra" scope="col">Computador</th>
                        <th class="letra" scope="col">RAM</th>
                        <th class="letra" scope="col">Processador</th>
                        <th class="letra" scope="col">SO</th>
                        <th class="letra" scope="col">Versão</th>
                        <th class="letra" scope="col">Fabricante</th>
                        <th class="letra" scope="col">Última Comunicação</th>
                        <th class="letra" scope="col">Patrimônios</th>                
                    </tr>
                    </thead>
                    <tbody>
                <?php
                include 'conecta.php';
            $pesquisa2 = mysqli_query($conn, "SELECT inventario.*, grupo.* FROM inventario,grupo WHERE inventario.id = grupo.id_computador AND grupo.nome_grupo = '$grupo' ORDER BY inventario.nome_computador");
            $row2 = mysqli_num_rows($pesquisa2);
            if($row2 > 0){
                while($registro2 = $pesquisa2-> fetch_array()){
                    $data = $registro2['data_comunicacao'];
                    $id = $registro2['id_computador'];
                    $patrimonio = mysqli_query($conn, "SELECT * FROM info WHERE id_computador = '$id'");
                    $linha = mysqli_num_rows($patrimonio);
                    if($linha > 0)
                    {
                      $botao = '<a class="btn btn-outline-success btn-sm" role="button" href="cpat.php?id='.$id.'" data-bs-toggle="modal" data-bs-target="#comPatrimonio'.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg></a> | <a class="btn btn-outline-success btn-sm" role="button" href="cpat.php?id='.$id.'" data-bs-toggle="modal" data-bs-target="#edita'.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg></a> | <a class="btn btn-outline-success btn-sm" role="button" href="excluir_cpat.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></a>';
                    }
                    else 
                    {
                      $botao = '<a class="btn btn-outline-danger btn-sm" role="button" href="cpat.php?id='.$id.'" data-bs-toggle="modal" data-bs-target="#semPatrimonio'.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg></a>';
                    }
                    echo '<tr>';
                    echo '<th class="letra" scope="row">'.$registro2['nome_computador'].'</th>';
                    echo '<td class="letra">'.$registro2['ram'].'</td>';
                    echo '<td class="letra">'.$registro2['processador'].'</td>';
                    echo '<td class="letra">'.$registro2['so'].'</td>';
                    echo '<td class="letra">'.$registro2['build'].'</td>';
                    echo '<td class="letra">'.$registro2['fabricante'].'</td>';
                    echo '<td class="letra">'.date("d/m/Y", strtotime($data)).'</td>';
                    echo '<td class="letra">'.$botao.'</td>';
                    echo '</tr>';
                    ?>
                    <div class="modal fade" id="comPatrimonio<?php echo $id; ?>" tabindex="-1" aria-labelledby="comPatrimonio" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="comPatrimonio">Informações do <?php echo $registro2['nome_computador']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                        <div class="modal-body" style="text-align:left;">
                          <?php
                            $id = $registro2['id_computador'];
                            $info = mysqli_query($conn, "SELECT * FROM info WHERE id_computador = '$id'");
                            $linha2 = mysqli_num_rows($info);
                            $reg = $info-> fetch_array();
                            echo "Patrimonio do Computador: <b>".$reg['pat_cpu']."</b><br/>";
                            echo "Ano da Aquisição do Computador: <b>".$reg['data_aquisicao']."</b><br/>";
                            echo "Patrimonio do Monitor: <b>".$reg['pat_monitor']."</b><br/>";
                            echo "Ano da Aquisição do Monitor: <b>".$reg['data_aquisicaomo']."</b><br/>";
                          ?>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="semPatrimonio<?php echo $id; ?>" tabindex="-1" aria-labelledby="comPatrimonio" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="semPatrimonio">Cadastro de Informações</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                        <div class="modal-body" style="text-align:left;">
                          <?php
                            $id = $registro2['id_computador'];
                          ?>
                          <form name="cad_info" action="cad_info.php?id=<?php echo $id; ?>" method="POST">
                            <label>Patrimonio do Computador</label><br/>
                            <input type="text" name="patcom" require/><br/>
                            <label>Ano da aquisição do Computador</label><br/>
                            <input type="text" name="anocomp" require/><br/><br/>
                            <label>Patrimonio do Monitor</label><br/>
                            <input type="text" name="patmo" require/><br/>
                            <label>Ano da aquisição do Monitor</label><br/>
                            <input type="text" name="anomo" require/><br/><br/>
                            <input type="submit" class="btn btn-outline-success" value="Cadastrar"/>
                          </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="edita<?php echo $id; ?>" tabindex="-1" aria-labelledby="comPatrimonio" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="semPatrimonio">Atualização das Informações</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                        <div class="modal-body" style="text-align:left;">
                          <?php
                            $id = $registro2['id_computador'];
                          ?>
                          <form name="edita_info" action="editainfo.php?id=<?php echo $id; ?>" method="POST">
                            <label>Patrimonio do Computador</label><br/>
                            <input type="text" name="patcom" value="<?php echo $reg['pat_cpu']; ?>" require/><br/>
                            <label>Ano da aquisição do Computador</label><br/>
                            <input type="text" name="anocomp" value="<?php echo $reg['data_aquisicao']; ?>" require/><br/><br/>
                            <label>Patrimonio do Monitor</label><br/>
                            <input type="text" name="patmo" value="<?php echo $reg['pat_monitor']; ?>" require/><br/>
                            <label>Ano da aquisição do Monitor</label><br/>
                            <input type="text" name="anomo" value="<?php echo $reg['data_aquisicaomo']; ?>" require/><br/><br/>
                            <input type="submit" class="btn btn-outline-success" value="Atualizar"/>
                          </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
                echo '</tbody>';
                echo '</table>';
            }
            else {
                echo "Não há máquinas para listar!";
                echo '</tbody>';
                echo '</table>';
            }
        }
            ?>
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary" onclick="location.href='inventario.php'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
            <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
            <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"/>
            </svg><b>Voltar</b></button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>