<?php
$host = 'localhost';
$user = 'root';
$senha = '';
$bd_nome = 'crud';

$conect = mysqli_connect($host, $user, $senha, $bd_nome);

if ($conect->error) {
    die("Falha ao conectar");
}
