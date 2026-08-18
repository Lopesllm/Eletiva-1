<!-- 6. Crie um formulário que permita ao usuário inserir uma temperatura em Fahrenheit.
 O script PHP deve converter essa temperatura para Celsius e exibir o resultado.    -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
 </head>
 <body>
    <h1>Exercicio 6 - Fahrenheit</h1>
    <form method="post" action="resposta6.php">
        <label for="valorF">Informe o valor em ºF:</label>
        <input type="number" id="valorF" name="valorF">
        <button type="submit">Converter</button>
    </form>
 </body>
 </html>