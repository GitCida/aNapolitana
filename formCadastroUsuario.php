<?php
include 'conexao.php';
session_start();
$nomeUsuario = isset($_SESSION['dadosPreenchidos']['nomeUsuario']) ? $_SESSION['dadosPreenchidos']['nomeUsuario'] : '';
$email = isset($_SESSION['dadosPreenchidos']['email']) ? $_SESSION['dadosPreenchidos']['email'] : '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário A Napolitana</title>
    <link rel="stylesheet" href="assets/styleCadastroUsuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
</head>
<body>
    <div id="caixaCadastro">
        <div id="bgComLogo">
            <img src="assets/backgroundLogin.png" alt="logo da plataforma">
        </div>
        <div id="formCadastro">
            <h1 id="tituloCadastro">CADASTRO</h1>
            <form action="cadastroUsuario.php?act=save" method="post">
                <input type="hidden" name="ID">
                <label for="nomeUsuario" class="estilizacaoLabel">Nome de usuário:</label>
                <div class="Input">
                    <input type="text" name="nomeUsuario" id="nomeUsuario" class="estilizacaoInput" placeholder="Ex.: Maria_123" value="<?php echo htmlspecialchars($nomeUsuario); ?>" required>    
                </div>
                <label for="email" class="estilizacaoLabel">Email:</label>
                <div class="Input">
                    <input type="email" name="email" id="email" class="estilizacaoInput" placeholder="Ex.: Maria1234@gmail.com" autocomplete=off value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <label for="senha" class="estilizacaoLabel">Senha:</label>
                <div class="Input">
                    <input type="password" name="senha" id="senha" class="estilizacaoInput" placeholder="Ex.: Maria4321" required>    
                </div>
                <div id="divBtnCadastro">
                <input type="submit" value="CADASTRAR" id="btnCadastro">    
                </div>
            </form>
            <?php
                if (isset($_SESSION['mensagemErro'])) {
                    echo "<div id='mensagemErro'>" . $_SESSION['mensagemErro'] . "</div>";
                    unset($_SESSION['mensagemErro']);
                }
            ?>
            <p>Já tem uma conta? <a href="http://localhost/aNapolitana/index.php" id="linkLogin">Fazer login</a></p>
        </div>
    </div>
</body>
</html>