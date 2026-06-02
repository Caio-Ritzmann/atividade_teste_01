<?php
//logout do usuario destruindo a sessão
//inicia a sessao do servidor    
session_start();
//destroí a sessao
session_destroy();
//leva devolta para a aba login/html
header("Location: ../index.php");
exit();

?>