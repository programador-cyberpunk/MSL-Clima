<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>MSL - Cadastrar Usuário</title>
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
        <h1>Cadastro de Usuários</h1>
        <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
    </section>
    <section class="container-form">
        <form method="post" action="processar-cadastro.php">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>
            
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>

            <label for="confirmarsenha">Confirmar senha</label>
            <input type="password" id="confirmarsenha" name="confirmarsenha" placeholder="Digite uma senha" required>
            <?php
                if (isset($_GET["erro"])){ ?>
                    <label for="confirmarsenha">Senha e confirmar senha não são iguais</label>
                <?php }
            ?>
            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar usuario"/>
        </form>
        

    </section>
</main>
</body>
</html>
