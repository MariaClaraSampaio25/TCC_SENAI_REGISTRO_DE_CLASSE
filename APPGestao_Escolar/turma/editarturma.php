<?php
include 'conecta.php';
$Id = $_GET['id'];
$Nome = $_POST['Nome'];
$Data_de_abertura=$_POST['Data_de_abertura'];
$Data_de_encerramento=$_POST['Data_de_encerramento'];
$Turno=$_POST['Turno'];
$Modalidade=$_POST['Modalidade'];
$sql = "UPDATE turma SET Nome= ?,Data_de_abertura=?, Data_de_encerramento=?, Turno=?,Modalidade=?  WHERE id=?";
$stmt = $conn -> prepare($sql) or die ($conn->error);
if(!$stmt){
    echo "Erro: ".$conn->error;
}
$stmt->bind_param('sssssi', $Nome, $Data_de_abertura, $Data_de_encerramento,$Turno,$Modalidade, $Id);
$stmt->execute();
$conn->close();
header("Location: index.php");

?>