<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tela editar</title>
</head>
<body>
    <h2>Editar usuarios 🥷🍀</h2>
    <a href="/PB_PHP/MVCMysql/usuario/listar">Ir para tela Listar</a>

    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>"disable>
        <input type="text" name="nome" value="<?=htmlspecialchars($usuario['nome'])?>" require>
        <input type="email" name="email" value="<?=htmlspecialchars($usuario['email'])?>" require>
        <button type="submit">Editar</button>
        </form>
    </body>
</html>