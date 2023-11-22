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
            <h1> Calculo de Bhaskara. </h1>
            <p> Resolva uma equação de segundo grau utilizando a formula de Bhaskara. </p>
        </div>

        <div class="calc">
            <p style="font-size:22px"> Insira os três números abaixo: </p>

            <form id=calculadora method="post">
                
                <!-- ENTRADA -->
                A: <input type="number" required="true" name="A"> <br><br>
                B: <input type="number" required="true" name="B"> <br><br>
                C: <input type="number" required="true" name="C"> <br><br>
                <!-- BOTÃO -->
                <input type="submit" name="enviar" value="ENVIAR" />
                    
            </form>

            <?php

            // quando o botão "enviar" ser "acionado", a função "calcular" é chamada.
            if(array_key_exists('enviar', $_POST)) {
                calcular();
            }

            function calcular() {
                    $a = $_POST["A"];
                    $b = $_POST["B"];
                    $c = $_POST["C"];
                    
                    $delta = pow($b, 2) -4*$a*$c;
                    if ($delta <= 0){
                        $resultado = "Delta é negativo, não é possivel resolver essa equação.";
                    } else {
                        $resultadoPos = -$b + sqrt($delta);
                        $resultadoPos = $resultadoPos/(2*$a);
                        
                        $resultadoNeg = -$b - sqrt($delta);
                        $resultadoNeg = $resultadoNeg/(2*$a);
                        
                        $resultado = "X' = <strong>$resultadoPos</strong> || X'' = <strong>$resultadoNeg</strong>";
                    }
                    
                    echo "<br>$resultado";
                }

            ?>
            </body>
            <br>
        </div>

        <div class="pages">
            <p> Conheça nossas outras páginas! </p>
            <a href="index.php"> Página <br> Inicial </a>
            <a href="aritimetica.php"> Média Aritimética </a>
            <a href="entre-numeros.php"> Numero em intervalo </a>
            <a href="char-count.php"> Contar Caracteres </a>
            <a href="par_impar.php"> Numero Par ou Impar </a>
        </div>
    </div>

</body>
</html>