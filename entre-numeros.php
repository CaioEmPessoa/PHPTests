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

			<?php
			if(array_key_exists('enviar', $_POST)) {
				check();
			}
			function check(){
				
				$numTotal = $_POST["numTotal"];
				$numMin = $_POST["numMin"];
				$numMax = $_POST["numMax"];
				
				if (
					$numTotal >= $numMin &&
					$numTotal <= $numMax
					) {
						echo "<br>";
						echo "<p>", $numTotal, " <b>está</b> entre ", $numMin, " e ", $numMax, "</p>";
					} else {
						echo "<br>";
						echo "<p>", $numTotal, " <b>Não está </b> entre ", $numMin, " e ", $numMax, "</p>";
					}
				}
			?>


			<form id="calculadora" method="post">
				<p>Numero a ser verificado:</p>
				<input type="number" name="numTotal"> <br><br>
				<p> Numero Mínimo </p>
				<input type="number" name="numMin"> <br><br>
				<p> Numero Máximo </p>
				<input type="number" name="numMax"> <br><br>
				
				<input type="submit" name="enviar" value="enviar"> <br><br>
			</form>
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