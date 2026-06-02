<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">
    <!-- aq criamos a tabela -->
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    // aqui se puxa da tabela 
    $sqlTodosUsuarios = "SELECT * FROM usuarios";
    // aqui o query comparou 
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);
    // aqui guardou
    while ($linha = $resultadoTodosUsuarios->fetch_assoc()) {

        // o fetch assoc
    
        echo "  <tr>
                    <td>" . $linha['id'] . "</td>
                    <td>" . $linha['usuario'] . "</td>
                    <td>" . $linha['senha'] . "</td>
                </tr>
        ";

    }

    ?>




</table>