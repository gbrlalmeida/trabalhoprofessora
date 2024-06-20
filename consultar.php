<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Avaliações</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Consulta de Avaliações</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>IMC</th>
            <th>Observação</th>
        </tr>

        <?php
      
        $conn = new mysqli('localhost', 'root', '', 'systemgym');

   
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

      
        $sql = "SELECT * FROM avaliacao";
        $result = $conn->query($sql);

   
        if ($result->num_rows > 0) {
         
            while($row = $result->fetch_assoc()) {
             
                $altura_metros = $row["altura"] / 100;
                $imc = $row["peso"] / ($altura_metros * $altura_metros);

        
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nome"] . "</td>
                        <td>" . $row["idade"] . "</td>
                        <td>" . $row["peso"] . "</td>
                        <td>" . $row["altura"] . "</td>
                        <td>" . number_format($imc, 2) . "</td>
                        <td>" . $row["observacao"] . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>0 resultados</td></tr>";
        }


        $conn->close();
        ?>
    </table>
    </br>
        <p>IMC:</p>
    <p> MENOR QUE 18,5	   MAGREZA	0</p>
    <p> ENTRE 18,5 E 24,9  NORMAL	0</p>
    <p> ENTRE 25,0 E 29,9  SOBREPESO	I</p>
    <p> ENTRE 30,0 E 39,9  OBESIDADE	II</p>
    <p> MAIOR QUE 40,0	   OBESIDADE GRAVE	III</p>
    </p>
</body>
</html>

