<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "imcalculadora";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT nome, idade, peso, altura, imc, data FROM calculos ORDER BY data DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Histórico de Cálculos de IMC</title>
</head>
<body>
    <h1>Histórico de Cálculos</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Peso (kg)</th>
            <th>Altura (m)</th>
            <th>IMC</th>
            <th>Data</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nome']}</td>
                        <td>{$row['idade']}</td>
                        <td>{$row['peso']}</td>
                        <td>{$row['altura']}</td>
                        <td>" . round($row['imc'], 2) . "</td>
                        <td>{$row['data']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum registro encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <br>
    <a href="index.php">Voltar à Calculadora</a>
</body>
</html>
