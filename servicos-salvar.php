<?php
    // requisitar os dados do formuelário
    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];

    // montar um sql de insert
    $sql = "insert into servicos(servico, descricao, categoria, preco) values('$servico', '$descricao', '$categoria', '$preco')";
    echo $sql;

    // incluir o arquivo de conexão 
    include "conexao.php";

    // executar o sql insert no BD
    $resultado = mysqli_query($conexao, $sql);

    // fechar a conexão
    mysqli_close($conexao);

    // redirecionar para a página listar
    header("Location: servicos-listar.php");
?>