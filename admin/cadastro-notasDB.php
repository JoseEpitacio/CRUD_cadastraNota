<?php 
    include("../config.in.php");

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $media = ($nota1 + $nota2) / 2;
    $aluno_id = $_POST['aluno_id'];

    $sql = "INSERT INTO cadastra_notas (nota1, nota2, media, aluno_id) VALUES ('$nota1','$nota2','$media','$aluno_id')";

    $insert = mysqli_query($con, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='cadastro.php'>Tente Novamente</a>";
    } else {
        echo "<h3>Notas cadastradas com sucesso!</h3>";
        echo "<a href='index.php'>Avançar</a>";
    }

    echo "<script language='javascript'>

    </script>"
?>