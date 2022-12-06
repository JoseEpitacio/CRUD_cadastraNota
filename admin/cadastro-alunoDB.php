<?php 
    include("../config.in.php");

    $nome = $_POST['nome'];
    $rgm = $_POST['rgm'];

    $sql = "INSERT INTO aluno (nome, rgm) VALUES ('$nome','$rgm')";

    $insert = mysqli_query($con, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='cadastro.php'>Tente Novamente</a>";
    } else {
        echo "<h3>Aluno cadastrado com sucesso!</h3>";
        echo "<a href='cadastro-notas.php'>Avançar</a>";
    }

    echo "<script language='javascript'>

    </script>"
?>