<?php
include 'Ponto.php';

$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];

$ponto1 = new Ponto($x1, $y1);
$ponto2 = new Ponto($x2, $y2);

$distancia = Ponto::distanciaEntreDoisPontos($x1, $y1, $x2, $y2);

echo "Distância entre os pontos ($x1, $y1) e ($x2, $y2) é: " . $distancia;
echo "<br>Total de pontos criados: " . Ponto::getContador();
?>