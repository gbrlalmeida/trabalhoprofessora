<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Iniciar Avaliação</title>
</head>
<body>
    <div class="container">
        <h1>Iniciar Avaliação!</h1>
        <form action="avali.php" method="post">
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="peso">Peso:</label>
                <input type="text" id="peso" name="peso" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="altura">Altura:</label>
                <input type="text" id="altura" name="altura" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="texto">Observações:</label>
                <input type="text" id="texto" name="texto" class="form-control" required>
            </div>
            <button type="submit" class="btn">Cadastrar Avaliação</button>
        </form>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
