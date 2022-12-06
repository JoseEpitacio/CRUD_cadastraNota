<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.admin/styles.css">
</head>
<body>
    <?php

    include("../config.in.php");
    include_once('../header.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM aluno WHERE id = $id";
    $sqlnotas = "SELECT * FROM cadastra_notas WHERE aluno_id = $id";

    $busca = mysqli_query($con, $sql);
    $buscanotas = mysqli_query($con, $sqlnotas);

    $dados2 = mysqli_fetch_array($buscanotas);

    while($dados=mysqli_fetch_array($busca)){
        
    ?>

    <form action="alterar-alunoDB.php" method="post">
        <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
        <table>
            <tr>
                <td>Nome do Aluno: </td>
                <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
            </tr>
            <tr> 
                <td>RGM: </td>
                <td><input name="rgm" type="text" value="<?=$dados['rgm'];?>"/></td>
            </tr>
            <tr>
                <td>Nota 1: </td>
                <td><input type="text" name="nota1" value="<?=$dados2['nota1'];?>"></td>
            </tr>
            <tr>
                <td>Nota 2: </td>
                <td><input type="text" name="nota2" value="<?=$dados2['nota2'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="Enviar">Cadastrar</button></td>
            </tr>
        </table>
    </form>
    <?php 
    }
    ?>
</body>
</html>