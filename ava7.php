<?php
    $numHabitantes = [76045022, 46420834, 25364185, 13773428, 13032095];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Avaliação 7 | Gráfico</title>
    </head>

    <body>

        <div id="chart"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']}); //carrega a última versão; //corechart disponibliza vários tipos de gráficos;
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            const container = document.querySelector('#chart');
            const data = new google.visualization.arrayToDataTable([
                [ 'Região', 'Número de habitantes' ], 
                [ 'Sudeste', <?= $numHabitantes[0]?> ],
                [ 'Nordeste', <?= $numHabitantes[1]?> ],
                [ 'Sul', <?= $numHabitantes[2]?> ],
                [ 'Norte', <?= $numHabitantes[3]?> ],
                [ 'Centro-Oeste', <?= $numHabitantes[4]?> ]
            ]);

            const options = {
                title: "Vacinados com a primeira dose contra o covid-19", //dados de 12 de março de 2022
                height: 400,
                width: 720
            }

            const chart = new google.visualization.ColumnChart(container);
            chart.draw(data, options);
        }

        </script>

    </body>
</html>