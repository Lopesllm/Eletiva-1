<!-- 7. Crie um formulário que permita ao usuário inserir a largura e a altura de 
 um retângulo. O script PHP deve calcular a área do retângulo e exibir o resultado.    -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
 </head>
 <body>
    <h1>Exercício 8 - Área do Retângulo</h1>
    <form method="post" action="resposta7.php">
        <label for="valorL">Informe o valor da largura do retângulo:</label>
        <input type="number" id="valorL" name="valorL">
        <label for="valorA">Informe o valor da altura do retângulo:</label>
        <input type="number" id="valorA" name="valorA">
        <button type="submit">Calcular Área</button>
    </form>
 </body>
 </html>