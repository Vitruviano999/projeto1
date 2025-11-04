<?php
include 'conexao.php';

$sql = "SELECT * FROM categorias ORDER BY id DESC";
$stmt = $pdo->query($sql);

echo "<h2>Lista de Categorias</h2>";
echo "<a href='criar.php'>[Nova Categoria]</a><br><br>";
echo "<table border='1' cellpadding='6'>";
echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Data</th><th>Ações</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['descricao']}</td>
            <td>{$row['data_criacao']}</td>
            <td>
                <a href='editar.php?id={$row['id']}'>Editar</a> |
                <a href='deletar.php?id={$row['id']}'>Excluir</a>
            </td>
          </tr>";
}
echo "</table>";
