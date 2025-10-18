<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Preferências de Tema</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label, input, button {
            display: block;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Escolha seu Tema Favorito</h2>
    <form action="preferencia2.php" method="post">
        <label>
            <input type="radio" name="theme" value="light" checked> Tema Claro
        </label>
        <label>
            <input type="radio" name="theme" value="dark"> Tema Escuro
        </label>
        <label>
            <input type="radio" name="theme" value="blue"> Tema Azul
        </label>
        <button type="submit">Salvar Preferências</button>
    </form>
    <p><a href="index.php">Voltar para a página principal</a></p>
</body>
</html>