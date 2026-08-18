<!-- 15. Crie um formulário que permita ao usuário inserir um preço e um percentual de 
 desconto. O script PHP deve calcular o preço com desconto e exibir o resultado.    -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
 </head>
 <body>
    <h1>Exercício 15 - Preço e Desconto</h1>
    <form method="post" action="resposta15.php">
        <label for="valorP">Informe o preço:</label>
        <input type="number" id="valorP" name="valorP">
        <label for="valorD">Informe o percentual do desconto:</label>
        <input type="number" id="valorD" name="valorD">
        <button type="submit">Calcular</button>
    </form>
    
 </body>
 </html>