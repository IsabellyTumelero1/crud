<?php
    $usuario = "root";
    $senha = "";
    $servidor = "localhost"; //ou 127.0.0.1 (mysql admin)
    $porta = "3306";
    $nome_banco = "bd_cabelereiro";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco, $porta);
?>