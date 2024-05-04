<?php
include 'conecta.php';
$Nome = $_POST['Nome'];
$Data_de_abertura=$_POST['Data_de_abertura'];
$Data_de_encerramento=$_POST['Data_de_encerramento'];
$Turno=$_POST['Turno'];
$Modalidade=$_POST['Modalidade'];
$sql = "INSERT INTO turma (Nome, Data_de_abertura, Data_de_encerramento, Turno, Modalidade) VALUES ('$Nome', '$Data_de_abertura', '$Data_de_encerramento', '$Turno', '$Modalidade')";
if (mysqli_query($conn, $sql)){
    echo "<script language = 'javascript' type= 'text/javascript'>
    window.location.href = 'index.php';
    </script>";

}
else{
    echo "<script language='javascript' type = 'text/javascript'>
    alert('Erro!Cliente não foi cadastrado!');
    window.location.href='index.php';
    </script>";
}
?>