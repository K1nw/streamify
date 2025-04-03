<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Streamify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <header>
        <div class="logo">
            <h1>Streamify</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registrar</a></li>
            </ul>
        </nav>
    </header>
    <form action="login_action.php" method="POST">

    <div class="container">
        <section class="login-form">
            <h2>Entrar na sua conta</h2>
            <form action="login_action.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>

            <p>Não tem uma conta? <a href="register.php">Crie uma agora!</a></p>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Streamify. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
