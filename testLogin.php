<?php

    if(isset($_POST['submit_login']) && !empty($_POST['senha_login'] && !empty($_POST['email_login'])))
    {
        //acessa
        include_once('conexao2.php');
        $email_login = $_POST['email_login'];
        $senha_login = $_POST['senha_login'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email_login' and senha = '$senha_login'";

        $result = $conexao2->query($sql);

        
        if(mysqli_num_rows($result) < 1)
        {
            //caso não encontre o login no BD volte para login.php
            header('Location: login.php');
        }
        else
        {
            //caso encontre o login no BD vá para formulario.php
            header('Location: formulario.php');
        }

    }
    else
    {
        //volta para o login
        header("Location: login.php");
    }

?>