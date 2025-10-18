<?php
// Define uma cor padrão caso o cookie não exista
$cor_fundo = 'white';

// Verifica se o cookie de cor existe e não está vazio
if (isset($_COOKIE['cor_preferida']) && !empty($_COOKIE['cor_preferida'])) {
    $cor_fundo = htmlspecialchars($_COOKIE['cor_preferida']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir Cor de Fundo</title>
    <style>
        body {
            background-color: <?php echo $cor_fundo; ?>;
            transition: background-color 0.5s ease;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-weight: bold;
        }
        .blue { background-color: #3498db; }
        .green { background-color: #2ecc71; }
        .purple { background-color: #9b59b6; }
        .default { background-color: #7f8c8d; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Escolha sua cor de fundo</h1>
        <p>A sua cor preferida será salva para a próxima visita.</p>
        
        <a href="cores.php?cor=blue" class="blue">Azul</a>
        <a href="cores.php?cor=green" class="green">Verde</a>
        <a href="cores.php?cor=purple" class="purple">Roxo</a>
        <a href="cores.php?cor=white" class="default">Padrão</a>
    </div>

</body>
</html>