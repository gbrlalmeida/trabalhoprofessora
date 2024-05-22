<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 

    $conn = new mysqli('localhost', 'root', '', 'systemgym');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $sql = "INSERT INTO academias (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['academia_id'] = $conn->insert_id;
        header("Location: index.php");
        exit();
    } else {
        echo "Erro no cadastro: " . $conn->error;
    }

    $conn->close();
}
?>
