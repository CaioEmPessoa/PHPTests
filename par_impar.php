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
            <h1>Conferir numero par ou ímpar.</h1>
            <p> Para checar se o número é par ou ímpar, vemos se a divisão dele por 2 não tem resto. </p>
        </div>

        <div class="calc">
            <p style="font-size:22px"> Insira apenas um número abaixo: </p>

            <?php

            // quando o botão "enviar" ser "acionado", a função "calcular" é chamada.
            if(array_key_exists('enviar', $_GET)) {
                calcular();
            }

            function calcular() {
                // pega os valores da caixa de input
                $numeros_input = $_GET["numeros"];

                if($numeros_input%2 == 0){
                    echo "É par";
                } else {
                    echo "É impar";
                }
            }

            ?>

            <form id=calculadora method="get">
                
                <!-- ENTRADA -->
                <input type="text" name="numeros"> <br><br>
                <!-- BOTÃO -->
                <input type="submit" name="enviar" value="ENVIAR" />
                    
                </form>
            </body>
            <br>
        </div>

        <div class="pages">
            <p> Conheça nossas outras páginas! </p>
            <a href="index.php"> Página <br> Inicial </a>
            <a href="aritimetica.php"> Média Aritimética </a>
            <a href="entre-numeros.php"> Numero em intervalo </a>
            <a href="char-count.php"> Contar Caracteres </a>
        </div>
    </div>

</body>
</html>