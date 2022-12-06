<?php

include("../config.in.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$rgm = $_POST['rgm'];
$nota1 = (float)$_POST['nota1'];
$nota2 = (float)$_POST['nota2'];
$media = (float)($nota1 + $nota2) / 2;

$sql2 = mysqli_query($con, "SELECT * FROM aluno WHERE id='$id'");

$sql = "UPDATE aluno SET nome='$nome', 
rgm='$rgm' WHERE id=$id";

$sqlnotas = "UPDATE cadastra_notas SET nota1='$nota1', nota2='$nota2', media='$media' WHERE aluno_id=$id";

$altera = mysqli_query($con, $sql);
$alteranota = mysqli_query($con, $sqlnotas);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?listar.php'>Voltar</a>";
}else{
   echo "<h3>Alterado com sucesso!</h3>
<a href='listar.php'>Voltar</a>";
}
?>