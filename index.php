<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coutinho php</title>

</head>


<body>
    <h1>Cadrasto aluno</h1>
    <?php
        echo "";
    ?>

<form action="" method="post">
    
    <p>nome do aluno: <input type="text" name="nome" /></p>
    <p>sobrenome do mesmo: <input type="text" name="serie" /></p>
    <p>turma: <input type="text" name="nome" /></p>
    <p><input type="submit"  /></p>

</form>
<?php
    
    $servername = "localhost";
    $username = "coutinho1";
    $password = "123";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>

    <script src="script.js"></script>    
</body>
</html>