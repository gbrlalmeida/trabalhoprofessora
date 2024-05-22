<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "imcalculadora";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if ($peso > 0 && $altura > 0) {
    
        $imc = $peso / ($altura * $altura);

        $stmt = $conn->prepare("INSERT INTO calculos (nome, idade, peso, altura, imc) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("siidd", $nome, $idade, $peso, $altura, $imc);

        if ($stmt->execute()) {
            echo "<h2>{$nome}, seu IMC é " . round($imc, 2) . "</h2>";
        } else {
            echo "Erro: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, insira valores válidos para peso e altura.";
    }
}

$conn->close();
?>

