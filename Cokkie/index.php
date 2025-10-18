<?php
$theme = 'light';

if (isset($_COOKIE['user_theme'])) {
    $theme = $_COOKIE['user_theme'];
}

$theme_classes = [
    'light' => 'light-theme',
    'dark' => 'dark-theme',
    'blue' => 'blue-theme'
];

$body_class = $theme_classes[$theme] ?? $theme_classes['light'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Personalizada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            transition: background-color 0.5s, color 0.5s;
        }

        .light-theme {
            background-color: #ffffff;
            color: #333333;
        }

        .dark-theme {
            background-color: #121212;
            color: #ffffff;
        }

        .blue-theme {
            background-color: #2196f3;
            color: #ffffff;
        }
        
        h1 {
            border-bottom: 2px solid;
            padding-bottom: 10px;
        }

        a {
            color: #007bff;
        }
        .dark-theme a {
            color: #ffeb3b;
        }
        .blue-theme a {
            color: #f9f9f9;
        }
    </style>
</head>
<body class="<?php echo htmlspecialchars($body_class); ?>">
    <h1>Bem-vindo à nossa página!</h1>
    <p>Esta página está personalizada com base nas suas preferências de tema.</p>
    <p>Você pode alterar o tema a qualquer momento na <a href="preferencia.php">página de preferências</a>.</p>
    <p>O tema atual é: **<?php echo htmlspecialchars($theme); ?>**</p>
</body>
</html>