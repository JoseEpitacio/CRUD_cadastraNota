<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.admin/styles.css">
    <link rel="stylesheet" href="./styles.admin/table.css">
</head>
<body>

    <script language='javascript'>
        function confirmDel(aURL) {
            if (confirm('Voce tem certeza que deseja excluir?')) {
                location.href = aURL;
            }
        }
    </script>

    <?php
        include "../config.in.php";
        include_once('../header.php');

        $sql = "SELECT id, nome, rgm, media from aluno, cadastra_notas WHERE id = aluno_id order by id";

        $todos = mysqli_query($con, $sql);
    ?>
    <table>
        <tr>
            <td style="width: 25px">Id</td>
            <td style="width: 205px">Nome do Aluno</td>
            <td style="width: 205px">RGM</td>
            <td style="width: 205px">Média</td>
            <td style="width: 105px">Alterar</td>
            <td style="width: 105px">Excluir</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($todos)){?>

        <tr>
            <td name="id"><?=$dados['id'];?></td>
            <td><?=$dados['nome'];?></td>
            <td><?=$dados['rgm'];?></td>
            <td><?=$dados['media'];?></td>
            <td>
                <a href="alterar-aluno.php?&id=<?=$dados['id'];?>">Alterar</a>
            </td>
            <td>
                <a href="javascript:confirmDel('excluir-aluno.php?&id=<?=$dados['id']; ?>')">
                    Excluir
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>
</body>
</html>











