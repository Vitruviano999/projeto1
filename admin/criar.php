<?php include 'conexao.php'; ?>

<h2>Criar Nova Categoria</h2>
<form method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Descrição: <textarea name="descricao"></textarea><br><br>
    <button type="submit" name="enviar">Salvar</button>
</form>

<?php
if (isset($_POST['enviar'])) {
    $sql = "INSERT INTO categorias (nome, descricao) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nome'], $_POST['descricao']]);
    echo "✅ Categoria criada com sucesso!";
}
?>