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
        include_once('../header.php');
    ?>

    <div class="container">
        <form method="post" action="cadastro-alunoDB.php">
            <label for="nome">Nome do Aluno</label>
            <input type="text" name="nome" required>
            <label for="rgm">RGM</label>
            <input type="text" name="rgm" required>
            <div class="actions">
                <input type="submit" value="Cadastrar" class="btn-primary">
            </div>
        </form>
    </div>
</body>
</html>