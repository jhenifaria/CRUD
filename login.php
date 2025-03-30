<?php

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Exibir as variáveis recebidas (apenas para teste)
        echo "E-mail: " . $email . "<br>";
        echo "Senha: " . $senha . "<br>";

        $sql = "SELECT * FROM usuarios WHERE usuario = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

    
?>