<?php
// Iniciar a sessão no início do arquivo
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Seu Carrinho - Aura Prateada</title>
    <link rel="stylesheet" href="Visao/CSS/estilo.css">
</head>
<body>
    <div class="carrinho">
        <h2>Seu Carrinho</h2>

        <!-- Exibir o nome do usuário logado -->
        <?php if (isset($_SESSION['usuario_logado'])): ?>
            <p>Bem-vindo, <strong><?php echo htmlspecialchars($_SESSION['usuario_logado']['nome']); ?></strong>!</p>
        <?php else: ?>
            <p>Bem-vindo, visitante!</p>
        <?php endif; ?>

        <div id="itens-carrinho">
            <p>O carrinho está vazio.</p>
        </div>
        <div id="promocao" class="promocao"></div>
        <p>Total: R$ <span id="total">0.00</span></p>

        
        <button class="btn adicionar-endereco" onclick="adicionarEndereco()">Adicionar Endereço</button>
    </div>

    <script src="Modelo/carrinho.js"></script>
    <script>
        function adicionarEndereco() {
            window.location.href = "endereco.php";
        }
    </script>
</body>
</html>
