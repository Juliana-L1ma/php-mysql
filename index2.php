<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Banco de Dados</title>
</head>
<body>
    <h1>Cadastro de alunos</h1>
    <?php
    //definir as informações de conexão do banco de dados
    $servidor = "Localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bancodadosphp";

    //criar a conexão com o banco de dados
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    //define a consulta SQL para selcionar todos os registros da tabela aluno
    $result_tabela = "SELECT * FROM aluno";

    //executa a consulta sql e armazenar o resultado em uma variável
    $resultado_tabela = mysqli_query($conn, $result_tabela);

    //imprimir os valores na página
    while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
        echo "ID: " . $row_usuario['id']. "<br>";
        echo "Nome: " . $row_usuario['nome']. "<br>";
        echo "Sobrenome: " . $row_usuario['sobrenome']. "<br>". "<hr>";
    }

    ?>
</body>
</html>