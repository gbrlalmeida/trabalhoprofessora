<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso']; 
    $altura = $_POST['altura']; 
    $observacao = $_POST['texto'];

    $altura_metros = $altura / 100;
    $imc = $peso / ($altura_metros * $altura_metros);

    $conn = new mysqli('localhost', 'root', '', 'systemgym');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO avaliacao (nome, idade, peso, altura, imc, observacao) VALUES ('$nome', '$idade', '$peso', '$altura', '$imc', '$observacao')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['academia_id'] = $conn->insert_id;
        header("Location: index.php");
        exit();
    } else {
        echo "Erro no cadastro da avaliação: " . $conn->error;
    }

    $conn->close();
    
}
?>
