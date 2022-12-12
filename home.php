<?php
session_start();
include_once('conexao.php');
// print_r($_SESSION);
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

include_once('conexao.php');
$consulta = "SELECT * FROM dados order by id desc LIMIT 5";
$con = $conexao->query($consulta) or die($mysqli->error);
//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3600">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script>
        window.onload = function() {

            var chartTemp = new CanvasJS.Chart("ChartTemperatura", {
                title: {
                    text: "Temperatura"
                },
                axisY: {
                    title: "Temperature",
                    suffix: " °C"
                },
                data: [{
                    type: "area",
                    markerSize: 0,
                    color: "rgb(34, 87, 122)",
                    yValueFormatString: "#,##0 °C",
                    dataPoints: <?php echo json_encode($Temp, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chartTemp.render();

            var chartLuz = new CanvasJS.Chart("ChartLuz", {
                title: {
                    text: "Luminosidade"
                },
                axisY: {
                    title: "Luminosidade",
                    suffix: " lm"
                },
                data: [{
                    type: "area",
                    markerSize: 0,
                    color: "rgb(245, 203, 92)",
                    yValueFormatString: "#,##0 lm",
                    dataPoints: <?php echo json_encode($luz, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chartLuz.render();

            var chartNco = new CanvasJS.Chart("ChartNco", {
                title: {
                    text: "Nivel Co²"
                },
                axisY: {
                    title: "Medidor de Co²",
                    suffix: " ppm"
                },
                data: [{
                    type: "area",
                    markerSize: 0,
                    color: "rgb(128, 237, 153)",
                    yValueFormatString: "#,##0 ppm",
                    dataPoints: <?php echo json_encode($n_co, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chartNco.render();

        }


        //     window.onload = function() {

        //         var chart = new CanvasJS.Chart("chartContainer", {
        //             theme: "light2",
        //             title: {
        //                 text: "Central de monitoramento"
        //             },
        //             subtitles: [{
        //                 text: "Acompanhe o progresso da sua colheita"
        //             }],
        //             legend: {
        //                 cursor: "pointer",
        //                 itemclick: toggleDataSeries
        //             },
        //             toolTip: {
        //                 shared: true
        //             },
        //             data: [{
        //                     type: "stackedArea",
        //                     name: "Luminosidade",
        //                     showInLegend: true,
        //                     xValueType: "dateTime",
        //                     visible: false,
        //                     yValueFormatString: "#,##0 lm",
        //                     xValueFormatString: "MMM YYYY",
        //                     dataPoints: <?php echo json_encode($luz, JSON_NUMERIC_CHECK); ?>
        //                 },
        //                 {
        //                     type: "stackedArea",
        //                     name: "Temperatura",
        //                     markerSize: 0,
        //                     showInLegend: true,
        //                     yValueFormatString: "#,##0 °C",
        //                     dataPoints: <?php echo json_encode($Temp, JSON_NUMERIC_CHECK); ?>
        //                 },
        //                 {
        //                     type: "stackedArea",
        //                     name: "Nivel Co2",
        //                     showInLegend: true,
        //                     visible: false,
        //                     yValueFormatString: "#,##0 ppm",
        //                     dataPoints: <?php echo json_encode($n_co, JSON_NUMERIC_CHECK); ?>
        //                 }
        //             ]
        //         });

        //         chart.render();

        //         function toggleDataSeries(e) {
        //             if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        //                 e.dataSeries.visible = false;
        //             } else {
        //                 e.dataSeries.visible = true;
        //             }
        //             chart.render();
        //         }

        //     }
        // 
    </script>

    <title>Estufa Smart</title>
</head>

<body class="body_home">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Estufa Smart</a>
            <a href="teste2.php" class="btn btn-danger me-5">Criar alerta</a>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <div class="container">
    <?php include_once('exibir.php'); ?>
    </div>
    <!-- <main>
    <p>Main</p>
  </main> -->
    <header>

        <div class="container text-center">
            <div class="row">
                <div id="ChartTemperatura" style="height: 180; width: 50%;"></div>
                <div id="ChartLuz" style="height: 180px; width: 50%;"></div>
                <div id="ChartNco" style="height: 180px; width: 50%;"></div>
            </div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>


    </header>
    <!-- <nav>
    <p>Nav</p>
  </nav> -->

</body>

</html>