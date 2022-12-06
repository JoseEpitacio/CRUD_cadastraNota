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
        <form method="post" action="cadastro-notasDB.php">
            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" required>
            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" required>
            <label for="aluno_id">Id do Aluno</label>
            <input type="number" name="aluno_id" required>
            <div class="actions">
                <input type="submit" value="Cadastrar" class="btn-primary">
            </div>
        </form>
    </div>
</body>
</html>