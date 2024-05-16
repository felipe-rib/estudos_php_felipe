<?php
    $num1 = '';
    $num2 = '';      //Define os valores padrões das variáveis, porém depois elas irão ser alteradas
    $resultado = 0;
    $calcular = 'somar';


    if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'] )) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular']; //É utilizado para conferir se os dados estão sendo recebidos pelo
                                       //servidor pelo $_GET, a função isset confere se o valor é null ou não, e se não for null, ele dá um echo

        switch ($calcular) {
            case 'somar':
                $resultado = $num1 + $num2;
                break;

             case 'subtrair':
                $resultado = $num1 - $num2;
                break;

            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;

            case 'dividir':
                $resultado = $num1 / $num2; //
                break;
        }
    };

?>
 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="titulo">
    <h1 class="titulo_calculadora">Super-mega Calculadora do Felipe!</h1>
    </div>
    <br />

    <div class="opcoes">
    <form>
<div class="numeros">
        <div class="numero1">
        <p>Primeiro número:</p>
        <br />
        <input class="selecao_num1" type="number" name="num1" required value=<?= $num1 ?> />
        </div>

        <br />

        <br />
        <br />

        <div class="numero2">
        <p>Segundo número:</p>
        <br />
        <input class="selecao_num2" type="number" name="num2" required value=<?= $num2 ?> />
        </div>
</div>
    <div class="operacao_e_calcular">
        <p class="p_operacao"> Escolha a operação: </p>
        <select class="selecionar_operacao" name="calcular">
            <option value="somar" <?= ($calcular=='somar')?'Selected':''; ?> >Somar</option>
            <option value="subtrair" <?= ($calcular=='subtrair')?'Selected':''; ?> >Subtrair</option>
            <option value="multiplicar" <?= ($calcular=='multiplicar')?'Selected':''; ?> >Multiplicar</option>
            <option value="dividir" <?= ($calcular=='dividir')?'Selected':''; ?> >Dividir</option>
        </select>
        <br />
        <br />
        <input class="botao_calcular" type="submit" value="Calcular"/>
    </form>
    </div>
    </div>

    <div class="resultado">
        <br />
        <p class="p_resultado"> O seu resultado é:</p>
        <br />
        <h2 class="num_resultado"> <?= $resultado ?> </h2>
    </div>
</body>
</html>