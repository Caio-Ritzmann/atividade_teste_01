<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simples";

$conn = new mysqli ($host,$user,$pass,$db);

if($conn->connect_erro){
    die ("Erro na conexão");
}else{
    // echo "<p>Banco : OK <\p>";
    echo "<script> console.log ('banco : OK ')</script>";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST ["senha"]
};
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com o Banco</title>
</head>
<body>

    <h2>
        Login com PHP
    </h2>

    <form method="POST">
        <label for="usario">Usuario</label>
        <input type="text" name="usuario">

        <br><br>

        <label for="senha">Senha</label>
        <input type="password" name="senha">
        
        <br><br>

        <button type="submit">Entrar</button>

    </form>


</body>

</html>