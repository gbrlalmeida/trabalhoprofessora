<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>SystemGym</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">SystemGym</h1>
        <?php
        session_start();
        if (isset($_SESSION['academia_id'])) {
            echo '<p>Bem-vindo ao seu painel!</p>';
            echo '<a href="realizar.php">Realizar Avaliação</a>';
            echo '<a href="consultar.php">Consultar Avaliações</a>';
            echo '<a href="logout.php" class="btn">Logout</a>';
        } else {
            echo '<a href="login.php" class="btn">Login</a>';
            echo '<a href="cadastroacademia.php" class="btn">Cadastrar Academia</a>';
        }
        ?>
    </div>
</body>
</html>
