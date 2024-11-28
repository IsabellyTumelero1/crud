<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo produto</h2>
    <form method="post" action="produtos-salvar.php">
        <label>Produto: <input name="produto"></label>
        <label>Marca: <input name="marca"></label>
        <label>Características: <input name="caracteristica"></label>
        <label>Preço: <input name="preco"></label>
    </form>

    <button type="submit">Salvar</button>
</main>

<?php include "footer.php"; ?>