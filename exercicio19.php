<!-- 19. 19.	Crie um formulário que permita ao usuário inserir uma distância e um tempo. 
 O script PHP deve calcular a velocidade média (distância / tempo) e exibir o resultado.  -->
 <!DOCTYPE html>
 <html lang="PTBR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
 </head>
 <body>
    <h1>Exercício 19 - Velocidade Média</h1>
    <form method="post" action="resposta19.php">
        <label for="valorD">Informe a distância em quilômetros:</label>
        <input type="number" id="valorD" name="valorD">
        <label for="valorT">Informe o tempo em horas:</label>
        <input type="number" id="valorT" name="valorT">
        <button type="submit">Calcular</button>
    </form>
    
 </body>
 </html>