<?php

include_once("../config.in.php");

$id = $_GET['id'];

$sql = "DELETE FROM aluno WHERE id = ('$id')";
$sql2 = "DELETE FROM cadastra_notas WHERE aluno_id = ('$id')";

$delete = mysqli_query($con, $sql);

if(!$delete){
    echo "Não foi possível excluir registro. <a href='listar.php'>Tente Novamente</a>";
}else{
   echo "<h3>Registro excluído com sucesso!</h3>";
    header("Refresh: 2, listar.php");
}


?>