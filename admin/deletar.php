<?php
include 'conexao.php';
$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM categorias WHERE id = ?");
$stmt->execute([$id]);

echo "🗑️ Categoria excluída com sucesso!";
echo "<br><a href='listar.php'>Voltar</a>";
