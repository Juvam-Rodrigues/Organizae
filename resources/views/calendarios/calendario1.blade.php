<?php

function MostreSemanas()
{
    // $semanas = "DSTQQSS";
    $semanas = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    for ($i = 0; $i < 7; $i++) {
        echo '<td>' . $semanas[$i] . '</td>';
    }
}

function GetNumeroDias($mes)
{
    $numero_dias = [
        '01' => 31,
        '02' => 28,
        '03' => 31,
        '04' => 30,
        '05' => 31,
        '06' => 30,
        '07' => 31,
        '08' => 31,
        '09' => 30,
        '10' => 31,
        '11' => 30,
        '12' => 31,
    ];

    if (date('Y') % 4 == 0 and date('Y') % 100 != 0 or date('Y') % 400 == 0) {
        $numero_dias['02'] = 29; // altera o numero de dias de fevereiro se o ano for bissexto
    }

    return $numero_dias[$mes];
}

function MostreCalendario($mes)
{
    $numero_dias = GetNumeroDias($mes); // retorna o n�mero de dias que tem o mes desejado
    $diacorrente = 0;

    $diasemana = jddayofweek(cal_to_jd(CAL_GREGORIAN, $mes, '01', date('Y')), 0); // fun��o que descobre o dia da semana

    echo "<table border = 0 cellspacing = '0'>";

    echo "<tr class = 'linha_semanas'>";
    MostreSemanas(); // função que mostra as semanas aqui
    echo '</tr>';
    for ($linha = 0; $linha < 6; $linha++) {
        echo '<tr>';

        for ($coluna = 0; $coluna < 7; $coluna++) {
            echo '<td width = 30 height = 30 ';

            if ($diacorrente == date('d') - 1 && date('m') == $mes) {
                echo " id = 'dia_atual' ";
            } else {
                if ($diacorrente + 1 <= $numero_dias) {
                    if ($coluna < $diasemana && $linha == 0) {
                        echo " id = 'dia_branco' ";
                    } else {
                        echo " id = 'dia_comum' ";
                    }
                } else {
                    echo ' id = dia_inexistente';
                }
            }
            echo ' >';

            /* TRECHO IMPORTANTE: APARTIR DESTE TRECHO � MOSTRADO UM DIA DO CALEND�RIO (MUITA ATEN��O NA HORA DA MANUTEN��O) */

            if ($diacorrente + 1 <= $numero_dias) {
                if ($coluna < $diasemana && $linha == 0) {
                    echo ' ';
                } else {
                    // echo "<input type = 'button' id = 'dia_comum' name = 'dia".($diacorrente+1)."'  value = '".++$diacorrente."' onclick = \"acao(this.value)\">";
                    echo '<a href = ' . $_SERVER['PHP_SELF'] . '?dia=' . ($diacorrente + 1) . '>' . ++$diacorrente . '</a>';
                }
            } else {
                break;
            }

            /* FIM DO TRECHO MUITO IMPORTANTE */

            echo '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

function MostreCalendarioCompleto()
{
    echo '<table>';
    $cont = 1;
    for ($j = 0; $j < 4; $j++) {
        echo '<tr>';
        for ($i = 0; $i < 3; $i++) {
            echo '<td>';
            MostreCalendario($cont < 10 ? '0' . $cont : $cont);

            $cont++;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
function MostrarAnoAtual()
{
    echo date('Y');
}
function MostrarMesAtual()
{
    echo date('m');
}
function MostrarNomeMes($mes){
    $meses = [
        '01' => 'janeiro',
        '02' => 'fevereiro',
        '03' => 'março',
        '04' => 'abril',
        '05' => 'maio',
        '06' => 'junho',
        '07' => 'julho',
        '08' => 'agosto',
        '09' => 'setembro',
        '10' => 'outubro',
        '11' => 'novembro',
        '12' => 'desembro',
    ];
    echo $meses[$mes];
}
function SomarAno(){
    
}
?>
<html>

<head>

    <script src="funcoes.js"></script>
    <link href="{{asset('css/style-calendario.css')}}" rel="stylesheet" type=text/css>
    {{-- <link href = "css/style001.css" rel=stylesheet type=text/css>
  <link href="css/style.css" rel="stylesheet" type="text/css" /> --}}
    <?php  /* include("info.php"); */ ?>

</head>

<body>

    <?php
    echo "<h1 id='nome-ano'>";
    echo MostrarAnoAtual();
    echo '</h1>';

    echo "<h2 id='nome-mes'>";
    echo MostrarNomeMes(date('m'));
    echo '</h2>';
    
    MostreCalendario(date('m'));
    // MostreCalendarioCompleto();
    ?>

</body>

</html>