<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - [Seu Nome]</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['form_data'])): ?>
        <div class="container">
            <header>
                <div class="profile">
                    <img src="images/sua-foto.jpg" alt="Sua Foto" class="profile-pic">
                    <div class="contact-info">
                        <h1><?php echo htmlspecialchars($_POST['nome']); ?></h1>
                        <p>Email: <a href="mailto:<?php echo htmlspecialchars($_POST['email']); ?>"><?php echo htmlspecialchars($_POST['email']); ?></a></p>
                        <p>Telefone: <?php echo htmlspecialchars($_POST['telefone']); ?></p>
                        <p>Endereço: <?php echo htmlspecialchars($_POST['endereco']); ?></p>
                    </div>
                </div>
            </header>
            <section>
                <h2>Objetivo</h2>
                <p><?php echo htmlspecialchars($_POST['objetivo']); ?></p>
            </section>
            <section>
                <h2>Formação Acadêmica</h2>
                <ul>
                    <li><?php echo htmlspecialchars($_POST['formacao']); ?></li>
                </ul>
            </section>
            <section>
                <h2>Experiência Profissional</h2>
                <ul>
                    <li>
                        <strong><?php echo htmlspecialchars($_POST['cargo']); ?></strong> - <?php echo htmlspecialchars($_POST['empresa']); ?> (<?php echo htmlspecialchars($_POST['inicio']); ?> - <?php echo htmlspecialchars($_POST['termino']); ?>)
                        <p><?php echo htmlspecialchars($_POST['descricao']); ?></p>
                    </li>
                </ul>
            </section>
            <section>
                <h2>Habilidades</h2>
                <ul class="skills">
                    <li><?php echo htmlspecialchars($_POST['habilidades']); ?></li>
                </ul>
            </section>
            <section>
                <h2>Referências</h2>
                <ul>
                    <li><?php echo htmlspecialchars($_POST['referencias']); ?></li>
                </ul>
            </section>
            <footer>
                <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($_POST['nome']); ?>. Todos os direitos reservados.</p>
            </footer>
        </div>
    <?php else: ?>
        <div class="form-container">
            <h2>Preencha o formulário para gerar o currículo</h2>
            <form id="curriculoForm" action="index.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>

                <label for="objetivo">Objetivo:</label>
                <textarea id="objetivo" name="objetivo" required></textarea>

                <label for="formacao">Formação Acadêmica:</label>
                <textarea id="formacao" name="formacao" required></textarea>

                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>

                <label for="empresa">Empresa:</label>
                <input type="text" id="empresa" name="empresa" required>

                <label for="inicio">Ano de Início:</label>
                <input type="text" id="inicio" name="inicio" required>

                <label for="termino">Ano de Término:</label>
                <input type="text" id="termino" name="termino" required>

                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" required></textarea>

                <label for="habilidades">Habilidades:</label>
                <textarea id="habilidades" name="habilidades" required></textarea>

                <label for="referencias">Referências:</label>
                <textarea id="referencias" name="referencias" required></textarea>

                <button type="submit">Gerar Currículo</button>
            </form>
        </div>
    <?php endif; ?>
    <script src="js/script.js"></script>
</body>
</html>
