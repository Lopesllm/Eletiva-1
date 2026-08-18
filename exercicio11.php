<!-- 11. Crie um formulário que permita ao usuário inserir uma base e um expoente. 
 O script PHP deve calcular a base elevada ao expoente e exibir o resultado.    -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
 </head>
 <body>
    <h1>Exercício 11 - Base e Expoente</h1>
    <form method="post" action="resposta11.php">
        <label for="valorB">Informe o valor da base:</label>
        <input type="number" id="valorB" name="valorB">
        <label for="valorE">Informe o valor do expoente:</label>
        <input type="number" id="valorE" name="valorE">
        <button type="submit">Calcular</button>
    </form>
    
 </body>
 </html>