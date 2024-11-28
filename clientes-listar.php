<?php
include "header.php";
include "conexao.php";
?>

<main>
    <h2>Todos os Clientes</h2>
    <a href="clientes-cadastro.php">Adicionar Cliente</a>
    <table border="2">
        <tr>
            <th>NOME</th>
            <th>IDADE</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>AÇÕES</th>
        </tr>

        <?php
        $sql = "select * from clientes";
        $resultado = mysqli_query($conexao, $sql);

        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td> {$linha['nome']}</td>";
            echo "<td> {$linha['idade']}</td>";
            echo "<td> {$linha['cpf']}</td>";
            echo "<td> {$linha['telefone']}</td>";

            echo "<td>";
            echo "<a href='clientes-excluir.php?id={$linha['id']}'>";
            echo "<img src='excluir.png' width='15'>";
            echo "</a>";

            echo "<a href='clientes-editar.php?id={$linha['id']}'>";
            echo "<img src='editar.png' width='15'>";
            echo "</a>";

            echo "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
    </table>
</main>

<?php include "footer.php" ?>