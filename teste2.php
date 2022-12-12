<?php

session_start();
error_reporting(0);
include_once('conexao.php');
// print_r($_SESSION);
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

include_once('conexao.php');
$consulta = "SELECT * FROM dados order by id desc";
$con = $conexao->query($consulta) or die($mysqli->error);

$consulta3 = "SELECT * FROM dados order by id desc";
$con3 = $conexao->query($consulta3) or die($mysqli->error);


$consulta2 = "SELECT * FROM pesq  order by id desc";
$con2 = $conexao->query($consulta2) or die($mysqli->error);

$consulta4 = "SELECT * FROM pesq  order by id desc";
$con4 = $conexao->query($consulta4) or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="60">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Estufa Smart</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Estufa Smart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex">
            <a href="home.php" class="btn btn-danger me-5">Home</a>
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
        </nav>
    </main>

    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col align-self-center">
                    <form method="post" action="teste2.php">
                        <div class="form-floating mb-3">
                            <input type="calendario" class="form-control-sm" id="temp" name="temp" value=""
                                placeholder="Digite a temperatura:">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="calendario" class="form-control-sm" id="luminosidade" name="luminosidade"
                                value="" placeholder="Digite a luminosidade:">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="calendario" class="form-control-sm" id="co2" name="co2" value=""
                                placeholder="Digite o nível de Co²:">
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm btn-acessar"
                            style="border-radius: 100px; width: 100px; background-color:#6930C3;">Enviar</button>
                    </form>
                </div>
            </div>
                    <?php
                      include_once('recycle.php');
                    $dado = $con->fetch_array();
                    $dado2 = $con2->fetch_array();

                    if ($dado['temp'] >= $dado2['temp'] && $dado['lumi'] >= $dado2['luminosidade'] && $dado['co2'] >= $dado2['co2']) {
                        $para = "mcpelok@gmail.com";
                        $assunto = "ATENÇÃO TEMPERATURA ALTA!!!";
                        $corpo = "Ultimas temperaturas" . $dado['temp'];
                        $headers = "From:p.goncalves@aluno.ifsp.edu.br";
                        if (mail($para, $assunto, $corpo, $headers)) {
                            echo "Aviso enviado!!!";
                        }
                    } else {
                        echo "NÃO ENVIADO" . '<br>';
                    }

                    ?>

                    <?php
                    if (isset($_POST['submit'])) {
                        include_once('conexao.php');
                        $temp = $_POST['temp'];
                        $luminosidade = $_POST['luminosidade'];
                        $co2 = $_POST['co2'];
                        $result = mysqli_query($conexao, "INSERT INTO pesq(temp,luminosidade,co2) VALUES ('$temp','$luminosidade','$co2')");
                    }
                    ?>  
    </header>
    <!-- <nav>
    <p>Nav</p>
  </nav> -->

</body>

</html>