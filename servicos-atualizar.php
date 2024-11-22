<?php
    // requisitar os dados
    $id = $_GET['id'];
    $servico = $_POST['servico'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];

    //montarum sql de updade
    $sql = "update servicos set servico = '$servico', descricao = '$descricao', categoria = '$categoria', preco = '$preco' where id = $id";

    // incluir o arquivo de conexão
    include "conexao.php";

    //executar o sql update no BD
    $resultado = mysqli_query($conexao, $sql);

    // fechar a conexão 
    mysqli_close($conexao);

    // redirecionar para a página listar
    header("Location: servicos-listar.php");
?>