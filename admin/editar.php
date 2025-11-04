<?php
include 'conexao.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "UPDATE categorias SET nome = ?, descricao = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nome'], $_POST['descricao'], $id]);
    echo "✅ Categoria atualizada com sucesso!";
}

$stmt = $pdo->prepare("SELECT * FROM categorias WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Editar Categoria</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $row['nome'] ?>" required><br><br>
    Descrição: <textarea name="descricao"><?= $row['descricao'] ?></textarea><br><br>
    <button type="submit">Salvar Alterações</button>
</form>