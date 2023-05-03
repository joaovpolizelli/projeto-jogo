<?php

$servidor_bd = "127.0.0.1";
$usuario_bd = "root";
$senha_bd = "";
$banco_de_dados = "delivery_jogos_novo";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$sql_buscar_usuario = "select * from usuario";

$um_usuario = mysqli_query($conexao, $sql_buscar);

mysqli_close($conexao);

?>