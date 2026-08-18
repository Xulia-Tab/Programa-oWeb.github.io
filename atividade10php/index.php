<?php

require_once __DIR__ . "/funcao.php";

$numeros = gerarNumerosDecrescentes();
$pessoas = obterPessoas();

$pessoasPorIdade = ordenarPorIdade($pessoas);
$pessoasPorNome = ordenarPorNome($pessoas);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercícios em PHP</title>
        <link rel="stylesheet" href="../css/main.css">

</head>

<body class="pagina-php">

    <header id="cabecalho-principal">
        <h1>Exercícios em PHP</h1>
    </header>

    <nav class="navbar" aria-label="Navegação principal">
        <a href="../atividades.html">Voltar para Atividades</a>
    </nav>

    <main class="php-container">

    <!-- Exercício 1 -->
    <section>
        <h2>Exercício 1</h2>

        <p>Números inteiros de 100 até 50 em ordem decrescente:</p>

        <div class="numeros">
            <?php foreach ($numeros as $indice => $numero): ?>

                <?= $numero ?>

                <?php if ($indice < count($numeros) - 1): ?>
                    -
                <?php endif; ?>

            <?php endforeach; ?>
        </div>
    </section>


    <!-- Exercício 4 -->
    <section>
        <h2>Exercício 4</h2>

        <p>Nomes e idades das pessoas:</p>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pessoas as $nome => $idade): ?>

                    <tr>
                        <td><?= htmlspecialchars($nome) ?></td>
                        <td><?= $idade ?> anos</td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </section>


    <!-- Exercício 5: ordenação pela idade -->
    <section>
        <h2>Exercício 5 — Ordem crescente pela idade</h2>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pessoasPorIdade as $nome => $idade): ?>

                    <tr>
                        <td><?= htmlspecialchars($nome) ?></td>
                        <td><?= $idade ?> anos</td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </section>


    <!-- Exercício 5: ordenação pelo nome -->
    <section>
        <h2>Exercício 5 — Ordem crescente pelo nome</h2>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pessoasPorNome as $nome => $idade): ?>

                    <tr>
                        <td><?= htmlspecialchars($nome) ?></td>
                        <td><?= $idade ?> anos</td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    </main>

    <footer id="rodape">
        <p>&copy; 2026 - Atividade de PHP</p>
    </footer>
</body>

</html>