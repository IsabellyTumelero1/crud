<?php
    include "header.php";
    include "conexao.php";
?>

<main>
    <h2>Todos os Produtos</h2>
    <a href="produtos-cadastro.php">Adicionar novo produto</a>
    <table border="2">
        <tr>
            <th>PRODUTO</th>
            <th>MARCA</th>
            <th>CARACTERÍSTICAS</th>
            <th>PREÇO</th>
            <th>AÇÕES</th>
        </tr>

        <?php
            $sql = "select * from produtos";
            $resultado = mysqli_query($conexao, $sql);

            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td> {$linha['produto']} </td>";
                echo "<td> {$linha['marca']} </td>";
                echo "<td> {$linha['caracteristica']} </td>";
                echo "<td> {$linha['preco']} </td>";

                echo "<td>";
                echo "<a href='produtos-excluir.php?id={$linha['id']}'>";
                echo "<img src='excluir.png' width='15'>";


                echo "</td>";
            }
        ?>
    </table>
</main>