<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);


include "conexao.php";

$sql_inserir_usuario = "insert into usuario(nome, email,senha) values('$nome', '$email', '$senha')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");
?>