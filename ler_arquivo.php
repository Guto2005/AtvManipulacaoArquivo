<?php
// Nome do arquivo a ser lido
$filename = 'aula_php.txt';

// Lê o conteúdo do arquivo, se ele existir
if (file_exists($filename)) {
    $conteudo = file_get_contents($filename);
} else {
    $conteudo = "O arquivo '$filename' não existe.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo do Arquivo</title>
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
        pre {
            background: #f8f9fa;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            overflow: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
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
    <h1>Conteúdo do Arquivo</h1>
    <pre><?php echo htmlspecialchars($conteudo); ?></pre>
    <a href="criar_arquivo.php">Adicionar Novo Conteúdo</a>
</div>

</body>
</html>

