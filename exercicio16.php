<!-- 16. Crie um formulário que permita ao usuário inserir um capital, uma taxa de juros 
 e um período. O script PHP deve calcular os juros simples (capital * taxa * período) 
 e exibir o resultado.  -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
 </head>
 <body>
    <h1>Exercício 16 - Juros Simples</h1>
    <form method="post" action="resposta16.php">
        <label for="valorC">Informe o valor do capital:</label>
        <input type="number" id="valorC" name="valorC">
        <label for="valorJ">Informe a taxa de juros:</label>
        <input type="number" id="valorJ" name="valorJ">
        <label for="valorP">Informe o período:</label>
        <input type="number" id="valorP" name="valorP">
        <button type="submit">Calcular</button>
    </form>
    
 </body>
 </html>