<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>    
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
                    serão gastos com combustível durante uma viagem, com base no
                consumo do seu veículo, e com a distância determinada por você!</p>
                <p>Os combustíveis disponíveis para este cálculo são:</p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Díesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>
         
        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calcular.php" method="POST">
				    <label for ="precoEtanol">Digite o preço do Etanol </label></br>
					<input class="campoTexto" name="precoEtanol" required/>
                    
					<label for="distancia"></br>Distância em Quilômetros a ser percorrida</label></br>
                    <input type="number" class="campoTexto"  name="distancia" required/>
 
                    <label for="autonomia"></br>Consumo de combustível do veículo (Km/l)</label></br>
                    <input type="number" class="campoTexto" name="autonomia" required/>
                    </br>
                    <button class="botao" type="submit">Calcular</button>
                </form>               
            </div>
        </div>        
                 
    </main>   
</body>
</html>