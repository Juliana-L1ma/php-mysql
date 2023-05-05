<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados com PHP</title>
    <style>
        body{
            background-color: grey;
        }
    </style>
</head>
<body>
    <h1>Bem Vindo ao PHP</h1>

    <form method="post">
        <label>Digite um valor</label>
        <input type="text" name="valor">
        <button type="submit">Enviar</button>
    </form>
    <?php

     echo "Hello world";
     echo "<br>";
     $numero1 = 2;
     $numero2 = 7;
     
     $soma= $numero1 +  $numero2;
     echo "A soma é de 7 + 2 é = " . $soma;
     echo "<br>";

     if ($soma >= 7){
        echo "Aluno aprovado";
     }else{
        echo "Reprovado";
     }

     echo "<br>";
     
     if (isset($_POST['valor'])){
        
     $valorDigitado = $_POST['valor'];
     echo "Valor digitado é : " . $valorDigitado;
     }

    
     
    ?>
</body>

</html>