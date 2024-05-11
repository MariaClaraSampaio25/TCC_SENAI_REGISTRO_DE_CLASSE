<?php
    include 'conecta.php';
    $nome = $_POST['nomegrupo'];
    $id = $_POST['ok'];
    $selecionados = null;
    if(isset($_POST['ok'])){
        $selecionados = $_POST['ok'];
        if($selecionados !==null){
            for($i=0;$i<count($selecionados);$i++){
                $sql= "INSERT INTO grupo(id_computador,nome_grupo) VALUES ('$selecionados[$i]','$nome')";
                if(mysqli_query($conn,$sql)){
                    echo "<script language='javascript' type='text/javascript'> 
                    window.location.href='inventario.php';
                    </script>";
                }
                else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        }
    }
?>