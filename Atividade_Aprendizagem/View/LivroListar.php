<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href="/PB_PHP/Atividade_Aprendizagem/livros/telaCadastro">Voltar a tela telaCadastro</a>
    <h2>Usuários</h2>
    <table border= "1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $id => $u): ?>
            <tr>
                <td><?= $u['titulo']?></td>
                <td><?= $u['autor']?></td>
                <td>
    <a href="/PB_PHP/Atividade_Aprendizagem/livros/telaEditar?id=<?= $id ?>">Editar</a>
        </a>
     <a href="/PB_PHP/Atividade_Aprendizagem/livros/excluir?id=<?= $id ?>">Excluir</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>