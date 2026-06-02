<?php
//variaveis
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";
// usa o conn para conectar todas variaveis com o DB
    $conn = new mysqli($host,$user,$pass,$db);

    // se durante a conexao ter erro
    if($conn->connect_error){
        // mostra que  teve erro
        die("Erro na conexão!");
    }else{
        // mostra que nao teve erro e que entrou(console para nao mostra na tela)
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>