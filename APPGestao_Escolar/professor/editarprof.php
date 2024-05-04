<?php
include 'conecta.php';
$Id = $_GET['id'];
$Nome = $_POST['Nome'];
$Disciplina = $_POST['Disciplina'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Endereco = $_POST['Endereco'];
$sql = "UPDATE professor SET Nome= ?,Disciplina=?, Email=?, Telefone=?, Endereco=? WHERE id=?";
$stmt = $conn -> prepare($sql) or die ($conn->error);
if(!$stmt){
    echo "Erro: ".$conn->error;
}
$stmt->bind_param('sssssi', $Nome, $Disciplina, $Email, $Telefone, $Endereco, $Id);
$stmt->execute();
$conn->close();
header("Location: index.php");

?>