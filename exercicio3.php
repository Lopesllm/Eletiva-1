<!-- 3. Crie um formulário que permita ao usuário inserir dois números. 
 O script PHP deve multiplicar esses números e exibir o resultado.    -->
<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3 - Multiplicação</h1>
    <form method="post" action="resposta3.php">
        <label for="valor1">Informe o primeiro valor:</label>
        <input type="number" id="valor1" name="valor1">
        <label for="valor2">Informe o segundo valor:</label>
        <input type="number" id="valor2" name="valor2">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>