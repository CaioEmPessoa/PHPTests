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
            <h1>Calculadora de Média Aritimética.</h1>
            <p> A fórmula que utilizamos para calcular uma média aritimética é a seguinte: <br>
                N1 + N2 + N2 + ... <br> __________ <br> quantidadeN </p>
        </div>

        <div class="calc">
            <p style="font-size:22px"> Insira os *numeros* abaixo, separado por vírgula: </p>

            <?php

            // quando o botão "enviar" ser "acionado", a função "calcular" é chamada.
            if(array_key_exists('enviar', $_GET)) {
                calcular();
            }

            function calcular() {
                $add = 0;
                // pega os valores da caixa de input
                $numeros_input = $_GET["numeros"];
                
                // cria uma lista com cada numero separado por vírgula
                $numeros_lista = explode("," , $numeros_input);

                // faz um loop em cada elemento da lista criada
                foreach ($numeros_lista as &$numero) {
                    // adiciona cada numero da lista com o resultado da soma anterior
                    $add = $numero + $add;
                }

                // o resultado é a soma total dos elementos da lista dividido pela quantidade de itens que havia nela
                $resultado = $add / count($numeros_lista);
                echo "<p> resultado: ", $resultado, "</p>";
            }

            ?>

            <form id=calculadora method="get">
                <input type="text" name="numeros"> <br><br>
                <input type="submit" name="enviar" value="ENVIAR" />
                    
                </form>
            </body>
            <br>
        </div>

        <div class="pages">
            <p> Conheça nossas outras páginas! </p>
            <a href="index.php"> Página <br> Inicial </a>
            <a href="par_impar.php"> Numero Par ou Impar </a>
            <a href="entre-numeros.php"> Numero em intervalo </a>
            <a href="char-count.php"> Contar Caracteres </a>
        </div>
    </div>

</body>
</html>