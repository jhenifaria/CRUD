<?php
        session_start();

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Exibir as variáveis recebidas (apenas para teste)
        echo "E-mail: " . $email . "<br>";
        echo "Senha: " . $senha . "<br>";

        $sql = "SELECT * FROM usuarios WHERE usuario = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) 
        {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.html');
        } 
        else 
        {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location: sistema.php');
        }
        

?>