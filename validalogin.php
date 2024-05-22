<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conn = new mysqli('localhost', 'root', '', 'systemgym');


    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT id, senha FROM academias WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha == $row['senha']) {
            $_SESSION['academia_id'] = $row['id'];
            header("Location: index.php");
            exit;
        } else {
            header("Location: login.php");
            exit();
        }
    } else {
        echo "Nenhuma academia encontrada com esse email!";
    }

    $conn->close();
}
?>
