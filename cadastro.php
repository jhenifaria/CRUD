<?php

include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nasc = $_POST['nasc'];
$telefone = $_POST['telefone'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,usuario,senha,nasc,telefone)
VALUES ('$nome','$email','$senha','$nasc','$telefone')");

header('Location: login.html');

?>