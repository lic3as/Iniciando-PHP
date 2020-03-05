<?php
$title = "Alice";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <form method="POST">

    <label for="a">Dia</label>
    <input type="text" name="dia">
    <br>
    <label for="a">A</label>
    <input type="text" name="a">
    <br>
    <label for="a">B</label>
    <input type="text" name="b">
    <br>
    <label for="a">C</label>
    <input type="text" name="c">
    <br>
    <label>
    
    </label>
    <button type="submit">Enviar</button>
    </form>

    <!--<a href="?artigo=alice&time=saopaulo">HOME</a>!-->

    <?php
    $variable = $_POST['dia'];
    switch($variable){
        case '1':
            $dia = "DOM";
            echo "<br>";
        break;
        case '2':
            $dia = "SEG";
            echo "<br>";
        break;
        case '3':
            $dia = "TER";
            echo "<br>";
        break;
        case '4':
            $dia = "QUA";
            echo "<br>";
        break;
        case '5':
            $dia = "QUI";
            echo "<br>";
        break;
        case '6':
            $dia = "SEX";
            echo "<br>";
        break;
        case '7':
            $dia = "SAB";
            echo "<br>";
        break;

        default:
            $dia = "Informe um dia.";
        break;
    }    

    echo $dia;
    echo "<br>". Date("D/m/Y");
//pega o switch case pega a data, pega o dia em ingles e converte pra portugues, pega o mes e converte pra poortugues isso e a atividade
//maiusculo pega a letra do dia e minusculo o numero do dia
//    $a = $_POST['a'];
//   $b = $_POST['b'];
//    $c = $_POST['c'];
    
//    $delta = pow($b, 2) - 4*$a*$c;

//    echo "Delta: $delta";
    
//    $x1 = (-$b + sqrt($delta))/2*$a;
//    $x2 = (-$b - sqrt($delta))/2*$a;

//    if($delta > 0){
//        echo "<br>x1: $x1 | x2: $x2";
//    } else if($delta < 0){
//        echo "<br>Não possui raiz.";
//    } else {
//        echo "<br> Possui uma raiz.";
//        echo "<br>x: $x1"; 
//    }

//   $v = explode(" ", $texto);
    //echo "Quantidade de palavras: ". count($v);
    

//no get os parametro são passados via url e no post escondido, request pega get e post
//sem aspas é inteiro e com aspas é string, se for 2 inteiro ele soma, se não ele concatena
//    print_r($_POST);

//tem que name no input pra que o php identifique    
//    $nomes = ["um" => "Alice", "dois" => "Licinha", "tres" => "lala"];
//    echo "<pre>";
//    print_r($nomes);
//    echo "</pre>";

//    echo "<br>".$nomes["um"];

//    $texto = "meu nome e barry allen e eu sou o homem mais rapido do mundo";
//    $palavras2 = str_split($texto, 2);
//    $palavras = explode(" ", $texto);

//    print_r($palavras2);

//    $junta = implode($palavras, " ");
//    echo $junta;

//$vencedor = 
//$novaPalavra = str_replace

//implode junta os valores, explode separa
//    echo "<pre>";
//    print_r($palavras);
//    echo "</pre>";

//    echo "<pre>";
//    print_r($palavras2);
//    echo "</pre>";

//php.net é a documentação oficial do php
//print_r é pra vetor e <pre> é pra organizar
//$meta = get_meta_tags("https://www.youtube.com.br");
//echo "<pre>";
//print_r($meta);
//echo "</pre>";
//echo "alicelinda";
//se tiver php no html tem que salvar como .php e não .html pq se não vai aparecer o codigo la dentro sem funcionar
    ?>
</body>
</html>