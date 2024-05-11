<?php
    include 'conecta.php';
    $Id_turma = $_POST['Id_turma']; 
    $Id_aluno = $_POST['ok']; 
    $selecionados = null;
    echo $Id_turma;
    if(isset($_POST['ok'])){
        $selecionados = $_POST['ok'];
        if($selecionados !==null){
            for($i=0;$i<count($selecionados);$i++){
                $sql= "INSERT INTO aluno_turma (Id_aluno, Id_turma) VALUES ('$selecionados[$i]','$Id_turma')";
                if(mysqli_query($conn,$sql)){
                    echo "<script language='javascript' type='text/javascript'> 
                    window.location.href='matricalunos.php';
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