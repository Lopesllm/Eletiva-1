<!-- 13. Crie um formulário que permita ao usuário inserir um valor em quilômetros. O script 
 PHP deve converter esse valor para milhas (1 quilômetro = 0.621371 milhas) e exibir o resultado.    -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
 </head>
 <body>
    <h1>Exercício 13 - Quilômetros em Milhas</h1>
    <form method="post" action="resposta13.php">
        <label for="valorKm">Informe o valor em quilômetros:</label>
        <input type="number" id="valorKm" name="valorKm">
        <button type="submit">Converter:</button>
    </form>
    
 </body>
 </html>