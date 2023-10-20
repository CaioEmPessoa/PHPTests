<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Numeros Site</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="welcome">
            <h1>Numero entre intervalo.</h1>
            <p> Para checar se um número existe entre um menor e outro maior. </p>
        </div>
		<div class="calc">
			<h1> Insira 3 valores: </h1>
			<form id="calculadora" method="post">
				<p>Insira a frase:</p>
				<input type="text" name="stringCount"> <br><br>
				
				<input type="submit" name="enviar" value="enviar"> <br>
			</form>
			
			<?php
				function check(){

				$stringCount = $_POST["stringCount"];
				echo "<br> <p>Sua frase possui ", strlen($stringCount), " caracteres.</p>";

				}

				if(array_key_exists('enviar', $_POST)) {
					check();
				}

			?>
        </div>

        <div class="pages">
            <p> Conheça nossas outras páginas! </p>
            <a href="index.php"> Página <br> Inicial </a>
            <a href="aritimetica.php"> Média Aritimética </a>
            <a href="par_impar.php"> Numero Par ou Impar </a>
            <a href="char-count.php"> Contar Caracteres </a>
        </div>
    </div>

</body>
</html>