<?php

$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = '';
$dbName = 'arduino';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
////////////////////////////////
$luz = array();
$count = 0;

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "arduino");

$res = mysqli_query($link, "select * from dados");

while ($row = mysqli_fetch_array($res)) {
    $luz[$count]["lumi"] = $row["lumi"];
    $luz[$count]["y"] = $row["lumi"];
    $count++;
}
////////////////////////////////
$Temp = array();
$count = 0;

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "arduino");

$res = mysqli_query($link, "select * from dados");

while ($row = mysqli_fetch_array($res)) {
    $Temp[$count]["temp"] = $row["temp"];
    $Temp[$count]["y"] = $row["temp"];
    $count++;
}
/////////////////////////////////
$n_co = array();
$count = 0;

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "arduino");

$res = mysqli_query($link, "select * from dados");

while ($row = mysqli_fetch_array($res)) {
    $n_co[$count]["co2"] = $row["co2"];
    $n_co[$count]["y"] = $row["co2"];
    $count++;
}

