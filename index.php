<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Calculadora de IMC</h1>
        <form action="calcular.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" id="idade" name="idade" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (kg):</label>
                <input type="number" id="peso" name="peso" step="0.1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura (m):</label>
                <input type="number" id="altura" name="altura" step="0.01" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular IMC</button>
        </form>
        <a href="historico.php" class="mt-3">Ver Histórico de Cálculos</a>
    </div>
</body>
</html>
