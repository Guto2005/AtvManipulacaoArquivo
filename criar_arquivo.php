<?php
// Nome do arquivo onde o conteúdo será armazenado
$filename = 'aula_php.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados do formulário
    $titulo = htmlspecialchars($_POST['titulo']);
    $corpo = htmlspecialchars($_POST['corpo']);
    
    // Formata o conteúdo a ser adicionado
    $conteudo = "Título: $titulo\nCorpo: $corpo\n\n";
    
    // Abre o arquivo para anexar
    $file = fopen($filename, 'a');
    
    if ($file) {
        fwrite($file, $conteudo);
        fclose($file);
        echo "<p>O conteúdo foi anexado ao arquivo '$filename'.</p>";
    } else {
        echo "<p>Não foi possível abrir o arquivo '$filename'.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Conteúdo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            padding: 10px;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Adicionar Conteúdo ao Arquivo</h1>
    <form action="" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        
        <label for="corpo">Corpo:</label>
        <textarea id="corpo" name="corpo" rows="6" required></textarea>
        
        <input type="submit" value="Adicionar">
    </form>
    <a href="ler_arquivo.php">Ver o arquivo registrado</a>
</div>

</body>
</html>

