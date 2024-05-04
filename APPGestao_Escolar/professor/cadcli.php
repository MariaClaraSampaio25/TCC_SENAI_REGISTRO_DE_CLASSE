<?php
include 'conecta.php';
$Nome = $_POST['Nome'];
$Disciplina= $_POST['Disciplina'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Endereco =$_POST['Endereco'];
$sql = "INSERT INTO professor (Nome, Email, Disciplina,Telefone, Endereco) VALUES ('$Nome',$Disciplina, '$Email', '$Telefone', '$Endereco')";
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