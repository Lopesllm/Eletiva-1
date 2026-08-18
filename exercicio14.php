<!-- 14. Crie um formulário que permita ao usuário inserir seu peso (em kg) e altura 
 (em metros). O script PHP deve calcular o IMC (peso / altura²) e exibir o resultado.    -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
 </head>
 <body>
    <h1>Exercício 14 - Calcular o IMC</h1>
    <form method="post" action="resposta14.php">
        <label for="valorP">Informe o seu peso (em Kg):</label>
        <input type="number" id="valorP" name="valorP">
        <label for="valorA">Informe a sua altura (em M):</label>
        <input type="number" id="valorA" name="valorA">
        <button type="submit">Calcular IMC</button>
    </form>
    
 </body>
 </html>