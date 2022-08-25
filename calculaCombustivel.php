<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calcula Combustível - Atividade 1</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, sans-serif;
    }

    main {
        width: 50%;
        margin: 10px auto;
        background-color: beige;
        border: 1px solid gray;
        border-radius: 10px;
    }

    header {
        color: antiquewhite;
        background-color: grey;
        border-radius: 10px;
        text-align: center;
    }

    section {
        padding: 15px;
    }
    </style>
</head>

<body>
    <main>
        <header>
            <h1>Escolha o melhor valor do combustível para abastecer hoje:</h1>
        </header>
        <section>
            <?php
            echo "Preço do álcool: $" . number_format($preco_alcool = 2.34, 2)
                . ";<br/> Preço da gasolina: $"
                . number_format($preco_gasolina = 7.0, 2)
                . ";</br>";

            $calcula_preco =  number_format($preco_alcool / $preco_gasolina, 3);
            $valor_pago_gasolina = $preco_gasolina * 50;
            $valor_pago_alcool = $preco_alcool * 50;

            if ($calcula_preco <= 0.7) {
                echo "O Combustível ideal no momento é álcool pois o valor está: <br/>"
                    . $calcula_preco . "% abaixo de 0.7;<br/>
                    O valor total a pagar para 50 litros será: $"
                    . number_format($valor_pago_alcool, 2)
                    . ";<br/>";
            } else {
                echo "O Combustível ideal no momento é Gasolina pois o valor está: <br/>"
                    . $calcula_preco . "% acima de 0.7;<br/>
                    O valor total a pagar por 50 litros será: $"
                    . number_format($valor_pago_gasolina, 2)
                    . ";<br/>";
            };
            ?>

        </section>
    </main>
</body>

</html>